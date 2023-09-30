<?php
// include '../header.php';
// include '../config.php';
if(isset($_POST['save_education'])){
    $updateEducationDetails = isset($_POST['update-education-details']) ? json_decode($_POST['update-education-details'], true) : array();

    // Insert education details into the database
    foreach ($updateEducationDetails as $up_education) {
        $userID = $_SESSION['id'];
        $level = $up_education['up_level'];
        $schoolName = $up_education['up_school_name'];
        $degree = $up_education['up_degree'];
        $fromDate = $up_education['up_from_date'];
        $toDate = $up_education['up_to_date'];
        $units = $up_education['up_units'];
        $graduated = $up_education['up_year_graduated'];
        $honors = $up_education['up_honors'];

        $queryeducationDetails = "INSERT INTO `education_tb` (userid, level, schoolName, degree, fromDate, toDate, units, graduated, honors) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt_updateEducation = $con->prepare($queryeducationDetails);

        $stmt_updateEducation->bind_param('issssssss', $userID, $level, $schoolName, $degree, $fromDate, $toDate, $units, $graduated, $honors);
       
        $execute_updateEducation = $stmt_updateEducation->execute();

        if (!$execute_updateEducation) {
            die(mysqli_error($con));
        } 
    }
    $stmt_updateEducation->close();
    unset($_SESSION['updateEducationDetails']);
    
    //notification
    $queryEducNotification = "INSERT INTO `notification_tb` (fullname, faculty_type, date_upload, updated_part) VALUES (?, ?, ?, ?)";

    $stmt_educNotification = $con->prepare($queryEducNotification);

    $stmt_educNotification->bind_param('ssss', $fullname, $facultyType, $date, $section);

    $fullname = $_SESSION['fullname'];
    date_default_timezone_set("Asia/Manila");
    $date = date("Y-m-d");
    $section = "edited his/her Education Details";
    $facultyType = $_SESSION['type'];

    $execute_educNotification = $stmt_educNotification->execute();

    if (!$execute_educNotification){        
      echo "Error: " . $stmt_educNotification->error;
    }else{
        echo "Notification inserted successfully.";
      $stmt_educNotification->close(); 
      $con->close();       
    }   

   
}   

$updateEducationDetails = isset($_SESSION['updateEducationDetails']) ? $_SESSION['updateEducationDetails'] : array();

?>
<!-- <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal3">Edit</button> -->
<div class="modal fade" id="exampleModal3"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel3">Educational Background</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">                    
                    <div class="education-details-div m-0 overflow-scroll">                          
                            <table class="table table-secondary table-striped text-center mt-3  education">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>School Name</th>
                                        <th>Degree</th>
                                        <th colspan="2">Period of attendance</th>
                                        <th>highest Unit earned</th>
                                        <th>Year graduated</th>
                                        <th>Honors received</th>                                        
                                    </tr> 
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>                                        
                                    </tr>                                     
                                </thead>
                                <tbody>
                                <?php
                                    
                                    $querySelectEducation = "SELECT * FROM `education_tb` where userid = $userID";
                                    $sqlSelectEducation = mysqli_query($con,$querySelectEducation);

                                    while($rowSelect = mysqli_fetch_array($sqlSelectEducation)){
                                        echo '<tr>
                                        <td>'.$rowSelect['level'].'</td>
                                        <td>'.$rowSelect['schoolName'].'</td>
                                        <td>'.$rowSelect['degree'].'</td>
                                        <td>'.$rowSelect['fromDate'].'</td>
                                        <td>'.$rowSelect['toDate'].'</td>
                                        <td>'.$rowSelect['units'].'</td>
                                        <td>'.$rowSelect['graduated'].'</td>
                                        <td>'.$rowSelect['honors'].'</td>                                        
                                        </tr>';
                                    }


                                    ?>
                                </tbody>                                
                            </table>
                        </div>   
                        <hr>
                        <h5>Update list of Education details</h5>          
                        <div class="container text-start"> 
                        <form method="POST">                                                       
                            <div class="row mt-2">                                                        
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Level:</span>
                                        <select class="form-control" name="up_level" id="up_level">
                                            <option value="ELEMENTARY">Elementary</option>
                                            <option value="SECONDARY">Secondary</option>
                                            <option value="VOCATIONAL / TRADE COURSE">Vocational</option>
                                            <option value="COLLEGE">College</option>
                                            <option value="GRADUATE STUDIES">Graduate Studies</option>
                                        </select>   
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                        <input type="text" name="up_schoolName" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                        <input type="text" name="up_degree" class="form-control">
                                    </div>
                                    <p>Period Attendance</p>
                                    <div class="input-group input-group-sm mb-3">                                        
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> From:</span>
                                        <input type="text" name="up_fromDate" class="form-control">
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                        <input type="text" name="up_toDate" class="form-control">
                                        </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                        <input type="text" name="up_units" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                        <input type="text" name="up_graduated" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                        <input type="text" name="up_honors" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="text-end">  
                            <button type="button" name="addBtn" class="btn btn-primary addbtn" >Add</button>
                            </div>
                            <h5 class="mt-4">Preview</h5> 
                            <div class="education-details-div m-0 overflow-scroll">                          
                            <table class="table table-secondary table-striped text-center mt-3  update-education-table">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>School Name</th>
                                        <th>Degree</th>
                                        <th colspan="2">Period of attendance</th>
                                        <th>highest Unit earned</th>
                                        <th>Year graduated</th>
                                        <th>Honors received</th>
                                        <th>Action</th>
                                    </tr> 
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>                                     
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                <input type="hidden" name="update-education-details" id="update-education-details-input" value="<?php echo htmlspecialchars(json_encode($updateEducationDetails)); ?>">
                            </table>
                        </div>             
                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn btn-success" name="save_education">Save</button>
                    <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
$(document).ready(function() {
    $('.btn.btn-primary.addbtn').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var up_level = $('#up_level').val();
        var up_schoolName = $('input[name="up_schoolName"]').val();
        var up_degree = $('input[name="up_degree"]').val();
        var up_fromDate = $('input[name="up_fromDate"]').val();
        var up_toDate = $('input[name="up_toDate"]').val();
        var up_units = $('input[name="up_units"]').val();
        var up_graduated = $('input[name="up_graduated"]').val();
        var up_honors = $('input[name="up_honors"]').val();

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + up_level + '</td>' +
            '<td>' + up_schoolName + '</td>' +
            '<td>' + up_degree + '</td>' +
            '<td>' + up_fromDate + '</td>' +
            '<td>' + up_toDate + '</td>' +
            '<td>' + up_units + '</td>' +
            '<td>' + up_graduated + '</td>' +
            '<td>' + up_honors + '</td>' +
            '<td><button class="btn btn-danger rounded delete-update-education">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.update-education-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="up_schoolName"]').val('');
        $('input[name="up_degree"]').val('');
        $('input[name="up_fromDate"]').val('');
        $('input[name="up_toDate"]').val('');
        $('input[name="up_units"]').val('');
        $('input[name="up_graduated"]').val('');
        $('input[name="up_honors"]').val('');

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#update-education-details-input').val());
        currentDetails.push({
            up_level: up_level,
            up_school_name: up_schoolName,
            up_degree: up_degree,
            up_from_date: up_fromDate,
            up_to_date: up_toDate,
            up_units: up_units,
            up_year_graduated: up_graduated,
            up_honors: up_honors
        });
        $('#update-education-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete education row
    $(document).on('click', '.btn.btn-danger.rounded.delete-update-education', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#update-education-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#update-education-details-input').val(JSON.stringify(currentDetails));
    });
});
</script> 