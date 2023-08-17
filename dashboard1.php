<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>dashboard1</title>
</head>
<body>
    <div class="container mt-2 px-0 third-div">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="my-2 bg-light  p-3 rounded third-div-container">
                            <table class="table">
                                <tbody>
                                    <tr><td class="border-0"><h2 class="text-center">Faculty Profile Status</h2></td></tr>
                                    <tr><td class="border-0"><h4>Last time updated:</h4></td></tr>
                                    <tr><td class="border-0 text-center"> <button type="button" class="btn btn-success">See Profile >>></button></td></tr>
                                </tbody>
                            </table>                         
                        </div>
                    </div>
                    <div class="col">
                        <div class="my-2 bg-light p-3 rounded third-div-container">
                        <table class="table">
                                <tbody>
                                    <tr><td class="border-0">
                                    <div class="mx-2">
                                        <img class="d-inline mx-1 icon" src="img/icon1.png">
                                        <img class="d-inline mx-1 icon" src="img/icon2.png">
                                        <img class="d-inline mx-1 icon" src="img/icon3.png">
                                        <img class="d-inline mx-1 icon" src="img/icon4.png">
                                    </div>
                                    </td></tr>
                                    <tr><td class="border-0"></td></tr>
                                    <tr><td class="border-0 text-center"><button type="button" class="btn btn-success">See Files >>></button></td></tr>
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        <div class="mt-2 bg-light rounded p-3 fourth-div">
            <div class="container text-start my-4">
                <div class="row">
                    <div class="col border-end border-3 border-secondary-subtle">
                    <h4 class="d-inline">Designation:</h4>
                    <h4 class="d-inline">Program Head</h4>
                    </div>
                    <div class="col">
                    <h4>Academic Year/Semester:</h4>
                    <h4>2nd Semester 2023-2024</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 rounded fifth-div">
            <div class="fifth-div-container p-3  text-start">
                <h4>Faculty Type:</h4>
                <h4>Semester:</h4>
                <div class="overflow-scroll fifth-div-table">
                <table class="table table-striped">
                    <thead class="text-center table-success">
                        <tr>
                            <th>Faculty</th>
                            <th>Teaching Assignments</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Subject Code</th>
                            <th>Subject Title</th>
                            <th>No. of Units</th>
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
        <div class="mt-3 rounded six-div">
            <div class="six-div-container p-3  text-start">
                <h4>Faculty Progress:</h4>                
                <div class="overflow-scroll six-div-table">
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
    
    
</body>
</html>
