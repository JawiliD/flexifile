<?php
require 'config.php';


function pathTo($destination) {
  echo "<script>window.location.href = '/flexifile/$destination.php'</script>";
}

if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {

  $_SESSION['status'] = 'invalid';
}

if ($_SESSION['status'] == 'valid' AND $_SESSION['role'] == 'faculty member') {
  pathTo('f-member/home-member');
}elseif($_SESSION['status'] == 'valid' AND $_SESSION['role'] == 'task force leader') {
    pathTo('f-leader/home-leader');
}elseif($_SESSION['status'] == 'valid' AND $_SESSION['role'] == 'dean') {
    pathTo('dean/home-dean');
}elseif($_SESSION['status'] == 'valid' AND $_SESSION['role'] == 'program head') {
    pathTo('program-head/home-program-head');
}

if (isset($_POST['login'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if (empty($email) || empty($password)) {
    echo "<script>alert('Please fill up all the fields')</script>";
  } else {
    $query = "SELECT * FROM user_tb WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($rowValidate = $result->fetch_assoc()) {
      if(password_verify($password, $rowValidate['password'])){
        $role = $rowValidate['role'];
        $_SESSION['status'] = 'valid';
        $_SESSION['email'] = $rowValidate['email'];
        $_SESSION['fullname'] = $rowValidate['fullname'];
        $_SESSION['role'] = $rowValidate['role'];
        $_SESSION['type'] = $rowValidate['type'];
        $_SESSION['id'] = $rowValidate['id'];
      

      if ($role == 'faculty member') {
        header("Location: f-member/home-member.php");
        exit;
      } else if ($role == 'task force leader') {
        header("Location: f-leader/home-leader.php");
        exit;
      }else if ($role == 'program head') {
        header("Location: program-head/home-program-head.php");
        exit;
      }else if ($role == 'dean') {
        header("Location: dean/home-dean.php");
        exit;
      }


      }else{
        echo "<script>alert('Invalid password')</script>" ;       
      }
      
    } else {
      $_SESSION['status'] = 'invalid';
      echo "<script>alert('Invalid Credentials')</script>";
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
    <title>login-page</title>
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
            <div class="mt-5 mx-4 text-center">
                <h3 class="text-light fw-bold">Log In</h3>
                <form action="login-page.php" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                    </div>
                    <input class="rounded btn btn-light mt-3 mx-3" name="login" type="submit" value="Log In"><br>
                </form>    
                <a class="mt-3 text-decoration-none" href="">Forgot Password?</a>
                <p class="text-light">Don't have an account? <a class="text-decoration-none" href="signup-page.php">Sign Up</a></p>
            </div>
            

        </div>
    </div>


</body>
</html>