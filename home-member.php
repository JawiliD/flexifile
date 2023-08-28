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
    include 'header.php';
    include 'sidebar-faculty-member.php';    
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
         $link = 'member-profile.php'; 
         $link2 = 'member-attachment-list.php'; 
        include 'dashboard.php';
        include 'dashboard1.php';    
        ?>
    </div>
</body>
</html>
