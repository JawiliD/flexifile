<?php
require "../config.php"; 

$querySelectUser = "SELECT * FROM `user_tb`";
$sqlSelectUser = mysqli_query($con, $querySelectUser);
$rowUpdateUser = mysqli_fetch_array($sqlSelectUser);


if(isset($_POST['save_user'])){
    $fullname = trim($_POST["fullname"]);   
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);   
    $role = trim($_POST["role"]);   

    // Password validation
    $minLength = 8; // Minimum password length
    $hasUppercase = preg_match('/[A-Z]/', $password); // Check for at least one uppercase letter
    $hasLowercase = preg_match('/[a-z]/', $password); // Check for at least one lowercase letter
    $hasDigit = preg_match('/\d/', $password); // Check for at least one digit

    if (strlen($password) < $minLength || !$hasUppercase || !$hasLowercase || !$hasDigit) {
        echo "<script>
        alert('Invalid password. Password must contain at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long.');
    </script>";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $queryUserAcc = "INSERT INTO `user_tb` (fullname, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt_userAcc = $con->prepare($queryUserAcc);

        $stmt_userAcc->bind_param('ssss', $fullname, $email, $hashedPassword, $role);

        $execute_userAcc = $stmt_userAcc->execute();

        if(!$execute_userAcc){
            echo "Error: " . $stmt_userAcc->error;
        } else {
            $stmt_userAcc->close(); 
        }
    }
}

if(isset($_POST['update_user'])){
    $userid = $_POST['edit_user_id'];
    $fullname = trim($_POST["fullname"]);   
    $email = trim($_POST["email"]);
    $password = trim($_POST["new-password"]);
    $old_password = trim($_POST["old-password"]);
    $role = trim($_POST["role"]);
    
    $sqlSelectPassword = mysqli_query($con,"SELECT * FROM `user_tb` where id = $userid");

        // Get the user's password hash from the result set.
    $passwordHash = mysqli_fetch_assoc($sqlSelectPassword)['password'];

    // Check if the old password is correct.
    if (!password_verify($old_password, $passwordHash)) {
        // Display an alert with the error message.
        echo "<script>alert('Incorrect password.')</script>";
        
  }else{
    // Password validation
    $minLength = 8; // Minimum password length
    $hasUppercase = preg_match('/[A-Z]/', $password); // Check for at least one uppercase letter
    $hasLowercase = preg_match('/[a-z]/', $password); // Check for at least one lowercase letter
    $hasDigit = preg_match('/\d/', $password); // Check for at least one digit

    if (strlen($password) < $minLength || !$hasUppercase || !$hasLowercase || !$hasDigit) {
        echo "<script>
        alert('Invalid password. Password must contain at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long.');
    </script>";
    } else {
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

        $queryUpdateUser = "UPDATE `user_tb` SET fullname = ?, email = ?, password = ?, role=? where id = ?";
        $stmt_updateUser = $con->prepare($queryUpdateUser);

        $stmt_updateUser->bind_param('ssssi', $fullname, $email, $hashedpassword, $role, $userid);

        $execute_updateUser = $stmt_updateUser->execute();

        if (!$execute_updateUser){        
            echo "Error: " . $stmt_updateUser->error;
        } else {
            echo '<script>alert("Edited User Succesfully.")</script>';
            $stmt_updateUser->close();        
        }
    }
}
  }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
<div class="layout">
    <?php
    include '../header.php';
    include 'sidebar-program-head.php';   
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
            include '../dashboard/dashboard.php';
        ?>
        <div class="user-account-div bg-light mt-3 pb-5 rounded p-3">
            <h1>User Management</h1>
            <hr class="hr"/>            
            <button type="button" class="btn btn-primary btn-sm btn-modal3 mt-5 float-end py-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Account
            </button>
                <div class="table-useraccount overflow-scroll ">
                    <table class="table table-striped text-center">
                    <thead class="table-success">
                        <tr>                        
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">User Role</th>                       
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        <?php
                            $querySelectUserAcc = "SELECT * FROM `user_tb`";
                            $sqlSelectUserAcc = mysqli_query($con,$querySelectUserAcc);

                            while($rowUser = mysqli_fetch_array($sqlSelectUserAcc)){ ?>
                            <tr>
                                <td><?php echo $rowUser['fullname']?></td>
                                <td><?php echo $rowUser['email']?></td>
                                <td><?php echo $rowUser['role']?></td>                               
                                <td class="text-center">
                                <form method="POST">
                                    <button class="btn btn-primary mb-3 editBtn" type="button" name="edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2" id="edit-user-id" data-userid="<?php echo $rowUser['id']; ?>">Edit</button>
                                    <input type="hidden" name="edit-id" id="edit-user-id" value="<?php echo $rowUser['id']; ?>"/>
                                </form>                                
                                     <form method="POST">
                                        <button type="submit" name="activate_user" class="btn btn-success d-inline">Activate</button>
                                        <button type="submit" name="deactivate_user" class="btn btn-danger d-inline">Deactivate</button>
                                        
                                       
                                    </form>
                                </td>
                                
                            </tr>
                            <?php } ?>
                    </tbody>
                    </table>
                </div>

        </div>
    </div>
    <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">User Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="POST">
                <div class="row text-start mt-2">
                    <div class="col">
                        
                        <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Full Name:</span>
                                <input type="text" name= "fullname" class="form-control" >
                                                
                        </div>
                        <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Email:</span>
                                <input type="email" name="email" class="form-control" >
                                                
                        </div> 
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Password:</span>
                            <input type="password" name="password" class="form-control" >                                                                
                        </div>                                        
                    </div>                                        
                </div>
                <div class="row text-start">
                    <div class="col">
                        <select class="w-100 p-2 rounded" name="role" id="role">
                            <option value="">Choose User Type...</option>
                            <option value="faculty member">Faculty Member</option>
                            <option value="program head">Program Head</option>
                            <option value="Dean">Dean</option>
                            <option value="Task Force leader">Task Force Leader</option>
                        </select>                                    
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="save_user">Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update User Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="POST">
                        <!-- Add a hidden input field to store the user ID -->
                <input type="hidden" name="edit_user_id" id="edit_user_id" value="">

                <!-- Add an empty div to display user details -->
                <div id="user-details"></div>                
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="update_user">Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    // JavaScript to capture user's ID when "Edit" button is clicked
    $(document).on('click', '.btn-primary.editBtn', function () {
        var userId = $(this).data('userid');       
        $('#edit-user-id').val(userId);
    });$(document).on('click', '.btn-primary.editBtn', function () {
    var userId = $(this).data('userid');
    $('#edit_user_id').val(userId);

    // AJAX request to fetch user details
    $.ajax({
        type: "POST",
        url: "get_user_details.php", // Create this PHP file to handle the request
        data: { userId: userId },
        success: function (response) {
            $('#user-details').html(response);
        }
    });
});

</script>



</body>
</html>
