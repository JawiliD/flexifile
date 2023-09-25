<?php
require '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../css/virtual-select.min.css"> 
    <title>member-home</title>
</head>
<body>
<div class="layout">
    <?php
    
    include '../header.php';
    include 'sidebar-faculty-leader.php'; 
    include '../dashboard/dashboard-notif.php';
       
    ?>

    </div>
    
    <div class="content" style="width:65vw">
        <!-- start coding here -->
        <?php
        include '../dashboard/dashboard.php';          
        include '../dashboard/dashboard-nav.php';          
        ?>         
        <div class="mt-3 p-3 thirteen-div rounded">
            <h3>Faculty base on Research Presentation</h3>               
            <hr>
            <form action="" method="POST">
                <div class="my-3">
                    <label>Title of Paper</label>
                    <select id="multi_option" multiple name="native-select" placeholder="Select" data-silent-initial-value-set="false">
                        <option value="title_1">Title</option>
                        <option value="title_2">Title</option>
                        <option value="title_3">Title</option>
                        <option value="title_4">Title</option>
                        <option value="title_5">Title</option>
                        <option value="title_6">Title</option>
                    </select>
                </div>
                <div class="my-3">
                    <label>Type of Chart/Graph</label>
                    <select id="multi_option" multiple name="native-select" placeholder="Select" data-silent-initial-value-set="false">
                        <option value="pie chart">Pie Chart</option>
                        <option value="Bar Graph">Bar Graph</option>
                           
                    </select>
                </div> 
                <div class="text-end">
                    <button class="mt-5 btn btn-primary float-end">ADD</button>
                </div>
                <div class="mt-5">
                    <h3>Preview</h3>
                    <div class="border rounded mx-auto mt-3 preview" style="margin-top:5em;">
                        <!-- here the preview will appear -->
                    </div>
                    <div class="text-end">
                        <button class="btn btn-success mt-3">Generate</button>
                    </div>                    
                </div>
            </form>   
        </div>
        <hr>
        <div class="generated-report">
                
        </div>
    </div>
    <script type="text/javascript" src="../js/virtual-select.min.js"></script>
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
