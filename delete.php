<?php 
 require 'config.php';

 if (isset($_POST["delete_user"])) {
    $deleteId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM `user_tb` WHERE id = $deleteId";
    $sqlDelete = mysqli_query($con, $queryDelete);

    echo '<script>alert("Successfull deleted id: '.$deleteID.'!")</script>';
    echo '<script>window.location.href = "/flexifile//program-head/program-head-user-account.php"</script>';
  } else {
    echo '<script>window.location.href = "/flexifile//program-head/program-head-user-account.php"</script>';
  }
?>