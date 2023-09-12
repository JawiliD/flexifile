<?php
include 'config.php';
include 'header.php';
echo $_SESSION['id'];
   

if (isset($_POST['submit'])) {  
    // Retrieve the education details from the JSON-encoded input    
    $familyDetails = isset($_POST['family-details']) ? json_decode($_POST['family-details'], true) : array();

    if(json_last_error() !== JSON_ERROR_NONE){
        echo "JSON decoding error: " . json_last_error_msg();
    }else{// Insert education details into the database
            foreach ($familyDetails as $family) {
                    $userID = $_SESSION['id'];
                    $childname = $family['childname'];
                    $childbirth = $family['childbirth'];

                    echo "Child Name: " . $family['childname'] . "<br>";
                    echo "Child Birth: " . $family['childbirth'] . "<br>";

                    $queryfamilyDetails = "INSERT INTO `family_children_tb` (userid, childname, childbirth) VALUES (?, ?, ?)";
                    $stmt_familyDetails = $con->prepare($queryfamilyDetails);

                    // Bind parameters
                    $stmt_familyDetails->bind_param('iss', $userID, $childname, $childbirth);

                    $execute_updateFamilyDetails = $stmt_familyDetails->execute();

                if (!$execute_updateFamilyDetails) {
                    die(mysqli_error($con));
                } else {            
                    unset($_SESSION['familyDetails']);
                    $stmt_familyDetails->close();
                    $con->close();
                }
            }
    }
    
}


// $familyDetails = isset($_SESSION['familyDetails']) ? $_SESSION['familyDetails'] : array();
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
                        <form action="test-family.php" method="POST">                       
                            <h3>Family background</h3>
                                <div class="row align-items-start mt-2">
                                    <div class="col">                                    
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Surname:</span>
                                        <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Firstname:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Middle Name:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Occupation:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Employer/Business Name:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Business Address:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Telephone no:</span>
                                            <input type="text" class="form-control">
                                        </div>        
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Surname:</span>
                                            <input type="tel" class="form-control">
                                        </div>                                
                                    </div>
                                    <div class="col">                                       
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Firstname:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Middle name:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR.,SR):</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Maiden Name:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Surname:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Firstname:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Middle name:</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div> 
                                <hr>
                                <div class="input-group input-group-sm mt-3 mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Name of Children:</span>
                                    <input type="text" name="childname" class="form-control">
                                    <span class="mx-2"></span>
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                    <input type="date" name="childbirth" class="form-control">
                                </div>                               
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn5" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="family-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  family-table">
                                    <thead>
                                        <tr>
                                            <th>Children Name</th>                                                                                         
                                            <th>Date of Birth</th>                                            
                                            <th>action</th>
                                        </tr> 
                                        <tr>
                                            <th></th>                                            
                                            <th></th>                                            
                                            <th></th>                                            
                                        </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                                    <input type="hidden" name="family-details" id="family-details-input" value="<?php echo htmlspecialchars(json_encode($familyDetails)); ?>">
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
    $('.btn.btn-primary.addbtn5').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var childname = $('input[name="childname"]').val();
        var childbirth = $('input[name="childbirth"]').val();
              
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + childname + '</td>' +
            '<td>' + childbirth + '</td>' +                               
            '<td><button class="btn btn-danger rounded delete-family">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.family-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="childname"]').val('');
        $('input[name="childbirth"]').val('');
       

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#family-details-input').val());
        currentDetails.push({
            childname: childname,
            childbirth: childbirth,                    
            
        });
        $('#family-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-family', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#family-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#family-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>