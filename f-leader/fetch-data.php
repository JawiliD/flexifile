<?php
// Include your database connection code here (e.g., require '../config.php')

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'selected_users' POST parameter is set
    if (isset($_POST['selected_users']) && is_array($_POST['selected_users'])) {
        // Sanitize and validate the selected user IDs
        $selectedUsers = array_map('intval', $_POST['selected_users']);

        // Construct a WHERE clause for the SQL query
        $userIds = implode(",", $selectedUsers);
        $whereClause = "userid IN ($userIds)";

        // Construct the SQL query to retrieve user data
        $sql = "SELECT fullname FROM user_tb WHERE $whereClause";

        // Execute the SQL query and fetch the data
        $result = mysqli_query($con, $sql);

        if ($result) {
            $userData = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $userData[] = $row['fullname'];
            }

            // Return the user data as JSON
            echo json_encode($userData);
        } else {
            // Handle the database query error
            echo json_encode(array("error" => "Database query error"));
        }
    } else {
        // Handle invalid or missing 'selected_users' parameter
        echo json_encode(array("error" => "Invalid or missing 'selected_users' parameter"));
    }
} else {
    // Handle non-POST requests
    echo json_encode(array("error" => "Invalid request method"));
}
?>
