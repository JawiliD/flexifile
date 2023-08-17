<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
<div class="layout">
    <?php
    // require 'config';
    include 'header.php';
    include 'sidebar-program-head.php';   
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
            include 'dashboard.php';
        ?>
    </div>
    <div class="vw-90 ms-3 me-3 p-3 mt-4 rounded first-div container-div container-adjust position-relative">
            <h1>User Accounts</h1>
            <hr class="hr"/>
            <div class="input-group d-flex justify-content-end">
                <input type="search" class="form-control rounded " style="max-width: 10em;" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-secondary">Search</button>
            </div>
            <button type="button" class="btn btn-primary btn-sm btn-modal3 py-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Account
            </button>
            <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">User Account</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="row align-items-start mt-2">
                                        <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Full Name:</span>
                                                <input type="text" class="form-control">
                                                                
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Email:</span>
                                                <input type="text" class="form-control">
                                                                
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Password:</span>
                                                <input type="text" class="form-control">
                                                                
                                        </div>
                                        <ul class="list-group">
                                        <h5>User Role</h5>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="userRole" id="facultyRole">
                                            <label class="form-check-label" for="facultyRole">Faculty Member</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="userRole" id="taskForceRole">
                                            <label class="form-check-label" for="taskForceRole">Task Force Leader</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="userRole" id="programHeadRole">
                                            <label class="form-check-label" for="programHeadRole">Program Head</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="userRole" id="deanRole">
                                            <label class="form-check-label" for="deanRole">Dean</label>
                                        </li>
                                        </ul>
                                        </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" >Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="table-useraccount overflow-scroll ">
                            <table class="table table-striped ">
                            <thead class="table-success">
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-secondary">
                                <tr>
                                <th scope="row">1</th>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>

                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                </tr>
                            </tbody>
                            </table>
                            </div>

    </div>





</body>
</html>
