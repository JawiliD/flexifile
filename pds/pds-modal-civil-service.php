<?php
// include '../header.php';
// include '../config.php';
// $userID = $_SESSION['id'];

if(isset($_POST['save_civil_service'])){
    $updateCivilServiceDetails = isset($_POST['update-civil-service-details']) ? json_decode($_POST['update-civil-service-details'], true) : array();

    foreach ($updateCivilServiceDetails as $up_service) {       
        $career = $up_service['up_career'];
        $rating = $up_service['up_rating'];
        $examination = $up_service['up_examination'];
        $place = $up_service['up_place'];
        $number = $up_service['up_number'];
        $validity = $up_service['up_validity'];       

        $queryupdateServiceDetails = "INSERT INTO `civil_service_tb` (userid, career, rating, examination, place, number, validity) VALUES (?,?,?,?,?,?,?)";
        $stmt_updateCivilService = $con->prepare($queryupdateServiceDetails);

        $stmt_updateCivilService->bind_param('issssss',$userID, $career, $rating, $examination, $place, $number, $validity);
        
        $stmt_executeUpdateCivilService =  $stmt_updateCivilService->execute();

        if (!$stmt_executeUpdateCivilService) {
            die(mysqli_error($con));
        } 
    }
    $stmt_updateCivilService->close();
    unset($_SESSION['updateCivilServiceDetails']);
    
    //notification
    $queryCivilNotification = "INSERT INTO `notification_tb` (fullname, faculty_type, date_upload, updated_part) VALUES (?, ?, ?, ?)";

    $stmt_civilNotification = $con->prepare($queryCivilNotification);

    $stmt_civilNotification->bind_param('ssss', $fullname, $facultyType, $date, $section);

    $fullname = $_SESSION['fullname'];
    date_default_timezone_set("Asia/Manila");
    $date = date("Y-m-d");
    $section = "edited his/her Civil Service Details";
    $facultyType = $_SESSION['type'];

    $execute_civilNotification = $stmt_civilNotification->execute();

    if (!$execute_civilNotification){        
      echo "Error: " . $stmt_civilNotification->error;
    }else{
        echo "Notification inserted successfully.";
      $stmt_civilNotification->close(); 
      $con->close();       
    }
    
}

$updateCivilServiceDetails = isset($_SESSION['updateCivilServiceDetails']) ? $_SESSION['updateCivilServiceDetails'] : array();



?>
<!-- <button type="button" class="btn btn-success px-3 edit-btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal4">Edit</button> -->
<div class="modal fade" id="exampleModal4"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel4">Civil Service Eligibility</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class="civil-service-details-div m-0 overflow-scroll">                          
                            <table class="table table-secondary table-striped text-center mt-3  civil-service">
                                <thead>
                                    <tr>
                                        <th>Career Service</th>
                                        <th>Rating</th>
                                        <th>Examination Date</th>
                                        <th>Examination Place</th>
                                        <th colspan="2">License</th>                                            
                                        
                                    </tr> 
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>  
                                        <th>Number</th>
                                        <th>Validity Date</th>                                                         
                                    </tr>                                     
                                </thead>
                                <tbody>
                                <?php                                    
                                    $querySelectCivilService = "SELECT * FROM `civil_service_tb` where userid = $userID";
                                    $sqlSelectCivilService = mysqli_query($con,$querySelectCivilService);
                                    while($rowCivil = mysqli_fetch_array($sqlSelectCivilService)){
                                        echo '<tr>
                                        <td>'.$rowCivil['career'].'</td>
                                        <td>'.$rowCivil['rating'].'</td>
                                        <td>'.$rowCivil['examination'].'</td>
                                        <td>'.$rowCivil['place'].'</td>
                                        <td>'.$rowCivil['number'].'</td>
                                        <td>'.$rowCivil['validity'].'</td>                                        
                                        </tr>';
                                    }

                                    ?>
                                    
                                </tbody>                                
                            </table>
                        </div>
                        <hr>
                        <h5>Update list of Career Service</h5>
                        <form method="POST">
                        <div class="row align-items-start mt-2">
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Career Service:</span>
                                        <input type="text" name="up_career" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Rating:</span>
                                        <input type="text" name="up_rating" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Date of Examination/Conferment:</span>
                                        <input type="text" name="up_examination" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Place of Examination/Conferment:</span>
                                        <input type="text" name="up_place" class="form-control">
                                    </div>
                                    <p>License:</p>
                                    <div class="input-group input-group-sm mb-3">                                        
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Number:</span>
                                        <input type="text" name="up_number" class="form-control">
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Date of Validity:</span>
                                        <input type="text" name="up_validity" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtnUpdateCivil" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="civil-service-details-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  update-civil-service-table">
                                    <thead>
                                        <tr>
                                            <th>Career Service</th>
                                            <th>Rating</th>
                                            <th>Examination Date</th>
                                            <th>Examination Place</th>
                                            <th colspan="2">License</th>                                            
                                            <th>Action</th>
                                        </tr> 
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Number</th>
                                            <th>Validity Date</th>
                                            <th></th>                                                                                  
                                        </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="update-civil-service-details" id="update-civil-service-input" value="<?php echo htmlspecialchars(json_encode($updateCivilServiceDetails)); ?>">
                                </table>
                            </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="save_civil_service">Save</button>
                            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                        </div>
                        </form> 
                    </div>
                </div>
            </div>
        <script>
    $(document).ready(function() {
    $('.btn.btn-primary.addbtnUpdateCivil').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var up_career = $('input[name="up_career"]').val();
        var up_rating = $('input[name="up_rating"]').val();
        var up_examination = $('input[name="up_examination"]').val();
        var up_place = $('input[name="up_place"]').val();
        var up_number = $('input[name="up_number"]').val();
        var up_validity = $('input[name="up_validity"]').val();
       

        // Create the table row HTML
        var newRow1 = '<tr>' +
            '<td>' + up_career + '</td>' +
            '<td>' + up_rating + '</td>' +
            '<td>' + up_examination + '</td>' +
            '<td>' + up_place + '</td>' +
            '<td>' + up_number + '</td>' +
            '<td>' + up_validity + '</td>' +            
            '<td><button class="btn btn-danger rounded delete-update-civil-service">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.update-civil-service-table tbody').append(newRow1);

        // Clear the input fields
        $('input[name="up_career"]').val('');
        $('input[name="up_rating"]').val('');
        $('input[name="up_examination"]').val('');
        $('input[name="up_place"]').val('');
        $('input[name="up_number"]').val('');
        $('input[name="up_validity"]').val('');
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails1 = JSON.parse($('#update-civil-service-input').val());
        currentDetails1.push({
            up_career: up_career,
            up_rating: up_rating,
            up_examination: up_examination,  
            up_place: up_place,
            up_number: up_number,
            up_validity: up_validity
            
        });
        $('#update-civil-service-input').val(JSON.stringify(currentDetails1));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-update-civil-service', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails1 = JSON.parse($('#update-civil-service-input').val());
        var rowIndex1 = $(this).closest('tr').index();
        currentDetails1.splice(rowIndex1, 1);
        $('#update-civil-service-input').val(JSON.stringify(currentDetails1));
    });
});
    </script>