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
                <h3> Dynamic Report</h3>
                <hr>
            <form action="" method="POST">
                <label>Title</label>
                <input class="rounded border-0 bg-secondary bg-opacity-25 title my-2 p-2" placeholder="Title" type="text">
                <div class="my-3">
                    <label>Faculty Members</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select" data-silent-initial-value-set="false">
                            <option value="1">fullname</option>
                            <option value="2">fullname</option>
                            <option value="3">fullname</option>
                            <option value="4">fullname</option>
                            <option value="5">fullname</option>
                            <option value="6">fullname</option>
                        </select>
                </div>
                <div class="my-3">
                    <label>Type of Faculty</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select" data-silent-initial-value-set="false">
                            <option value="iteFaculty">ITE Faculty</option>
                            <option value="geFaculty">GE Faculty</option>
                            
                        </select>
                </div> 
                <div class="my-3">
                    <label>Type of Chart/Graph</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select" data-silent-initial-value-set="false">
                            <option value="pie chart">Pie Chart</option>
                            <option value="Bar Graph">Bar Graph</option>
                           
                        </select>
                </div> 
                <div class="my-3">
                    <label>Other Information</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select" data-silent-initial-value-set="false">
                            <option value="educationalAttainment">Educational Attainment</option>
                            <option value="academicRank">Academic Rank</option>
                            <option value="appointmentStatus">Appointment Status</option>
                            <option value="professionalOrganization">Professional Organization</option>
                            <option value="researchArea">Research Area</option>
                            <option value="paper Presented">Paper Presented</option>
                            <option value="researchPublished">Research Published</option>
                        </select>
                </div>
                <button class="mt-5 btn btn-primary float-end">ADD</button>
                <h3 class="my-4">Preview</h3>
                <div class="border rounded mx-auto preview" style="margin-top:5em;">
                </div>
                <button class="btn btn-success mt-5 float-end">Generate</button>
                
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
