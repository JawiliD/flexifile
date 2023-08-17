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
    <div class="vw-90 ms-3 me-3 p-3 mt-4 rounded first-div container-div container-adjust position-relative">
            <h1>Faculty Progress</h1>
            <hr class="hr"/>
            <h5 class="mt-5 position-absolute custome-margin-top">Faculty Members:</h5>
            <div class="mt-5">
                    <button type="button" class="btn btn-primary btn-sm btn-modal4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Assign Activity
                    </button>
                    <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Assign Activity</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                            <div class="row align-items-start mt-2">
                                <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Name:</span>
                                    <select class="form-select" aria-label="Name">
                                        <option selected>Fullname</option>
                                        <option value="name">Name</option>
                                        <option value="name">Name</option>
                                        <option value="name">Name</option>
                                        <option value="name">Name</option>
                                    </select>
                                </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Activity:</span>
                                        <input type="text" class="form-control"placeholder="Description">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Type of Activity:</span>
                                        <select class="form-select" aria-label="Type of Activity">
                                            <option selected>Choose...</option>
                                            <option value="teaching">Teaching</option>
                                            <option value="research">Research</option>
                                            <option value="curriculum_development">Curriculum Development</option>
                                            <option value="professional_development">Professional Development</option>
                                            <option value="advising">Advising</option>
                                            <option value="administrative">Administrative Duties</option>
                                            <option value="community_engagement">Community Engagement</option>
                                            <option value="technology_integration">Technology Integration</option>
                                            <option value="assessment_evaluation">Assessment and Evaluation</option>
                                            <option value="collaboration">Collaboration</option>
                                            <option value="counseling">Counseling</option>
                                            <option value="networking">Professional Networking</option>
                                        </select>
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Duration:</span>
                                        <select class="form-select" aria-label="Duration">
                                            <option selected>Choose...</option>
                                            <option value="short_term">Short Term</option>
                                            <option value="medium_term">Medium Term</option>
                                            <option value="long_term">Long Term</option>
                                        </select>
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
                            
                            <div class="table-deanprogress overflow-scroll ">
                            <table class="table table-striped ">
                            <thead class="table-success">
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Date Issued</th>
                                <th scope="col">Name</th>
                                <th scope="col">Activity</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Status</th>
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
                                <td>Sample</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Sample</td>
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
                                <td>Sample</td>
                                </tr>
                            </tbody>
                            </table>
                            </div>
                            
                            
                            
                            



            </div>
    </div>



</body>
</html>
