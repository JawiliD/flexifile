<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/virtual-select.min.css"> 
    <title>member-home</title>
</head>
<body>
<div class="layout">
    <?php
    //goods na to
    include 'header.php';
    include 'sidebar-faculty-leader.php'; 
    include 'dashboard-notif.php';
       
    ?>

    </div>
    
    <div class="content" style="width:65vw">
        <!-- start coding here -->
        <?php
        include 'dashboard.php';          
                
        ?>
        <div class="mt-3 p-3 pb-5 rounded fifteen-div">
            <h3>Faculty Attachment Files</h3>
            <hr>
            <div class="input-group d-flex justify-content-end">
                <input type="search" class="form-control rounded " style="max-width: 10em;" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-dark">Search</button>
            </div>
            <div class="container text-center mt-5">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Name:</span>
                            <select class="form-select" aria-label="Name">
                                <option selected>Choose..</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Category:</span>
                            <select class="form-select" aria-label="Name">
                                <option selected>Choose..</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                                <option value="name">Name</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Date:</span>
                            <select class="form-select" aria-label="Name">
                                <option selected>Choose..</option>
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
            <div class="table-useraccess mt-3 overflow-scroll ">
                <table class="table table-striped ">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Date Uploaded</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type of Document</th>
                            <th scope="col">Attachment</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        <tr>
                            <td scope="row">1</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td><button class="btn btn-primary py-1">View</button></td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td>Sample</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>

</body>
</html>
