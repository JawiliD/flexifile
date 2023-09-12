<?php
include 'config.php';
include 'header.php';
echo $_SESSION['id'];
   

if (isset($_POST['submit'])) {  
    // Retrieve the education details from the JSON-encoded input    
    $trainingDetails = isset($_POST['training-details']) ? json_decode($_POST['training-details'], true) : array();


    // Insert education details into the database
    foreach ($trainingDetails as $training) {
        $userID = $_SESSION['id'];
        $title = $training['title'];
        $trainingfrom = $training['trainingfrom'];
        $trainingto = $training['trainingto'];
        $duration = $training['duration'];
        $type = $training['type'];             
        $sponsor = $training['sponsor'];             

        $querytrainingDetails = "INSERT INTO `training_programs_tb` (userid, title, training_from_date, training_to_date, duration, type, sponsor) VALUES ('$userID', '$title', '$trainingfrom', '$trainingto', '$duration', '$type', '$sponsor')";
        $sqltrainingDetails = mysqli_query($con, $querytrainingDetails);

        if (!$sqltrainingDetails) {
            die(mysqli_error($con));
        } else {            
            unset($_SESSION['trainingDetails']);
        }
    }
}


$trainingDetails = isset($_SESSION['trainingDetails']) ? $_SESSION['trainingDetails'] : array();
?>
 <button type="button" class="btn btn-dark mt-5" data-bs-toggle="modal" data-bs-target="#pdsmodal">Create</button>

<div class="modal fade " id="pdsmodal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="pdsmodalabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel7">Create PDS Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="test-training.php" method="POST">                       
                        <h3>Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s</h3>
                            <div class="row align-items-start mt-2">
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Title of Learning and Development Interventions/Training Programs:</span>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                        <p>Inclusive Dates of Attendance</p>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">From:</span>
                                            <input type="date" name="training-from-date" class="form-control">
                                            <span class="mx-2"></span>
                                            <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                            <input type="date" name="training-to-date" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                            <input type="text" name="duration" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Type of LD( Managerial/ Supervisory/Technical/etc):</span>
                                            <input type="text" name="type" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Conducted/Sponsored by :</span>
                                            <input type="text" name="sponsor" class="form-control">
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn4" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="training-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  training-table">
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
                                    <input type="hidden" name="training-details" id="training-details-input" value="<?php echo htmlspecialchars(json_encode($trainingDetails)); ?>">
                                </table>
                                </div>

                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
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

        var title = $('input[name="title"]').val();
        var trainingfrom = $('input[name="training-from-date"]').val();
        var trainingto = $('input[name="training-to-date"]').val();
        var duration = $('input[name="duration"]').val();
        var type = $('input[name="type"]').val();
        var sponsor = $('input[name="sponsor"]').val();
        
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + title + '</td>' +
            '<td>' + trainingfrom + '</td>' +
            '<td>' + trainingto + '</td>' +
            '<td>' + duration + '</td>' +
            '<td>' + type + '</td>' +                       
            '<td>' + sponsor + '</td>' +                       
            '<td><button class="btn btn-danger rounded delete-training">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.training-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="title"]').val('');
        $('input[name="training-from-date"]').val('');
        $('input[name="training-to-date"]').val('');
        $('input[name="duration"]').val('');
        $('input[name="type"]').val('');        
        $('input[name="sponsor"]').val('');        
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#training-details-input').val());
        currentDetails.push({
            title: title,
            trainingfrom: trainingfrom,
            trainingto: trainingto,
            duration: duration,
            type: type,         
            sponsor: sponsor          
            
        });
        $('#training-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-training', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#training-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#training-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>