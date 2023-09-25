<?php
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
<div class="layout">
    <?php
    include '../header.php';
    include 'sidebar-faculty-leader.php';  
    include '../dashboard/dashboard-notif.php';  
     
    ?>
    </div>
    <div class="content position-relative" style="width:65vw">
        <!-- start coding here -->
        <?php
            include '../dashboard/dashboard.php';
        ?>

        <div class="mt-3 p-3 notif-div bg-light rounded">  
        <h2 class="fw-bold">Activity Update</h2>
            <hr>
            <p> These are the following updates as of today (date)</p>
        <div class="table-useraccess mt-5 overflow-scroll ">
            
                <table class="table table-striped ">
                    <thead class="table-success">
                        <tr>
                            
                            <th scope="col">Name</th>
                            <th scope="col">Faculty Type</th>
                            <th scope="col">Last time Update</th>
                            <th scope="col">Updated Part</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                    <?php

                    ?>
                        <tr>
                            <td scope="row">3</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            
                        </tr>
                        </tbody>
                    </table>
                </div> 
                <hr>
                <h3>Old</h3>
            <div class="container text-center mt-5">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Date:</span>
                            <select class="form-select" aria-label="Name">
                                <option selected>Date..</option>
                                <option value="name">date</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Name:</span>
                            <select class="form-select" aria-label="Name">
                                <option selected>Fullname..</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <button type="button"class="btn btn-dark py-2 px-3 rounded-2">
                                Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-useraccess mt-5 overflow-scroll ">
                <table class="table table-striped ">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Faculty Type</th>
                            <th scope="col">Last time Update</th>
                            <th scope="col">Updated Part</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        <tr>
                            <td scope="row">1</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>                            
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            
                        </tr>
                        </tbody>
                    </table>
                </div>            
            </div>         
        </div>
</body>
</html>