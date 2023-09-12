<?php 
  session_start();

  function pathTo($destination) {
    echo "<script>window.location.href = '/flexifile/$destination.php'</script>";
  }

  /* Set status to invalid */
  $_SESSION['status'] = 'invalid';

  /* Unset user data */
  unset($_SESSION['email']);
  unset($_SESSION['firstname']);
  unset($_SESSION['role']);
  unset($_SESSION['password']);
  unset($_SESSION['id']);

  /* Redirect to login page */
  pathTo('welcome-page');
?>