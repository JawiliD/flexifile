<?php
include 'config.php';
include 'header.php';
echo $_SESSION['id'];
   

if (isset($_POST['submit'])) {  
    // Retrieve the education details from the JSON-encoded input    
    $workDetails = isset($_POST['work-details']) ? json_decode($_POST['work-details'], true) : array();


    // Insert education details into the database
    foreach ($workDetails as $work) {
        $userID = $_SESSION['id'];
        $workfrom = $work['workfrom'];
        $workto = $work['workto'];
        $department = $work['department'];
        $salary = $work['salary'];
        $paygrade = $work['paygrade'];
        $appointment = $work['appointment'];       
        $govservice = $work['govservice'];       

        $queryworkDetails = "INSERT INTO `work_experience_tb` (userid, work_from_date, work_to_date, department, salary, paygrade, appointment, gov_service) VALUES ('$userID', '$workfrom', '$workto', '$department', '$salary', '$paygrade', '$appointment', '$govservice')";
        $sqlworkDetails = mysqli_query($con, $queryworkDetails);

        if (!$sqlworkDetails) {
            die(mysqli_error($con));
        } else {            
            unset($_SESSION['civilServiceDetails']);
        }
    }
}


$workDetails = isset($_SESSION['workDetails']) ? $_SESSION['workDetails'] : array();
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
                        <form action="test-work.php" method="POST">                       
                        <h3> Work Experience</h3>
                                <div class="row align-items-start mt-2">
                                    <div class="col">
                                        <p>Inclusive Dates </p>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">From:</span>
                                            <input type="date" name="work-from-date" class="form-control">
                                            <span class="mx-2"></span>
                                            <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                            <input type="date" name="work-to-date" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Department/Agency/Office:</span>
                                            <input type="text" name="department" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Monthly Salary:</span>
                                                <input type="text" name="salary" class="form-control">
                                            </div>
                                        </div>
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Salary/Job/Pay Grade:</span>
                                            <input type="text" name="paygrade" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Status of Appointment:</span>
                                            <input type="text" name="appointment" class="form-control">
                                            </div>
                                        
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Gov't Service (Y/N):</span>
                                            <input type="text" name="gov-service" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn2" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="work-details-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  work-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Inclusive Dates</th> 
                                            <th>Department/Agency</th>
                                            <th>Monthly Salary</th>
                                            <th>Salary/Pay Grade</th>
                                            <th>Appointment status</th>                                                                                       
                                            <th>Gov't Service Y/N</th>                                                                                       
                                            <th>Action</th>
                                        </tr> 
                                        <tr>
                                            <th>From</th>
                                            <th>To</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="work-details" id="work-details-input" value="<?php echo htmlspecialchars(json_encode($workDetails)); ?>">
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
    $('.btn.btn-primary.addbtn2').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var workfrom = $('input[name="work-from-date"]').val();
        var workto = $('input[name="work-to-date"]').val();
        var department = $('input[name="department"]').val();
        var salary = $('input[name="salary"]').val();
        var paygrade = $('input[name="paygrade"]').val();
        var appointment = $('input[name="appointment"]').val();
        var govservice = $('input[name="gov-service"]').val();
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + workfrom + '</td>' +
            '<td>' + workto + '</td>' +
            '<td>' + department + '</td>' +
            '<td>' + salary + '</td>' +
            '<td>' + paygrade + '</td>' +
            '<td>' + appointment + '</td>' +            
            '<td>' + govservice + '</td>' +            
            '<td><button class="btn btn-danger rounded delete-work">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.work-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="work-from-date"]').val('');
        $('input[name="work-to-date"]').val('');
        $('input[name="department"]').val('');
        $('input[name="salary"]').val('');
        $('input[name="paygrade"]').val('');
        $('input[name="appointment"]').val('');
        $('input[name="gov-service"]').val('');
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#work-details-input').val());
        currentDetails.push({
            workfrom: workfrom,
            workto: workto,
            department: department,
            salary: salary,
            paygrade: paygrade,
            appointment: appointment,
            govservice: govservice
            
        });
        $('#work-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-civil-service', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#work-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#work-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>