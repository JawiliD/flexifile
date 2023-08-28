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
    include 'header.php';
    include 'sidebar-faculty-leader.php'; 
    include 'dashboard-notif.php';
       
    ?>

    </div>
    
    <div class="content" style="width:65vw">
        <!-- start coding here -->
        <?php
        include 'dashboard.php';          
        include 'dashboard-nav.php';          
        ?> 
        
            <div class="mt-3 p-3 thirteen-div">
                <h3>Faculty Members per Educational Attainment</h3>
                <hr>
            <form action="" method="POST">
            <div class="table-useraccess overflow-scroll ">
                            <table class="table table-striped ">
                            <thead class="table-success">
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Date Issued</th>
                                <th scope="col">Name</th>
                                <th scope="col">Activity</th>
                                <th scope="col">Deadline</th>
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
            </form>
            <form action="" method="POST">
                <div class="custome-margin-preview1">
                    <h3>Preview</h3>
                    <div class="border rounded mx-auto preview" style="margin-top:5em;">

                    </div>
                    <button class="btn btn-success mt-5 float-end">Generate</button>
                </div>
            </form>
            
            








            </div>
            <hr>
            <div class="fourteen-div">
                
            </div>

             
       

    </div>
    <script type="text/javascript" src="js/virtual-select.min.js"></script>
        <script type="text/javascript">
            VirtualSelect.init({ 
            ele: '#multi_option' 
            });

            
        </script>
        <script>
           document.getElementById("printButton").addEventListener("click", function() {
            
            window.print();
        });
        </script>

</body>
</html>
