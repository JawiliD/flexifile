<?php
// include '../header.php';
// include '../config.php';
// $userID = $_SESSION['id'];
if(isset($_POST['save_training'])){
    $updateTrainingDetails = isset($_POST['update-training-details']) ? json_decode($_POST['update-training-details'], true) : array();

    foreach ($updateTrainingDetails as $updateTraining) {
        $userID = $_SESSION['id'];
        $title = $updateTraining['up_title'];
        $trainingfrom = $updateTraining['up_trainingfrom'];
        $trainingto = $updateTraining['up_trainingto'];
        $duration = $updateTraining['up_duration'];
        $type = $updateTraining['up_type'];             
        $sponsor = $updateTraining['up_sponsor'];             

        $queryUpdatetrainingDetails = "INSERT INTO `training_programs_tb` (userid, title, training_from_date, training_to_date, duration, type, sponsor) VALUES (?,?,?,?,?,?,?)";
        $stmt_updateTraining = $con->prepare($queryUpdatetrainingDetails);

        $stmt_updateTraining->bind_param('issssss', $userID, $title, $trainingfrom, $trainingto, $duration, $type, $sponsor);


        $execute_updateTraining = $stmt_updateTraining->execute();

        if (!$execute_updateTraining) {
            die(mysqli_error($con));
        } 
    }
    $stmt_updateTraining->close();
    unset($_SESSION['updateTrainingDetails']);
    
    //notification
    $queryTrainingNotification = "INSERT INTO `notification_tb` (fullname, faculty_type, date_upload, updated_part) VALUES (?, ?, ?, ?)";

    $stmt_trainingNotification = $con->prepare($queryTrainingNotification);

    $stmt_trainingNotification->bind_param('ssss', $fullname, $facultyType, $date, $section);

    $fullname = $_SESSION['fullname'];
    date_default_timezone_set("Asia/Manila");
    $date = date("Y-m-d");
    $section = "edited his/her Training Programs Details";
    $facultyType = $_SESSION['type'];

    $execute_trainingNotification = $stmt_trainingNotification->execute();

    if (!$execute_trainingNotification){        
      echo "Error: " . $stmt_trainingNotification->error;
    }else{
        echo "Notification inserted successfully.";
      $stmt_trainingNotification->close(); 
            
    }
    $con->close(); 
    

}

$updateTrainingDetails = isset($_SESSION['updateTrainingDetails']) ? $_SESSION['updateTrainingDetails'] : array();

?>
 <!-- <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal7">Edit</button> -->
<div class="modal fade " id="exampleModal7"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel7">Learning and Development (L&D) Interventions/Training Programs Attended</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="training-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th colspan="2">Inclusive Dates</th>                                             
                                            <th>Number of Hours</th>
                                            <th>Type of LD</th>                                                                                                                                  
                                            <th>Sponsor/conductor</th>                                            
                                        </tr> 
                                        <tr>
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
                                         $sqlSelectTraining = mysqli_query($con,"SELECT * FROM `training_programs_tb` where userid = $userID");
                                         while($rowTraining = mysqli_fetch_array($sqlSelectTraining)){
                                            echo '
                                            <tr>
                                            <td>'.$rowTraining['title'].'</td>
                                            <td>'.$rowTraining['training_from_date'].'</td>
                                            <td>'.$rowTraining['training_to_date'].'</td>
                                            <td>'.$rowTraining['duration'].'</td>
                                            <td>'.$rowTraining['type'].'</td>
                                            <td>'.$rowTraining['sponsor'].'</td>
                                            </tr>';
                                         }


                                        ?>
                                        
                                    </tbody>                                    
                                </table>
                            </div>  
                            <hr>
                            <h5>Update list of Trainings</h5>
                        <form method="POST">
                            <div class="row align-items-start mt-2">
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Title of Learning and Development Interventions/Training Programs:</span>
                                        <input type="text" name="up_title" class="form-control">
                                    </div>
                                    <p>Inclusive Dates of Attendance</p>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">From:</span>
                                        <input type="text" name="up_training-from-date" class="form-control">
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                        <input type="text" name="up_training-to-date" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                        <input type="text" name="up_duration" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Type of LD( Managerial/ Supervisory/Technical/etc):</span>
                                        <input type="text" name="up_type" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Conducted/Sponsored by :</span>
                                        <input type="text" name="up_sponsor" class="form-control">
                                    </div>
                                </div>
                            </div>                                 
                            <div class="text-end">  
                                <button type="button" name="addBtn" class="btn btn-primary addbtn4" >Add</button>
                            </div>
                            <h5 class="mt-4">Preview</h5> 
                            <div class="training-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  update-training-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th colspan="2">Inclusive Dates</th>                                             
                                            <th>Number of Hours</th>
                                            <th>Type of LD</th>                                                                                                                                  
                                            <th>Sponsor/conductor</th>
                                            <th>action</th>
                                        </tr> 
                                        <tr>
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
                                    <input type="hidden" name="update-training-details" id="update-training-details-input" value="<?php echo htmlspecialchars(json_encode($updateTrainingDetails)); ?>">
                                </table>
                            </div> 
                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="save_training" >Save</button>
                        <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
    $(document).ready(function() {
    $('.btn.btn-primary.addbtn4').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var up_title = $('input[name="up_title"]').val();
        var up_trainingfrom = $('input[name="up_training-from-date"]').val();
        var up_trainingto = $('input[name="up_training-to-date"]').val();
        var up_duration = $('input[name="up_duration"]').val();
        var up_type = $('input[name="up_type"]').val();
        var up_sponsor = $('input[name="up_sponsor"]').val();
        
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + up_title + '</td>' +
            '<td>' + up_trainingfrom + '</td>' +
            '<td>' + up_trainingto + '</td>' +
            '<td>' + up_duration + '</td>' +
            '<td>' + up_type + '</td>' +                       
            '<td>' + up_sponsor + '</td>' +                       
            '<td><button class="btn btn-danger rounded delete-update-training">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.update-training-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="up_title"]').val('');
        $('input[name="up_training-from-date"]').val('');
        $('input[name="up_training-to-date"]').val('');
        $('input[name="up_duration"]').val('');
        $('input[name="up_type"]').val('');        
        $('input[name="up_sponsor"]').val('');        
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#update-training-details-input').val());
        currentDetails.push({
            up_title: up_title,
            up_trainingfrom: up_trainingfrom,
            up_trainingto: up_trainingto,
            up_duration: up_duration,
            up_type: up_type,         
            up_sponsor: up_sponsor          
            
        });
        $('#update-training-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-update-training', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#update-training-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#update-training-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>
