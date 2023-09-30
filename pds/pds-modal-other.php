<?php
// include '../header.php';
// include '../config.php';
// $userID = $_SESSION['id'];
if(isset($_POST['save_others'])){
    $updateOtherDetails = isset($_POST['update-other-details']) ? json_decode($_POST['update-other-details'], true) : array();
    foreach ($updateOtherDetails as $up_others) {
        // $userID = $_SESSION['id'];
        $skills = $up_others['up_skills'];
        $recognition = $up_others['up_distinction'];
        $association = $up_others['up_association'];       
    
        // Create a prepared statement
        $queryUpdateOtherDetails = "INSERT INTO `other_info_tb` (userid, skills_hobbies, recognition, association) VALUES (?, ?, ?, ?)";
        $stmt_updateOther = mysqli_prepare($con, $queryUpdateOtherDetails);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt_updateOther, "isss", $userID, $skills, $recognition, $association);
    
        // Execute the statement
        $result_updateOther = mysqli_stmt_execute($stmt_updateOther);
    
        if (!$result_updateOther) {
            die(mysqli_error($con));
        } 
       
    }
    $stmt_updateOther->close();
    unset($_SESSION['updateOtherDetails']);

    //notification
    $queryOtherNotification = "INSERT INTO `notification_tb` (fullname, faculty_type, date_upload, updated_part) VALUES (?, ?, ?, ?)";

    $stmt_otherNotification = $con->prepare($queryOtherNotification);

    $stmt_otherNotification->bind_param('ssss', $fullname, $facultyType, $date, $section);

    $fullname = $_SESSION['fullname'];
    date_default_timezone_set("Asia/Manila");
    $date = date("Y-m-d");
    $section = "edited his/her Other Information Details";
    $facultyType = $_SESSION['type'];

    $execute_otherNotification = $stmt_otherNotification->execute();

    if (!$execute_otherNotification){        
      echo "Error: " . $stmt_otherNotification->error;
    }else{
        echo "Notification inserted successfully.";
      $stmt_otherNotification->close(); 
      $con->close();       
    }
}

$updateOtherDetails = isset($_SESSION['updateOtherDetails']) ? $_SESSION['updateOtherDetails'] : array();

?>
<!-- <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal9">Edit</button> -->
<div class="modal fade " id="exampleModal9"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel9">Other Information</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="training-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3">
                                    <thead>
                                        <tr>
                                            <th>Special Skill & Hobbies</th>                                            
                                            <th>Distinction</th>
                                            <th>Association</th> 
                                        </tr>                                                                           
                                    </thead>
                                    <tbody>
                                    <?php                                    
                                    $querySelectOther = "SELECT * FROM `other_info_tb` where userid = $userID";
                                    $sqlSelectOther = mysqli_query($con,$querySelectOther);
                                    while($rowOther = mysqli_fetch_array($sqlSelectOther)){
                                        echo '<tr>
                                        <td>'.$rowOther['skills_hobbies'].'</td>
                                        <td>'.$rowOther['recognition'].'</td>
                                        <td>'.$rowOther['association'].'</td>                                                                               
                                        </tr>';
                                    }

                                    ?>
                                        
                                    </tbody>                                    
                                </table>
                            </div>  
                            <hr>
                            <h5>Update list of Other Information</h5>
                        <form method="POST">
                            <div class="row align-items-start mt-2">
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Special Skills and Hobbies:</span>
                                        <input type="text" name="up_skills" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Non-Academic Distinction:</span>
                                        <input type="text" name="up_distinction" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Membership in Association:</span>
                                        <input type="text" name="up_association" class="form-control">
                                    </div>                                    
                                </div>
                            </div>                                 
                            <div class="text-end">  
                                <button type="button" name="addBtn" class="btn btn-primary addbtn6" >Add</button>
                            </div>
                            <h5 class="mt-4">Preview</h5> 
                            <div class="training-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  update-other-table">
                                    <thead>
                                        <tr>
                                            <th>Special Skill & Hobbies</th>                                            
                                            <th>Distinction</th>
                                            <th>Association</th> 
                                            <th>Action</th> 
                                        </tr>                                                                           
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="update-other-details" id="update-other-details-input" value="<?php echo htmlspecialchars(json_encode($updateOtherDetails)); ?>">
                                </table>
                            </div> 
                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="save_others" >Save</button>
                        <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
    $(document).ready(function() {
    $('.btn.btn-primary.addbtn6').on('click', function(e) {
        e.preventDefault(); // Prevent form submission
        
        var up_skills = $('input[name="up_skills"]').val();
        var up_distinction = $('input[name="up_distinction"]').val();
        var up_association = $('input[name="up_association"]').val();
        
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + up_skills + '</td>' +
            '<td>' + up_distinction + '</td>' +
            '<td>' + up_association + '</td>' +                                   
            '<td><button class="btn btn-danger rounded delete-update-other">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.update-other-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="up_skills"]').val('');
        $('input[name="up_distinction"]').val('');
        $('input[name="up_association"]').val('');               
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#update-other-details-input').val());
        currentDetails.push({
            up_skills: up_skills,
            up_distinction: up_distinction,
            up_association: up_association 
            
        });
        $('#update-other-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-update-other', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#update-other-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#update-other-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>
