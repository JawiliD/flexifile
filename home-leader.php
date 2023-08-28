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
         $link = 'leader-profile.php'; 
         $link2 = 'leader-attachment-list.php'; 
        include 'dashboard.php';
        include 'dashboard2.php'; 
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
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  See Folders>>
</button>
                    </div>
                    <div class="col">
                    <a class="bg-success py-2 rounded text-decoration-none text-bold text-light px-4"  href="faculty-attachment-files.php">See Files>></a>
                    </div>                                 
                </div>
            </div>           
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>hi</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    </div>




</body>
</html>
