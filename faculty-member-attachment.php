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
    include 'sidebar-faculty-member.php';    
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
            include 'dashboard.php';
        ?>
    </div>
    <div class="vw-90 ms-3 me-3 p-3 mt-4 rounded first-div container-div container-adjust position-relative">
            <h1>Faculty Attachment Files</h1>
            <hr class="hr"/>
            <div class="input-group d-flex justify-content-end">
                <input type="search" class="form-control rounded " style="max-width: 10em;" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-secondary">search</button>
            </div>
            <div class="mt-5">
                <h5 class="mt-5 sort-top" >Sort By:</h5>
                    <div class="dropdown btn-dropdown">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Research
                    </button>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Education</a></li>
                        <li><a class="dropdown-item" href="#">Trainings</a></li>
                        <li><a class="dropdown-item" href="#">Seminar</a></li>
                        <li><a class="dropdown-item" href="#">Certification</a></li>
                        <li><a class="dropdown-item" href="#">others</a></li>
                    </ul>
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm btn-modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        filter
                    </button>
                    <button type="button" class="btn btn-primary btn-sm btn-modal2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Upload
                    </button>
                    <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Attachment</h1>
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
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Title:</span>
                                                <input type="text" class="form-control">
                                                                
                                        </div>
                                        <ul class="list-group">
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="classification" id="educationCheckbox">
                                            <label class="form-check-label" for="educationCheckbox">Education</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="classification" id="trainingsCheckbox">
                                            <label class="form-check-label" for="trainingsCheckbox">Trainings</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="classification" id="seminarCheckbox">
                                            <label class="form-check-label" for="seminarCheckbox">Seminar</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="classification" id="certificationCheckbox">
                                            <label class="form-check-label" for="certificationCheckbox">Certification</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" name="classification" id="othersCheckbox">
                                            <label class="form-check-label" for="othersCheckbox">Others</label>
                                            <input class="text-black" type="text" id="othersClassification">
                                        </li>
                                        <li class="list-group-item">
                                            <input type="file" class="form-control" id="fileInput">
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
                            <div class="table-facultymember overflow-scroll ">
                            <table class="table table-striped ">
                            <thead class="table-success">
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Type of Document</th>
                                <th scope="col">Attachment</th>
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
    </div>



</body>
</html>
