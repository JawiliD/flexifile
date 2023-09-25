<div class="modal fade" id="exampleModal2"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel2">Family Background</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                    <div class="row align-items-start mt-2">
                        <div class="col">                                    
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Surname:</span>
                            <input type="text" name="spouseSurname" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Firstname:</span>
                                <input type="text" name="spouseFirstname" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Middle Name:</span>
                                <input type="text" name="spouseMidname" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Occupation:</span>
                                <input type="text" name="occupation" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Employer/Business Name:</span>
                                <input type="text" name="employer" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Business Address:</span>
                                <input type="text" name="business" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telephone no:</span>
                                <input type="text" name="telephoneNo" class="form-control" value="">
                            </div>        
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Surname:</span>
                                <input type="text" name="fatherSurname" class="form-control" value="">
                            </div>                                
                        </div>
                        <div class="col">                                       
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Firstname:</span>
                                <input type="text" name ="fatherFirstname" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Middle name:</span>
                                <input type="text" name="fatherMidname" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR.,SR):</span>
                                <input type="text" name="fatherExtension" class="form-control" value="">
                            </div>
                            <p>Mother's Maiden Name</p>                                        
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Surname:</span>
                                <input type="text" name="motherSurname" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Firstname:</span>
                                <input type="text" name="motherFirstname" class="form-control" value="">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Middle name:</span>
                                <input type="text" name="motherMidname" class="form-control" value="">
                            </div>
                        </div>
                    </div> 

                    <hr>
                    <div class="family-div m-0 overflow-scroll">                          
                    <table class="table table-secondary table-striped text-center mt-3  family">
                        <thead>
                            <tr>
                                <th>Children Name</th>                                                                                         
                                <th>Date of Birth</th>
                            </tr>                                                            
                        </thead>
                        <tbody>
                            
                        </tbody>                        
                    </table>
                    </div>    
                    <hr>
                    <h5>Update number of Children</h5>  
                    <div class="input-group input-group-sm mt-3 mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Name of Children:</span>
                        <input type="text" name="up_childname" class="form-control">
                        <span class="mx-2"></span>
                        <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                        <input type="date" name="up_childbirth" class="form-control">
                    </div>                               
                    <div class="text-end">  
                        <button type="button" name="addBtn" class="btn btn-primary addbtn5" >Add</button>
                    </div>
                    <h5 class="mt-4">Preview</h5> 
                    <div class="family-div m-0 overflow-scroll">                          
                    <table class="table table-secondary table-striped text-center mt-3  update-family-table">
                        <thead>
                            <tr>
                                <th>Children Name</th>                                                                                         
                                <th>Date of Birth</th>                                            
                                <th>action</th>
                            </tr>                              
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                        <input type="hidden" name="update-family-details" id="update-family-details-input" value="<?php echo htmlspecialchars(json_encode($updatefamilyDetails)); ?>">
                    </table>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn btn-success" name="save_family">Save</button>
                    <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
    $('.btn.btn-primary.addbtn5').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var up_childname = $('input[name="up_childname"]').val();
        var up_childbirth = $('input[name="up_childbirth"]').val();

        // Create the table row HTML
        var newRow1 = '<tr>' +
            '<td>' + up_childname + '</td>' +
            '<td>' + up_childbirth + '</td>' +
            '<td><button class="btn btn-danger rounded delete-family">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.update-family-table tbody').append(newRow1);

        // Clear the input fields
        $('input[name="up_childname"]').val('');
        $('input[name="up_childbirth"]').val('');

        // Update the hidden input field with the updated child details array
        var currentDetails = JSON.parse($('#update-family-details-input').val());
        currentDetails.push({
            childname: up_childname,
            childbirth: up_childbirth
        });
        $('#update-family-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete child row
    $(document).on('click', '.btn.btn-danger.rounded.delete-family', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated child details array
        var currentDetails = JSON.parse($('#update-family-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#update-family-details-input').val(JSON.stringify(currentDetails));
    });
});

    </script>