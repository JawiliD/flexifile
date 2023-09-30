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
            '<td><button class="btn btn-danger rounded delete-education">Delete</button></td>' +
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
<script>
    $(document).ready(function() {
    $('.btn.btn-primary.addbtn2').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var workfrom = $('input[name="work-from-date"]').val();
        var workto = $('input[name="work-to-date"]').val();
        var department = $('input[name="department"]').val();
        var salary = $('input[name="salary"]').val();
        var position = $('input[name="position_title"]').val();
        var paygrade = $('input[name="paygrade"]').val();
        var appointment = $('input[name="appointment"]').val();
        var govservice = $('input[name="gov-service"]').val();
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + workfrom + '</td>' +
            '<td>' + workto + '</td>' +
            '<td>' + department + '</td>' +
            '<td>' + salary + '</td>' +
            '<td>' + position + '</td>' +
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
        $('input[name="position_title"]').val('');
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
            salary: position,
            paygrade: paygrade,
            appointment: appointment,
            govservice: govservice
            
        });
        $('#work-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-work', function(e) {
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
<script>
    $(document).ready(function() {
    $('.btn.btn-primary.addbtn4').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var title = $('input[name="title"]').val();
        var trainingfrom = $('input[name="training-from-date"]').val();
        var trainingto = $('input[name="training-to-date"]').val();
        var duration = $('input[name="duration"]').val();
        var type = $('input[name="type"]').val();
        var sponsor = $('input[name="sponsor"]').val();
        
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + title + '</td>' +
            '<td>' + trainingfrom + '</td>' +
            '<td>' + trainingto + '</td>' +
            '<td>' + duration + '</td>' +
            '<td>' + type + '</td>' +                       
            '<td>' + sponsor + '</td>' +                       
            '<td><button class="btn btn-danger rounded delete-training">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.training-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="title"]').val('');
        $('input[name="training-from-date"]').val('');
        $('input[name="training-to-date"]').val('');
        $('input[name="duration"]').val('');
        $('input[name="type"]').val('');        
        $('input[name="sponsor"]').val('');        
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#training-details-input').val());
        currentDetails.push({
            title: title,
            trainingfrom: trainingfrom,
            trainingto: trainingto,
            duration: duration,
            type: type,         
            sponsor: sponsor          
            
        });
        $('#training-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-training', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#training-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#training-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>
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
        var currentDetails = JSON.parse($('#familyg-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#family-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>
    <script>
    $(document).ready(function() {
    $('.btn.btn-primary.addbtnOther').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var skills = $('input[name="skills_hobbies"]').val();
        var recognition = $('input[name="recognition"]').val();
        var association = $('input[name="association"]').val();
       
        
       

        // Create the table row HTML
        var newRow = '<tr>' +
            '<td>' + skills + '</td>' +
            '<td>' + recognition + '</td>' +
            '<td>' + association + '</td>' +                                  
            '<td><button class="btn btn-danger rounded delete-others">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.other-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="skills_hobbies"]').val('');
        $('input[name="recognition"]').val('');
        $('input[name="association"]').val('');               
        

        // Update the hidden input field with the updated civil service details array
        var currentDetails = JSON.parse($('#other-details-input').val());
        currentDetails.push({
            skills: skills,
            recognition: recognition,
            association: association   
            
        });
        $('#other-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete civil service row
    $(document).on('click', '.btn.btn-danger.rounded.delete-others', function(e) {
        e.preventDefault();
        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated education details array
        var currentDetails = JSON.parse($('#other-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#other-details-input').val(JSON.stringify(currentDetails));
    });
});
    </script>