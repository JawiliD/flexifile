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
    include 'sidebar-dean.php';    
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
        $link = 'dean-profile.php'; 
        $link2 = 'dean-attachment-list.php'; 
        include '../dashboard/dashboard.php';
        include '../dashboard/dashboard2.php';
        include '../dashboard/dashboard1.php'; 
         
        ?>
        <div class="mt-3 rounded nine-div">
            <div class="nine-div-container p-3 text-start">
                <h4>Faculty Progress Dashboard:</h4>                
                <div class="overflow-scroll nine-div-table">
                <table class="table table-striped">
                    <thead class="text-center table-success">
                        <tr>
                            <th>Faculty Name</th>
                            <th>Activity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>                        
                        <tbody>
                            <tr>
                                <td>sample</td>
                                <td>sample</td>
                                <td>sample</td>
                                <td>sample</td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
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
                    <a class="bg-success py-2 rounded text-decoration-none text-bold text-light px-4"  href="">See Folders>></a>
                    </div>                                 
                </div>
            </div>           
        </div>


    </div>
</body>
</html>
