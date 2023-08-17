<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>flexifile</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">    
</head>
<body>
    <div class="mt-5 position-fixed sidebar">
        <div class="sidebar-content">
                <img class="mt-4 position-absolute logo" src="img/logo.png">
                <img class="position-absolute side-img" src="img/sidebar.png"> 
                <div class="z-2 position-absolute side-nav">
                <ul class="nav flex-column">                    
                    <li class="py-2 nav-item active">
                        <a href="#">Home</a>
                    </li>
                    <li class="py-2 nav-item" style="border-bottom: 3px solid #235128;">
                        <a href="#">User Accounts</a>
                    </li>
                    <li class="py-2 nav-item" style="border-bottom: 3px solid #235128;">
                        <a href="#">User Access</a>
                    </li>
                    <li class="py-2 nav-item" style="border-bottom: 3px solid #235128;">
                        <a href="#">Teaching Assignment</a>
                    </li>                    
                </ul>
            </div>
        </div>
    </div>
    <img class="z-0 position-absolute design" src="img/design2.png">
    
</body>
</html>