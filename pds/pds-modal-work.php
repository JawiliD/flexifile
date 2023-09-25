<div class="modal fade " id="exampleModal5"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel5">Work Experience </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">                    
                    <div class="work-details-div m-0 overflow-scroll">                          
                        <table class="table table-secondary table-striped text-center mt-3  work">
                            <thead>
                                <tr>
                                    <th colspan="2">Inclusive Dates</th> 
                                    <th>Department/Agency</th>
                                    <th>Monthly Salary</th>
                                    <th>Salary/Pay Grade</th>
                                    <th>Appointment status</th>                                                                                       
                                    <th>Gov't Service Y/N</th>
                                </tr> 
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                    <th></th>
                                    <th></th>
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
                    <h5>Update list of Work Experience</h5>
                    <form method="POST">
                        <div class="row align-items-start mt-2">
                            <div class="col">
                                <p>Inclusive Dates </p>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">From:</span>
                                    <input type="date" name="up_work-from-date" class="form-control">
                                    <span class="mx-2"></span>
                                    <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                    <input type="date" name="up_work-to-date" class="form-control">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Department/Agency/Office:</span>
                                    <input type="text" name="up_department" class="form-control">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Monthly Salary:</span>
                                        <input type="text" name="up_salary" class="form-control">
                                    </div>
                                </div>
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Salary/Job/Pay Grade:</span>
                                    <input type="text" name="up_paygrade" class="form-control">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Status of Appointment:</span>
                                    <input type="text" name="up_appointment" class="form-control">
                                    </div>
                                
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Gov't Service (Y/N):</span>
                                    <input type="text" name="up_gov-service" class="form-control">
                                </div>
                            </div>
                            </div>
                        <div class="text-end">  
                            <button type="button" name="addBtn" class="btn btn-primary addbtn2" >Add</button>
                        </div>
                        <h5 class="mt-4">Preview</h5> 
                        <div class="work-details-div m-0 overflow-scroll">                          
                        <table class="table table-secondary table-striped text-center mt-3  update-work-table">
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
                            <input type="hidden" name="update-work-details" id="update-work-details-input" value="<?php echo htmlspecialchars(json_encode($updateWorkDetails)); ?>">
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="save_work">Save</button>
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

        var up_workfrom = $('input[name="up_work-from-date"]').val();
        var up_workto = $('input[name="up_work-to-date"]').val();
        var up_department = $('input[name="up_department"]').val();
        var up_salary = $('input[name="up_salary"]').val();
        var up_paygrade = $('input[name="up_paygrade"]').val();
        var up_appointment = $('input[name="up_appointment"]').val();
        var up_govservice = $('input[name="up_gov-service"]').val();
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + up_workfrom + '</td>' +
            '<td>' + up_workto + '</td>' +
            '<td>' + up_department + '</td>' +
            '<td>' + up_salary + '</td>' +
            '<td>' + up_paygrade + '</td>' +
            '<td>' + up_appointment + '</td>' +            
            '<td>' + up_govservice + '</td>' +            
            '<td><button class="btn btn-danger rounded delete-update-work">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.update-work-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="up_work-from-date"]').val('');
        $('input[name="up_work-to-date"]').val('');
        $('input[name="up_department"]').val('');
        $('input[name="up_salary"]').val('');
        $('input[name="up_paygrade"]').val('');
        $('input[name="up_appointment"]').val('');
        $('input[name="up_gov-service"]').val('');
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#update-work-details-input').val());
        currentDetails.push({
            workfrom: up_workfrom,
            workto: up_workto,
            department: up_department,
            salary: up_salary,
            paygrade: up_paygrade,
            appointment: up_appointment,
            govservice: up_govservice
            
        });
        $('#update-work-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-update-work', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#update-work-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#update-work-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>
        