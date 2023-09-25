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
                                        <tr>                                            
                                            <th></th>
                                            <th></th>                                            
                                            <th></th>                                            
                                        </tr>                                     
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>                                    
                                </table>
                            </div>  
                            <hr>
                            <h5>Update list of Trainings</h5>
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
                                        <tr>                                                                                       
                                            <th></th>
                                            <th></th>
                                            <th></th>                                            
                                            <th></th>                                            
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
                        <button type="submit" class="btn btn-success" name="save_training" >Save</button>
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
            skill: up_skill,
            distinction: up_distinction,
            association: up_association 
            
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
