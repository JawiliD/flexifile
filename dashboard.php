<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Faculty Member</title>
</head>
<body>    
        <div class="vw-90 ms-3 me-3 p-3 rounded first-div">            
            <div class="container text-start mt-2 grid">
                <div class="row">
                    <div class="col-sm-4 border-5 border-end border-secondary-subtle"><div class="col-md-auto"><?php date_default_timezone_set('Asia/Manila');?>
                            <h1 class="d-inline" style="color:#235128" ><?php echo date("l");?></h1></br>
                            <h4 class="d-inline"><?php echo date("F d Y") ?></h4></br>
                            <h4 class="d-inline"><?php echo date(" h:i A") ?></h4></div></div>
                    <div class="col-sm-8 announcement">
                        <p class="text-center p-2 fw-bold">ANNOUNCEMENT</p>
                </div>
             </div>
             <div class="vw-90 mt-5 p-3 text-center rounded second-div">          
            <h3> 12 days to update your PDS </h3>
        </div>
        </div>        
</body>
</html>
