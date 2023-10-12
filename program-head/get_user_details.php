<?php
require "../config.php";

if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    $querySelectUser = "SELECT * FROM `user_tb` WHERE id = ?";
    $stmt = $con->prepare($querySelectUser);
    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $rowUpdateUser = $result->fetch_assoc();

        // Output user details as HTML
        echo '<input type="hidden" name="edit_user_id" id="edit_user_id" value="' . $userId . '">';
        echo '<div class="input-group input-group-sm mb-3">';
        echo '<span class="input-group-text" id="inputGroup-sizing-sm">Full Name:</span>';
        echo '<input type="text" name="fullname" class="form-control" value="' . $rowUpdateUser['fullname'] . '">';
        echo '</div>';
        echo '<div class="input-group input-group-sm mb-3">';
        echo '<span class="input-group-text" id="inputGroup-sizing-sm">Email:</span>';
        echo '<input type="email" name="email" class="form-control" value="' . $rowUpdateUser['email'] . '">';
        echo '</div>';
        echo '<div class="input-group input-group-sm mb-3">';
        echo '<span class="input-group-text" id="inputGroup-sizing-sm">Old Password:</span>';
        echo '<input type="password" name="old-password" class="form-control" value="">';
        echo '<span class="input-group-text" id="inputGroup-sizing-sm">New Password:</span>';
        echo '<input type="password" name="new-password" class="form-control" value="">'; // Password input left empty for user to enter a new password
        echo '</div>';
        echo '<div class="row text-start">';
        echo '<div class="col">';
        echo '<select class="w-100 p-2 rounded" name="role" id="role">';
        echo '<option value="' . $rowUpdateUser['role'] . '">Choose role...</option>';
        echo '<option value="faculty_member">Faculty Member</option>';
        echo '<option value="program_head">Program Head</option>';
        echo '<option value="Dean">Dean</option>';
        echo '<option value="faculty_leader">Task Force Leader</option>';
        echo '</select>';
        echo '</div>';
        echo '</div>';
    } else {
        echo "User not found"; // Handle case where the user with the given ID is not found
    }
} else {
    echo "User ID not provided"; // Handle case where the userId is not provided
}
?>
