<?php
include 'config.php';
include 'header.php';
echo $_SESSION['id'];
   

if (isset($_POST['submit'])) {  
    // Retrieve the education details from the JSON-encoded input
    $educationDetails = isset($_POST['education-details']) ? json_decode($_POST['education-details'], true) : array();
    


    // Insert education details into the database
    foreach ($educationDetails as $education) {
        $userID = $_SESSION['id'];
        $level = $education['level'];
        $schoolName = $education['schoolName'];
        $degree = $education['degree'];
        $fromDate = $education['fromDate'];
        $toDate = $education['toDate'];
        $units = $education['units'];
        $graduated = $education['graduated'];
        $honors = $education['honors'];

        $queryeducationDetails = "INSERT INTO `education_tb` (userid, level, schoolName, degree, fromDate, toDate, units, graduated, honors) VALUES ('$userID', '$level', '$schoolName', '$degree', '$fromDate', '$toDate', '$units', '$graduated', '$honors')";
        $sqleducationDetails = mysqli_query($con, $queryeducationDetails);

        if (!$sqleducationDetails) {
            die(mysqli_error($con));
        } else {
            header('location: test-modal.php');
            unset($_SESSION['educationDetails']);
        }
    }
}

$educationDetails = isset($_SESSION['educationDetails']) ? $_SESSION['educationDetails'] : array();
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
                        <form action="test-modal.php" method="POST">
                        <h3> Educational Background</h3>
                        <h5 class="fw-normal">Elementary</h5>
                        <div class="container text-start px-5">                                                        
                            <div class="row mt-2">                                                        
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Level:</span>
                                        <select class="form-control" name="level" id="level">
                                            <option value="elementary">Elementary</option>
                                            <option value="secondary">Secondary</option>
                                            <option value="vocational">Vocational</option>
                                            <option value="college">College</option>
                                            <option value="graduate">Graduate Studies</option>
                                        </select>   
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                        <input type="text" name="schoolName" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                        <input type="text" name="degree" class="form-control">
                                    </div>
                                    <p>Period Attendance</p>
                                    <div class="input-group input-group-sm mb-3">                                        
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> From:</span>
                                        <input type="text" name="fromDate" class="form-control">
                                        <span class="mx-2"></span>
                                        <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                        <input type="text" name="toDate" class="form-control">
                                        </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                        <input type="text" name="units" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                        <input type="text" name="graduated" class="form-control">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                        <input type="text" name="honors" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="text-end">  
                            <button type="button" name="addBtn" class="btn btn-primary addbtn" >Add</button>
                            </div>
                            <h5 class="mt-4">Preview</h5> 
                            <div class="education-details-div m-0 overflow-scroll">                          
                            <table class="table table-secondary table-striped text-center mt-3  education-table">
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
                                <input type="hidden" name="education-details" id="education-details-input" value="<?php echo htmlspecialchars(json_encode($educationDetails)); ?>">
                            </table>
                            </div>
                            <hr>
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
    $('.btn.btn-primary.addbtn').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var level = $('#level').val();
        var schoolName = $('input[name="schoolName"]').val();
        var degree = $('input[name="degree"]').val();
        var fromDate = $('input[name="fromDate"]').val();
        var toDate = $('input[name="toDate"]').val();
        var units = $('input[name="units"]').val();
        var graduated = $('input[name="graduated"]').val();
        var honors = $('input[name="honors"]').val();

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + level + '</td>' +
            '<td>' + schoolName + '</td>' +
            '<td>' + degree + '</td>' +
            '<td>' + fromDate + '</td>' +
            '<td>' + toDate + '</td>' +
            '<td>' + units + '</td>' +
            '<td>' + graduated + '</td>' +
            '<td>' + honors + '</td>' +
            '<td><button class="btn btn-danger rounded delete-civil-service">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.education-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="schoolName"]').val('');
        $('input[name="degree"]').val('');
        $('input[name="fromDate"]').val('');
        $('input[name="toDate"]').val('');
        $('input[name="units"]').val('');
        $('input[name="graduated"]').val('');
        $('input[name="honors"]').val('');

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#education-details-input').val());
        currentDetails.push({
            level: level,
            schoolName: schoolName,
            degree: degree,
            fromDate: fromDate,
            toDate: toDate,
            units: units,
            graduated: graduated,
            honors: honors
        });
        $('#education-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete education row
    $(document).on('click', '.btn.btn-danger.rounded.delete-education', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#education-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#education-details-input').val(JSON.stringify(currentDetails));
    });
});
</script>
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
        

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#civil-service-details-input').val());
        currentDetails.push({
            level: level,
            schoolName: schoolName,
            degree: degree,
            fromDate: fromDate,
            toDate: toDate,
            units: units,
            graduated: graduated,
            honors: honors
        });
        $('#civil-service-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete education row
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