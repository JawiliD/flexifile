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
                                        <input type="date" name="up_examination" class="form-control">
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
                                        <input type="date" name="up_validity" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">  
                                    <button type="button" name="addBtn" class="btn btn-primary addbtn1" >Add</button>
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
                                    <input type="hidden" name="update-civil-service-details" id="update-civil-service-details-input" value="<?php echo htmlspecialchars(json_encode($updateCivilServiceDetails)); ?>">
                                </table>
                            </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" name="save_civil_service">Save</button>
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

        var up_career = $('input[name="up_career"]').val();
        var up_rating = $('input[name="up_rating"]').val();
        var up_examination = $('input[name="up_examination"]').val();
        var up_place = $('input[name="up_place"]').val();
        var up_number = $('input[name="up_number"]').val();
        var up_validity = $('input[name="up_validity"]').val();
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + up_career + '</td>' +
            '<td>' + up_rating + '</td>' +
            '<td>' + up_examination + '</td>' +
            '<td>' + up_place + '</td>' +
            '<td>' + up_number + '</td>' +
            '<td>' + up_validity + '</td>' +            
            '<td><button class="btn btn-danger rounded delete-update-civil-service">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.update-civil-service-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="up_career"]').val('');
        $('input[name="up_rating"]').val('');
        $('input[name="up_examination"]').val('');
        $('input[name="up_place"]').val('');
        $('input[name="up_number"]').val('');
        $('input[name="up_validity"]').val('');
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#update-civil-service-details-input').val());
        currentDetails.push({
            career: up_career,
            rating: up_rating,
            examination: up_examination,  
            place: up_place,
            number: up_number,
            validity: up_validity
            
        });
        $('#update-civil-service-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-update-civil-service', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#update-civil-service-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#update-civil-service-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>