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
    include 'sidebar-faculty-leader.php'; 
    include 'dashboard-notif.php';
       
    ?>

    </div>
    
    <div class="content" style="width:65vw">
        <!-- start coding here -->
        <?php
        include 'dashboard.php';
        include 'dashboard1.php';   
        ?>
        <div class="eleven-div p-3 rounded mt-3 position-relative">
            <div class="container text-center p-2">
                <div class="row">
                    <div class="col">
                    <div class="mx-2">
                        <img class="d-inline w-10 mx-1 icon2" src="img/icon1.png">
                        <img class="d-inline mx-1 icon2" src="img/icon2.png">
                        <img class="d-inline mx-1 icon2" src="img/icon3.png">
                        <img class="d-inline mx-1 icon2" src="img/icon4.png">
                        <img class="d-inline mx-1 icon2" src="img/icon7.png">
                        <img class="d-inline mx-1 icon2" src="img/icon8.png">
                    </div>
                    </div>                               
                </div>
                <div class="row pt-4">
                    <div class="col">
                    <button class="btn btn-success">See Folders >></button>
                    </div>
                    <div class="col">
                    <button class="btn btn-success">See Files >></button>
                    </div>                                 
                </div>
            </div>           
        </div>

    </div>
</body>
</html>
