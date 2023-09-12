<?php
include 'config.php';

if (isset($_POST['signup'])) {
    $fullname = trim($_POST["fullname"]);   
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $role = trim($_POST["role"]);
    $hashedPassword = trim(md5($password));

    // Use prepared statements to insert data securely
    $queryUser = "INSERT INTO `user_tb` (fullname, email, password, role) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $queryUser);
    
    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind the parameters to the statement
        mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $hashedPassword, $role);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>
                alert('Registration Successful...You may now Login');
                setTimeout(function() {
                    window.location.href = 'login-page.php';
                }, 2000); // Delay the redirection by 2 seconds (2000 milliseconds)
            </script>";
        } else {
            // Insertion failed
            echo "Error: " . mysqli_error($con);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Statement preparation failed
        echo "Error: " . mysqli_error($con);
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
        <div class="w-25 p-3 border border-2 border-light rounded position-relative form">
            <div class="position-absolute z-1">
                <img class="w-100 opacity-25 top-0 left-0" src="img/logo.png">
            </div>
            <div class="position-absolute mx-3 text-center z-3">
                <h3 class="text-light fw-bold">Registration</h3>
                <form action="signup-page.php" method="post">    
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <input type="text" name="fullname" class="form-control" placeholder="Fullname" aria-label="fullname">
                    </div>                    
                </div>
                <input type="email" class="form-control mb-3" name="email" placeholder="Email" aria-label="Email">
                <input type="password" class="form-control mb-3" name="password" placeholder="Password" aria-label="Last name">
                    <select class="w-100 p-2 rounded" name="role" id="role">
                        <option value="default">Choose role...</option>
                        <option value="faculty_member">Faculty Member</option>
                        <option value="program_head">Program Head</option>
                        <option value="Dean">Dean</option>
                        <option value="faculty_leader">Faculty Leader</option>
                    </select>
                <input class="mx-3 btn btn-light rounded mt-5" name="signup" type="submit" value="Sign Up">
                <p class="text-light">Already have an account? <a class="text-decoration-none" href="login-page.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>


</body>
</html>