<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Dashboard 2</title>
</head>
<body>
   
        <div class="mt-3 p-4 rounded seven-div">
        <h2 class="mb-3">Post Announcement</h2>
        <form action="" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Write announcements here..." aria-label="announcements" aria-describedby="button-addon2">
                <button class="btn btn-success" type="submit" id="button-addon2">Post</button>
            </div>
        </form>        
        </div>
        <div class="mt-3 eight-div">
            <div class="eight-div-container1 my-3">
                    <div class="container text-center">
                    <div class="row">
                        <div class="col box1 rounded p-2 m-2" style="background-color:#094509;">
                            <img class="mt-4" src="img/icon5.png">
                            <h4 class="mt-3 text-light">Member:  20</h4>
                        </div>
                        <div class="col box2 rounded p-2 m-2" style="background-color:#2C6E2C;">
                        <img class="mt-4" src="img/icon5.png">
                        <h4 class="mt-3 text-light">ITE Faculty:  20</h4>
                        </div>
                        <div class="col box3 rounded p-2 m-2" style="background-color:#769776;">
                        <img  class="mt-4"src="img/icon5.png">
                        <h4 class="mt-3 text-light">GE Faculty:  20</h4>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="eight-div-container2">
                <div class="container text-center">                   
                    <div class="row">
                        <div class="col box4 rounded m-2 p-0">
                            <div class="float-start p-2" style="background-color:#454545;width:30%;height:100%;border-radius:.5em 0em 0em .5em;"><img src="img/icon6.png"></div>
                            <div class="float-end p-2 text-light" style="background-color:#828282;width:70%;height:100%;border-radius:0em .5em .5em 0em;"><h5>Permanent</h5><h5>10</h5></div>
                        </div>
                        <div class="col box5 rounded m-2 p-0">
                            <div class="float-start p-2" style="background-color:#2C6E2C;width:30%;height:100%;border-radius:.5em 0em 0em .5em;"><img src="img/icon6.png"></div>
                            <div class="float-end p-2 text-light" style="background-color:#769776;width:70%;height:100%;border-radius:0em .5em .5em 0em;"><h5>Temporary</h5><h5>0</h5></div>
                        </div>
                        <div class="col box4 rounded m-2 p-0">
                            <div class="float-start p-2" style="background-color:#454545;width:30%;height:100%;border-radius:.5em 0em 0em .5em;"><img src="img/icon6.png"></div>
                            <div class="float-end p-2 text-light" style="background-color:#828282;width:70%;height:100%;border-radius:0em .5em .5em 0em;"><h5>Contractual</h5><h5>5</h5></div>
                        </div>
                        <div class="col box5 rounded m-2 p-0">
                            <div class="float-start p-2" style="background-color:#2C6E2C;width:30%;height:100%;border-radius:.5em 0em 0em .5em;"><img src="img/icon6.png"></div>
                            <div class="float-end p-2 text-light" style="background-color:#769776;width:70%;height:100%;border-radius:0em .5em .5em 0em;"><h5>Part-Time</h5><h5>5</h5></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
</html>