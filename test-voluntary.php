<?php
include 'config.php';
include 'header.php';
echo $_SESSION['id'];
   

if (isset($_POST['submit'])) {  
    // Retrieve the education details from the JSON-encoded input    
    $voluntaryDetails = isset($_POST['voluntary-details']) ? json_decode($_POST['voluntary-details'], true) : array();


    // Insert education details into the database
    foreach ($voluntaryDetails as $voluntary) {
        $userID = $_SESSION['id'];
        $organization = $voluntary['organization'];
        $voluntaryfrom = $voluntary['voluntaryfrom'];
        $voluntaryto = $voluntary['voluntaryto'];
        $hours = $voluntary['hours'];
        $position = $voluntary['position'];             

        $queryvoluntaryDetails = "INSERT INTO `voluntary_work_tb` (userid, organization, from_date, to_date, hours, position) VALUES ('$userID', '$organization', '$voluntaryfrom', '$voluntaryto', '$hours', '$position')";
        $sqlvoluntaryDetails = mysqli_query($con, $queryvoluntaryDetails);

        if (!$sqlvoluntaryDetails) {
            die(mysqli_error($con));
        } else {            
            unset($_SESSION['voluntaryDetails']);
        }
    }
}


$voluntaryDetails = isset($_SESSION['voluntaryDetails']) ? $_SESSION['voluntaryDetails'] : array();
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
                        <form action="test-voluntary.php" method="POST">                       
                        <h3>Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s</h3>
                            <div class="row align-items-start mt-2">
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Name and Address of Organization:</span>
                                            <input type="text" name="organization" class="form-control">                                                                
                                        </div>
                                        <p>Inclusive Dates</p>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm"> From:</span>
                                            <input type="date" name="voluntary-from-date" class="form-control">
                                            <span class="mx-2"></span>
                                            <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                            <input type="date" name="voluntary-to-date" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                            <input type="text" name="hours" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Position/ Nature of Work:</span>
                                            <input type="text" name="position" class="form-control">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn3" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="voluntary-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  voluntary-table">
                                    <thead>
                                        <tr>
                                            <th>Name and address of Org</th>
                                            <th colspan="2">Inclusive Dates</th>                                             
                                            <th>Number of Hours</th>
                                            <th>Position</th>                                                                                                                                  
                                            <th>Action</th>
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
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="voluntary-details" id="voluntary-details-input" value="<?php echo htmlspecialchars(json_encode($voluntaryDetails)); ?>">
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
    $('.btn.btn-primary.addbtn3').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var organization = $('input[name="organization"]').val();
        var voluntaryfrom = $('input[name="voluntary-from-date"]').val();
        var voluntaryto = $('input[name="voluntary-to-date"]').val();
        var hours = $('input[name="hours"]').val();
        var position = $('input[name="position"]').val();
        
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + organization + '</td>' +
            '<td>' + voluntaryfrom + '</td>' +
            '<td>' + voluntaryto + '</td>' +
            '<td>' + hours + '</td>' +
            '<td>' + position + '</td>' +                       
            '<td><button class="btn btn-danger rounded delete-voluntary">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.voluntary-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="organization"]').val('');
        $('input[name="voluntary-from-date"]').val('');
        $('input[name="voluntary-to-date"]').val('');
        $('input[name="hours"]').val('');
        $('input[name="position"]').val('');        
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#voluntary-details-input').val());
        currentDetails.push({
            organization: organization,
            voluntaryfrom: voluntaryfrom,
            voluntaryto: voluntaryto,
            hours: hours,
            position: position           
            
        });
        $('#voluntary-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-voluntary', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#voluntary-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#voluntary-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>