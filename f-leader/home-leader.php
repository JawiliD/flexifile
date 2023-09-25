<?php
    require '../config.php'; 
    require '../session.php'; 
    
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leader-home</title>
</head>
<body>
<div class="layout">
    <?php
    include '../header.php';
    include 'sidebar-faculty-leader.php'; 
    include '../dashboard/dashboard-notif.php';
    ?>

    </div>
    
    <div class="content" style="width:65vw">
        <!-- start coding here -->
        <?php
         $link = 'leader-profile.php'; 
         $link2 = 'leader-attachment-list.php'; 
        include '../dashboard/dashboard.php';
        include '../dashboard/dashboard2.php'; 
        include '../dashboard/dashboard1.php';  
          
        ?>
        <div class="bg-light rounded mt-3 p-3">
        <div class="container text-center">
            <div class="row">
                <div class="col border-end border-3 border-opacity-50 border-secondary">
                    <h3>Set PDS deadline</h3>
                    <button class="btn btn-success">Set</button>
                </div>
                <div class="col">
                <h3>Deadline:</h3>
                <h3>(sample date)</h3>
                </div>
            </div>
        </div>
        </div>
        <div class="eleven-div p-3 rounded mt-3 position-relative">
            <div class="container text-center p-2">
                <div class="row">
                    <div class="col">
                    <div class="mx-2">
                        <img class="d-inline w-10 icon2" src="../img/icon1.png">
                        <img class="d-inline icon2" src="../img/icon2.png">
                        <img class="d-inline icon2" src="../img/icon3.png">
                        <img class="d-inline icon2" src="../img/icon4.png">
                        <img class="d-inline icon2" src="../img/icon7.png">
                        <img class="d-inline icon2" src="../img/icon8.png">
                    </div>
                    </div>                               
                </div>
                <div class="row pt-4">
                    <div class="col">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          See Folders>>
                        </button>
                    </div>
                    <div class="col">
                    <a class="bg-success py-2 rounded text-decoration-none text-bold text-light px-4"  href="leader-attachment-files.php">See Files>></a>
                    </div>                                 
                </div>
            </div>           
        </div>
        

    </div>
    <!-- folder Modal -->
    <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">List of Folders</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- folder/files content -->
                    <!-- para po siyang file manager ang style -->
                </div>
                <div class="modal-footer">                    
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



</body>
</html>