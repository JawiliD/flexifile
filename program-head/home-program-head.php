<?php
 require '../config.php';   
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member-home</title>
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
         $link = 'program-head-profile.php'; 
         $link2 = 'program-head-attachment-list.php'; 
        include '../dashboard/dashboard.php';
        include '../dashboard/dashboard2.php';
        include '../dashboard/dashboard1.php';    
        ?>
    </div>
</body>
</html>
