<?php
// Configuration
$uploadDir = '../uploads/'; // Create a directory called 'uploads' in your project directory
$allowedExtensions = ['pdf', 'doc', 'docx', 'txt']; // Define allowed file extensions

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // Get file information
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        // Check file size
        if ($fileSize === 0) {
            die("Error uploading file: File is empty.");
        }

        // Check file extension
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            die("Invalid file extension. Allowed extensions: " . implode(', ', $allowedExtensions));
        }

        // Move the uploaded file to the server directory with the original filename
        $destination = $uploadDir . $fileName;
        if (move_uploaded_file($fileTmpName, $destination)) {
            // Insert file details into the database
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            $sql = "INSERT INTO `attachment_file_tb` (filename, folder_path) VALUES (?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ss", $fileName, $destination);
            $stmt->execute();
            $stmt->close();

            
        } else {
            echo "Error uploading file.";
        }
        
        // Update user data
        $queryAttachment = "INSERT INTO `attachment_file_tb` (userid, time_stamp, fullname,title,document_type,other_specification) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt_attachment = $con->prepare($queryAttachment);

        // Make sure to bind the parameters in the correct order
        $stmt_attachment->bind_param('isssss',  $userid, $timeStamp, $name, $title, $documentType, $specification);

        $userid = $_SESSION['id'];
        date_default_timezone_set("Asia/Manila");
        $timeStamp = date("Y-m-d");
        $name = $_POST['fullname'];
        $title = $_POST['title'];
        $documentType = $_POST['document_type'];
        $specification = $_POST['others'];

        $execute_attachment = $stmt_attachment->execute();
        if (!$execute_attachment) {
            echo "Error: " . $stmt_attachment->error;
        } else {
            $stmt_attachment->close();
            
        }
       
    } else {
        echo "No file was uploaded.";
    }
}

// Handle any exceptions that are thrown by the mysqli class
try {
    // ...
} catch (Exception $e) {
    // Display a friendly error message to the user
    echo "Error uploading file: " . $e->getMessage();
}
?>
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
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
    <div class="mt-3 p-3 rounded sixteen-div position-absolute bg-light" style="height:50em; width:95%;">
        <h1>Attachment Files</h1>
        <hr class="hr"/>
        <div class="input-group d-flex justify-content-end">
            <input type="search" class="form-control rounded " style="max-width: 10em;" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-dark">search</button>
        </div>
        <div class="mt-5">                
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">                        
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Sort by:</span>
                            <select class="form-select" aria-label="Name">
                            <option selected>Research..</option>
                            <option value="name">Education</option>
                            <option value="name">Trainings</option>
                            <option value="name">Seminar</option>
                            <option value="name">Certification</option>
                            </select>
                        </div>
                    </div>
                    <div class="col text-start">
                        <button type="button" class="btn btn-dark btn-sm btn-modal">filter</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-primary btn-sm btn-modal2 " data-bs-toggle="modal" data-bs-target="#exampleModal">Upload</button>
                    </div>
                </div>
            </div>
            <div class="mt-3 sixteen-table overflow-scroll" style="height:20em; width:100%;">
                <table class="table table-striped mt-5 text-center">
                    <thead class="table-success">
                        <tr>                            
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Type of Document</th>
                            <th scope="col">Date Uploaded</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        <?php
                        $userid = $_SESSION['id'];
                            $querySelectAttachment = "SELECT * FROM `attachment_file_tb` where userid = $userid";
                            $sqlSelectAttachement = mysqli_query($con,$querySelectAttachment);

                            while($rowAttachment = mysqli_fetch_array($sqlSelectAttachement)){
                                echo '<tr>                            
                                <td>'.$rowAttachment['fullname'].'</td>
                                <td>'.$rowAttachment['filename'].'</td>
                                <td>'.$rowAttachment['document_type'].'</td>
                                <td>'.$rowAttachment['time_stamp'].'</td>
                                <td>
                                <button class="btn btn-primary mb-3">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>';
                            }

                        ?>
                        
                    </tbody>
                </table>
            </div> 
        </div>
    </div>

    <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Attachment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                    <div class="row align-items-start mt-2">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Full Name:</span>
                                <input type="text" name="fullname" class="form-control">                                                                
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Title:</span>
                                <input type="text" name="title" class="form-control">                                                                
                            </div>
                            <select class="w-100 p-2 rounded mb-3" name="document_type" id="document_type">
                                <option value="default">Choose type of document...</option>
                                <option value="research">Research</option>
                                <option value="education">Education</option>
                                <option value="training">Training</option>
                                <option value="seminar">Seminar</option>
                                <option value="certification">Certification</option>                                
                                <option value="others">others</option>                                
                            </select>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">if others, specify:</span>
                                <input type="text" class="form-control" name="others">                                                                
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <input type="file" name="file" class="form-control" id="fileInput">                                                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" value="Upload File" name="save_attachement" >Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
