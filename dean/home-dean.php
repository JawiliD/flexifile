<?php
 require '../config.php';  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member-home</title>
</head>
<body>
<div class="layout">
    <?php
    include '../header.php';
    include 'sidebar-dean.php';    
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
        $link = 'dean-profile.php'; 
        $link2 = 'dean-attachment-list.php'; 
        include '../dashboard/dashboard.php';
        include '../dashboard/dashboard2.php';
        include '../dashboard/dashboard1.php'; 
         
        ?>
        <div class="mt-3 rounded nine-div">
            <div class="nine-div-container p-3 text-start">
                <h4>Faculty Progress Dashboard:</h4>                
                <div class="overflow-scroll nine-div-table">
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


    </div>
</body>
</html>