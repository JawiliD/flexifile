function toggleDropdown() {
    const dropdown = document.getElementById("dropdown-menu");
    dropdown.classList.toggle("show");
  }

  $(document).ready(function() {
    $('.btn.btn-primary.addbtn').on('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var level = $('#level').val();
        var schoolName = $('input[name="schoolName"]').val();
        var degree = $('input[name="degree"]').val();
        var fromDate = $('input[name="fromDate"]').val();
        var toDate = $('input[name="toDate"]').val();
        var units = $('input[name="unitsEarned"]').val();
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
        $('input[name="unitsEarned"]').val('');
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