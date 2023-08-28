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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
<div class="layout">
    <?php
    // require 'config';
    include 'header.php';
    include 'sidebar-dean.php';   
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
            include 'dashboard.php';
        ?>
    </div>
    <div class="vw-90 ms-3 me-3 p-3 mt-4 rounded first-div container-div2 container-adjust  position-relative">
            <h1>Teaching Assignment</h1>
            <hr class="hr"/>
            <h5>Faculty Members:</h5>
            <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Faculty Role</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="row align-items-start mt-2">
                                <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Semester:</span>
                                    <select class="form-select" aria-label="Name">
                                        <option selected>Semester</option>
                                        <option value="first_semester"> First Semester</option>
                                        <option value="second_semester">Second Semester</option>
                                    </select>
                                </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Subject Title:</span>
                                        <select class="form-select" aria-label="Educational Attainment">
                                            <option selected>Subject Title...</option>
                                            <option value="subject1">Subject 1</option>
                                            <option value="subject2">Subject 2</option>
                                            <option value="subject3">Subject 3</option>
                                            <option value="subject4">Subject 4</option>
                                        </select>
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Number of Units:</span>
                                        <select class="form-select" aria-label="Appointment Status">
                                            <option selected>No of Units...</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <button class="btn btn-primary add-btn">Add</button>
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                    <h3>Preview</h3>
                                     <div class="border rounded mx-auto preview" style="margin-top:5em;">

                                    </div>
                                    </div>
                                    
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
                            
                            <div class="table-useraccess overflow-scroll ">
                            <table class="table table-striped ">
                            <thead class="table-success">
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Faculty Type</th>
                                <th scope="col">Remaining Loads</th>
                                <th scope="col">Remaining Hours</th>
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
                                <td>
                                    <button class="btn btn-primary  btn-sm"data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td></td>

                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td>Sample</td>
                                <td></td>
                                </tr>
                            </tbody>
                            </table>
                            </div>
                            <form action="" method="POST">
                            <div class="custome-margin-preview1">
                                <h3>Preview</h3>
                                <div class="border rounded mx-auto preview" style="margin-top:5em;">

                                </div>
                                
                                <button class="btn btn-success mt-5 float-end">Generate</button>
                            </div>
                        </form>

    </div>




</body>
</html>
