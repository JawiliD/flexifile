<?php
include 'config.php';
include 'header.php';
echo $_SESSION['id'];
   

if (isset($_POST['submit'])) {  
    // Retrieve the education details from the JSON-encoded input    
    $civilServiceDetails = isset($_POST['civil-service-details']) ? json_decode($_POST['civil-service-details'], true) : array();


    // Insert education details into the database
    foreach ($civilServiceDetails as $service) {
        $userID = $_SESSION['id'];
        $career = $service['career'];
        $rating = $service['rating'];
        $examination = $service['examination'];
        $place = $service['place'];
        $number = $service['number'];
        $validity = $service['validity'];       

        $queryserviceDetails = "INSERT INTO `civil_service_tb` (userid, career, rating, examination, place, number, validity) VALUES ('$userID', '$career', '$rating', '$examination', '$place', '$number', '$validity')";
        $sqlserviceDetails = mysqli_query($con, $queryserviceDetails);

        if (!$sqlserviceDetails) {
            die(mysqli_error($con));
        } else {
            header('location: test-civil.php');
            unset($_SESSION['civilServiceDetails']);
        }
    }
}


$civilServiceDetails = isset($_SESSION['civilServiceDetails']) ? $_SESSION['civilServiceDetails'] : array();
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
                        <form action="test-civil.php" method="POST">                       
                        <h3>Civil Service Eligibility</h3>
                            <div class="row align-items-start mt-2">
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Career Service:</span>
                                        <input type="text" name="career" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Rating:</span>
                                        <input type="text" name="rating" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Date of Examination/Conferment:</span>
                                        <input type="date" name="examination" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Place of Examination/Conferment:</span>
                                        <input type="text" name="place" class="form-control">
                                    </div>
                                    <p>License:</p>
                                    <div class="input-group input-group-sm mb-3">                                        
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Number:</span>
                                        <input type="text" name="number" class="form-control">
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Date of Validity:</span>
                                        <input type="date" name="validity" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn1" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="civil-service-details-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  civil-service-table">
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
                                            <th></th>                                                                                   </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="civil-service-details" id="civil-service-details-input" value="<?php echo htmlspecialchars(json_encode($civilServiceDetails)); ?>">
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
    $('.btn.btn-primary.addbtn1').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var career = $('input[name="career"]').val();
        var rating = $('input[name="rating"]').val();
        var examination = $('input[name="examination"]').val();
        var place = $('input[name="place"]').val();
        var number = $('input[name="number"]').val();
        var validity = $('input[name="validity"]').val();
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + career + '</td>' +
            '<td>' + rating + '</td>' +
            '<td>' + examination + '</td>' +
            '<td>' + place + '</td>' +
            '<td>' + number + '</td>' +
            '<td>' + validity + '</td>' +            
            '<td><button class="btn btn-danger rounded delete-civil-service">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.civil-service-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="career"]').val('');
        $('input[name="rating"]').val('');
        $('input[name="examination"]').val('');
        $('input[name="place"]').val('');
        $('input[name="number"]').val('');
        $('input[name="validity"]').val('');
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#civil-service-details-input').val());
        currentDetails.push({
            career: career,
            rating: rating,
            examination: examination,
            place: place,
            number: number,
            validity: validity
            
        });
        $('#civil-service-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-civil-service', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#civil-service-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#civil-service-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>