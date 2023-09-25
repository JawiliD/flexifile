<div class="modal fade " id="exampleModal6"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel6">Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="voluntary-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3">
                                    <thead>
                                        <tr>
                                            <th>Name and address of Org</th>
                                            <th colspan="2">Inclusive Dates</th>                                             
                                            <th>Number of Hours</th>
                                            <th>Position</th>
                                        </tr> 
                                        <tr>
                                            <th></th>
                                            <th>From</th>
                                            <th>To</th>                                            
                                            <th></th>
                                            <th></th>                                 
                                        </tr>                                     
                                    </thead>
                                    <tbody>
                                    </tbody>                                    
                                </table>
                                </div>
                                <hr>
                                <h5>Update list of Volunatary Work</h5>
                        <form method="POST">
                            <div class="row align-items-start mt-4">
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Name and Address of Organization:</span>
                                            <input type="text" name="up_organization" class="form-control">                                                                
                                        </div>
                                        <p>Inclusive Dates</p>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm"> From:</span>
                                            <input type="date" name="up_voluntary-from-date" class="form-control">
                                            <span class="mx-2"></span>
                                            <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                            <input type="date" name="up_voluntary-to-date" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                            <input type="text" name="up_hours" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Position/ Nature of Work:</span>
                                            <input type="text" name="up_position" class="form-control">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn3" >Add</button>
                                </div>
                                <h5 class="mt-4">Preview</h5> 
                                <div class="voluntary-div m-0 overflow-scroll">                          
                                <table class="table table-secondary table-striped text-center mt-3  update-voluntary-table">
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
                                    <input type="hidden" name="update-voluntary-details" id="update-voluntary-details-input" value="<?php echo htmlspecialchars(json_encode($updateVoluntaryDetails)); ?>">
                                </table>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="save_voluntary">Save</button>
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

        var up_organization = $('input[name="up_organization"]').val();
        var up_voluntaryfrom = $('input[name="up_voluntary-from-date"]').val();
        var up_voluntaryto = $('input[name="up_voluntary-to-date"]').val();
        var up_hours = $('input[name="up_hours"]').val();
        var up_position = $('input[name="up_position"]').val();
        
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + up_organization + '</td>' +
            '<td>' + up_voluntaryfrom + '</td>' +
            '<td>' + up_voluntaryto + '</td>' +
            '<td>' + up_hours + '</td>' +
            '<td>' + up_position + '</td>' +                       
            '<td><button class="btn btn-danger rounded delete-update-voluntary">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.update-voluntary-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="up_organization"]').val('');
        $('input[name="up_voluntary-from-date"]').val('');
        $('input[name="up_voluntary-to-date"]').val('');
        $('input[name="up_hours"]').val('');
        $('input[name="up_position"]').val('');        
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#update-voluntary-details-input').val());
        currentDetails.push({
            updated_organization: up_organization,
            updated_voluntaryfrom: up_voluntaryfrom,
            updated_voluntaryto: up_voluntaryto,
            updated_hours: up_hours,
            updated_position: up_position           
            
        });
        $('#update_voluntary-details-input').val(JSON.stringify(currentDetails));
    });  


    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-update-voluntary', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#update-voluntary-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#update_voluntary-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>