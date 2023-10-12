<?php
require '../config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../css/virtual-select.min.css"> 
    <title>report-appointment-status</title>
</head>
<body>
<div class="layout">
    <?php
    // include '../header.php';
    // include 'sidebar-faculty-leader.php'; 
    // include '../dashboard/dashboard-notif.php';
       
    ?>

    </div>
    
    <div class="content" style="width:65vw">
        <!-- start coding here -->
        <?php
        include '../dashboard/dashboard.php';          
        include '../dashboard/dashboard-nav.php';          
        ?>
        <div class="mt-3 p-3 thirteen-div rounded">
            <h3>Faculty Based on Appoint Status</h3>
            <hr>
            <form method="POST">
                <div class="my-3">
                    <label>Faculty Members</label>
                    <select id="multi_option" class="selected_users" multiple name="selected_users[]" placeholder="Select" data-silent-initial-value-set="false">
                        <?php 
                        $sqlSelectFaculty = mysqli_query($con,"SELECT * FROM `user_tb`");
                        while($rowFaculty = mysqli_fetch_array($sqlSelectFaculty)){
                            echo '<option value="'.$rowFaculty['userid'].'">'.$rowFaculty['fullname'].'</option>';
                        }
                        ?>                            
                    </select>
                </div>
                <div class="my-3">
                    <label>Appoint Status</label>
                    <select id="multi_option" multiple name="appointment[]" placeholder="Select" data-silent-initial-value-set="false">
                        <option value="permanent">Permanent</option>
                        <option value="temporary" >Temporary</option>
                        <option value="contractual_unit" >Contractual</option>
                        <option value="contractual_doctor" >Part Time</option>
                    </select>
                </div>
                <div class="my-3">
                    <label>Type of Faculty</label>
                    <select id="multi_option" multiple name="facultyType[]" placeholder="Select" data-silent-initial-value-set="false">
                        <option value="iteFaculty">ITE Faculty</option>
                        <option value="geFaculty">GE Faculty</option>   
                    </select>
                </div> 
                <div class="my-3">
                    <label>Type of Chart/Graph</label>
                    <select id="multi_option" multiple name="chart[]" placeholder="Select" data-silent-initial-value-set="false">
                        <option value="pie chart">Pie Chart</option>
                        <option value="Bar Graph">Bar Graph</option>                   
                    </select>
                </div> 
                <div class="text-end">
                    <button class="mt-5 btn btn-primary" type="button" id="add_appointment name="add_appointment">Add</button>
                </div>
                <div class="mt-5">
                    <h3>Preview</h3>
                    <div class="border rounded mx-auto mt-3 preview" style="margin-top:5em;">
                        <!-- here the preview will appear -->
                        <?php
                        // Add form validation
                        if (empty($_POST['selected_users']) || empty($_POST['appointment'])) {
                        echo 'Please select at least one faculty member and appointment status.';
                        exit;
                        }

                        // Add a loading indicator to the preview table
                        echo '<div class="loading"><i class="fas fa-spinner fa-spin"></i> Loading...</div>';

                        // Fetch the data from the server
                        $selectedUserIds = $_POST['selected_users'];
                        $appointmentStatus = $_POST['appointment'];
                        $facultyType = $_POST['facultyType'];
                        $chartType = $_POST['chart'];

                        $sql = "SELECT u.fullname, u.appointment_status, f.faculty_type
                        FROM user_tb u 
                        INNER JOIN education_tb f ON u.userid = f.userid
                        WHERE u.userid IN (" . implode(',', $selectedUserIds) . ")
                        AND u.appointment_status IN ('" . implode("','", $appointmentStatus) . "')
                        AND f.faculty_type IN ('" . implode("','", $facultyType) . "')";

                        $result = mysqli_query($con, $sql);
                        if (!$result) {
                        echo 'Error fetching data from the server.';
                        exit;
                        }

                        // Update the preview table with the received data
                        $previewTable = '
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                        <th>Fullname</th>
                        <th>Appointment Status</th>
                        <th>Faculty Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        ';

                        while ($row = mysqli_fetch_assoc($result)) {
                        $previewTable .= '
                        <tr>
                        <td>' . $row['fullname'] . '</td>
                        <td>' . $row['appointment_status'] . '</td>
                        <td>' . $row['faculty_type'] . '</td>
                        </tr>
                        ';
                        }

                        $previewTable .= '
                        </tbody>
                        </table>
                        ';

                        // Remove the loading indicator
                        echo '<script>document.querySelector(".loading").remove();</script>';

                        // Display the preview table
                        echo $previewTable;

                        // Generate the final report using a charting library
                        if (isset($_POST['generate'])) {
                        // ...
                        }
                        ?>


                       
                    </div>
                    <div class="text-end">
                        <button class="btn btn-success mt-3">Generate</button>
                    </div>                    
                </div>
            </form>   
        </div>
        <hr>
        <div class="generated-report">
                
        </div>
    </div>
    <script type="text/javascript" src="../js/virtual-select.min.js"></script>
        <script type="text/javascript">
            VirtualSelect.init({ 
            ele: '#multi_option', 
           
            });

            
        </script>
        <script>
           document.getElementById("printButton").addEventListener("click", function() {
            
            window.print();
        });
        </script>
         <script type="text/javascript">        

        // JavaScript to dynamically update the preview table
        document.getElementById("add_appointment").addEventListener("click", function() {
            event.preventDefault();
            // Get the selected user IDs from the multi-select
            const selectedUserIds = Array.from(document.querySelectorAll('.selected_users option:checked')).map(option => option.value);

            // Send the selectedUserIds to the server via AJAX
            fetch('../f-leader/fetch-data.php', {
                method: 'POST',
                body: JSON.stringify({ selectedUserIds: selectedUserIds }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Update the preview table with the received data
                updatePreviewTable(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        function updatePreviewTable(userData) {
            // Get the table body element
            const tbody = document.querySelector("#previewTable tbody");

            // Clear existing rows in the table
            tbody.innerHTML = "";

            // Iterate over the user data and create table rows
            userData.forEach(user => {
                // Create a table row
                const row = document.createElement("tr");

                // Create a table cell for the fullname
                const fullnameCell = document.createElement("td");
                fullnameCell.textContent = user.fullname;

                // Append the cell to the row
                row.appendChild(fullnameCell);

                // Append the row to the table body
                tbody.appendChild(row);
            });
        }
    </script>
    
</body>
</html>
