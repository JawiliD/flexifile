<?php
require 'config.php';

// Function to validate the password
function validatePassword($password) {
    // Define password criteria
    $minLength = 8;  // Minimum password length
    $hasUppercase = preg_match('/[A-Z]/', $password); // Check for at least one uppercase letter
    $hasLowercase = preg_match('/[a-z]/', $password); // Check for at least one lowercase letter
    $hasDigit = preg_match('/\d/', $password);       // Check for at least one digit

    // Check if the password meets all criteria
    if (strlen($password) < $minLength || !$hasUppercase || !$hasLowercase || !$hasDigit) {
        return false; // Password is invalid
    }

    return true; // Password is valid
}

if (isset($_POST['signup'])) {
    $fullname = trim($_POST["fullname"]);   
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $role = trim($_POST["role"]);
    $type = trim($_POST["type"]);

    // Check if the email already exists in the database
    $queryCheckEmail = "SELECT email FROM `user_tb` WHERE email = ?";
    $stmtCheckEmail = mysqli_prepare($con, $queryCheckEmail);
    
    if ($stmtCheckEmail) {
        mysqli_stmt_bind_param($stmtCheckEmail, "s", $email);
        mysqli_stmt_execute($stmtCheckEmail);
        mysqli_stmt_store_result($stmtCheckEmail);
        
        // If the email already exists, show an error message
        if (mysqli_stmt_num_rows($stmtCheckEmail) > 0) {
            echo "<script>
                alert('Email already exists. Please use a different email.');
            </script>";
        } else {
            // Email is unique, proceed with registration
            mysqli_stmt_close($stmtCheckEmail);

            // Validate the password
            if (!validatePassword($password)) {
                echo "<script>
                    alert('Invalid password. Password must contain at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long.');
                </script>";
            } else {
                // Password is valid, proceed with registration

                // Hash the password using password_hash()
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $queryUser = "INSERT INTO `user_tb` (fullname, email, password, role, type) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($con, $queryUser);
                
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "sssss", $fullname, $email, $hashedPassword, $role, $type);

                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>
                            alert('Registration Successful...You may now Login');
                            setTimeout(function() {
                                window.location.href = 'login-page.php';
                            }, 500);
                        </script>";
                    } else {
                        echo "Error: " . mysqli_error($con);
                    }

                    mysqli_stmt_close($stmt);
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>registration</title>
</head>
</head>
<body style ="background-color:#1B2B1B">
    <div class="w-100 h-30">
        <a href="welcome-page.php"><img class="m-1 ms-5" src="img/flexifile.png"></a>  
        <div class="float-end me-5 mt-3">
            <a href="login-page.php" class="d-inline rounded m-1 px-3 f-bold py-2 text-decoration-none btn-1">Login</a>
            <a href="signup-page.php" class="d-inline rounded m-1 px-3 f-bold py-2 text-decoration-none btn-1">Sign Up</a>
        </div>
    </div>
    <div class="mt-5 d-flex justify-content-center align-items-center">
        <div class="w-25 p-3 border border-2 border-light rounded ">
            <div class="mx-4 text-center">
                <h3 class="text-light fw-bold">Registration</h3>
                <form action="signup-page.php" method="post">    
                <div class="row mt-4 mb-3">
                    <div class="col">
                        <input type="text" name="fullname" class="form-control" placeholder="Fullname" aria-label="fullname" required>
                    </div>                    
                </div>
                <input type="email" class="form-control mb-3" name="email" placeholder="Email" aria-label="Email" required>
                <input type="password" class="form-control mb-3" name="password" placeholder="Password" aria-label="password" required>
                    <select class="w-100 p-2 rounded mb-3" name="type" id="type" required>
                        <option value="default">Faculty Type...</option>
                        <option value="ITE Faculty">ITE Faculty</option>
                        <option value="GE Faculty">GE Faculty</option>
                    </select>
                    <select class="w-100 p-2 rounded" name="role" id="role" required>
                        <option value="default">User Type...</option>
                        <option value="faculty member">Faculty Member</option>
                        <option value="program head">Program Head</option>
                        <option value="dean">Dean</option>
                        <option value="task force leader">Task Force Leader</option>
                    </select>
                <input class="mx-3 btn btn-light rounded mt-5" name="signup" type="submit" value="Sign Up">
                <p class="text-light">Already have an account? <a class="text-decoration-none" href="login-page.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>


</body>
</html>