<?php
// include '../header.php';
// include '../config.php';
// $userID = $_SESSION['id'];
$queryIdentifyPersonal = "SELECT * FROM `personal_info_tb` where userid = $userID";
$sqlIdenttifyPersonal=mysqli_query($con,$queryIdentifyPersonal);
$personalRow=mysqli_fetch_assoc($sqlIdenttifyPersonal);

if(isset($_POST['save_personal'])){

    // Prepare the personal info query
   $queryUpdatePersonal = "UPDATE `personal_info_tb` SET  firstname = ? , surname = ?, midname = ?, extension = ?, birthday = ?, birthplace = ?, sex = ?, civil_status = ?, height = ?, weight = ?, bloodtype = ?, gsis = ?, philhealth = ?, sss = ?, tin = ?, agency_no = ?, citizenship = ?, residential_house_no = ?, residential_street = ?, residential_subdivision = ?, residential_barangay = ?, residential_municipality = ?, residential_province = ?, residential_zipcode = ?, permanent_house_no = ?, permanent_street = ?, permanent_subdivision = ?, permanent_barangay = ?,permanent_municipality = ?, permanent_province = ?, permanent_zipcode = ?, telephone = ?, email = ?, mobile_no = ? where userid = ?";
   $stmt_personalUpdate = $con->prepare($queryUpdatePersonal);

   // Bind parameters
   $stmt_personalUpdate->bind_param("ssssssssssssssssssssssssssssssssssi", $firstname, $surname, $midname, $extension, $birthday, $birthplace, $sex, $civilStatus, $height, $weight, $bloodtype, $gsis, $philhealth, $sss, $tin, $agencyNo, $citizenship, $residentialHouseNo, $residentialStreet, $residentialSubdivision, $residentialBarangay, $residentialMunicipality, $residentialProvince, $residentialZipcode, $permanentHouseNo, $permanentStreet, $permanentSubdivision, $permanentBarangay, $permanentMunicipality, $permanentProvince, $permanentZipcode, $telephone, $email, $mobileNo, $userID);

  // Set parameter values
  $userID = $_SESSION['id'];
  $firstname = $_POST['up_firstname'];
  $surname = $_POST['up_surname'];
  $midname = $_POST['up_midname'];
  $extension = $_POST['up_extension'];
  $birthday = $_POST['up_birthday'];
  $birthplace = $_POST['up_birthplace'];
  $sex = $_POST['up_sex'];
  $civilStatus = $_POST['up_civilStatus'];
  $height = $_POST['up_height'];
  $weight = $_POST['up_weight'];
  $bloodtype = $_POST['up_bloodtype'];
  $gsis = $_POST['up_gsis'];
  $philhealth = $_POST['up_philhealth'];
  $sss = $_POST['up_sss'];
  $tin = $_POST['up_tin'];
  $agencyNo = $_POST['up_agencyNo'];
  $citizenship = $_POST['up_citizenship'];
  $residentialHouseNo = $_POST['up_residentialHouseNo'];
  $residentialStreet = $_POST['up_residentialStreet'];
  $residentialSubdivision = $_POST['up_residentialSubdivision'];
  $residentialBarangay = $_POST['up_residentialBarangay'];
  $residentialMunicipality = $_POST['up_residentialMunicipality'];
  $residentialProvince = $_POST['up_residentialProvince'];
  $residentialZipcode = $_POST['up_residentialZipcode'];
  $permanentHouseNo = $_POST['up_permanentHouseNo'];
  $permanentStreet = $_POST['up_permanentStreet'];
  $permanentSubdivision = $_POST['up_permanentSubdivision'];
  $permanentBarangay = $_POST['up_permanentBarangay'];
  $permanentMunicipality = $_POST['up_permanentMunicipality'];
  $permanentProvince = $_POST['up_permanentProvince'];
  $permanentZipcode = $_POST['up_permanentZipcode'];
  $telephone = $_POST['up_telephone'];
  $email = $_POST['up_email'];
  $mobileNo = $_POST['up_mobileNo'];

  // Execute the personal info query
  $execute_personalUpdate = $stmt_personalUpdate->execute();

  if(!$execute_personalUpdate){
    die(mysqli_error($con));
  }else{
    $stmt_personalUpdate->close();    
  }
  //notification
  $queryPersonalNotification = "INSERT INTO `notification_tb` (fullname, faculty_type, date_upload, updated_part) VALUES (?, ?, ?, ?)";

  $stmt_personalNotification = $con->prepare($queryPersonalNotification);

  $stmt_personalNotification->bind_param('ssss', $fullname, $facultyType, $date, $section);

  $fullname = $_SESSION['fullname'];
  date_default_timezone_set("Asia/Manila");
  $date = date("Y-m-d");
  $section = "edited his/her Personal information Details";
  $facultyType = $_SESSION['type'];

  $execute_personalNotification = $stmt_personalNotification->execute();

  if (!$execute_personalNotification){        
    echo "Error: " . $stmt_personalNotification->error;
  }else{
      echo "Notification inserted successfully.";
    $stmt_personalNotification->close(); 
    $con->close();       
  }

}
?>
<!-- <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</button> -->
<div class="modal fade" id="exampleModal1"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1">Create PDS Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <h3>Personal Information</h3>
                        <form method="POST">                                             
                        <div class="row align-items-start mt-2">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Firstname:</span>
                                <input type="text" name="up_firstname" class="form-control" value = "<?php echo $personalRow['firstname']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Surname:</span>
                                <input type="text" name="up_surname" class="form-control" value = "<?php echo $personalRow['surname']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Middle Name:</span>
                                <input type="text" name="up_midname" class="form-control" value = "<?php echo $personalRow['midname']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR,SR):</span>
                                <input type="text" name="up_extension" class="form-control" value = "<?php echo $personalRow['extension']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                <input type="date" name="up_birthday" class="form-control" value = "<?php echo $personalRow['birthday']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Place of Birth:</span>
                                <input type="text" name="up_birthplace" class="form-control" value = "<?php echo $personalRow['birthplace']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Sex:</span>
                                <input type="text" name="up_sex" class="form-control" value = "<?php echo $personalRow['sex']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Civil Status:</span>
                                <input type="text" name="up_civilStatus" class="form-control" value = "<?php echo $personalRow['civil_status']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Height(m):</span>
                                <input type="text" name="up_height" class="form-control" value = "<?php echo $personalRow['height']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Weight(kg):</span>
                                <input type="text" name="up_weight" class="form-control" value = "<?php echo $personalRow['weight']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Blood Type:</span>
                                <input type="text" name="up_bloodtype" class="form-control" value = "<?php echo $personalRow['bloodtype']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">GSIS ID no:</span>
                                <input type="text" name="up_gsis" class="form-control" value = "<?php echo $personalRow['gsis']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">PHILHEATH ID no:</span>
                                <input type="text" name="up_philhealth" class="form-control" value = "<?php echo $personalRow['philhealth']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">SSS no:</span>
                                <input type="text" name="up_sss" class="form-control" value = "<?php echo $personalRow['sss']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Tin no:</span>
                                <input type="text" name="up_tin" class="form-control" value = "<?php echo $personalRow['tin']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Agency Employee no:</span>
                                <input type="text" name="up_agencyNo" class="form-control" value = "<?php echo $personalRow['agency_no']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Citizenship:</span>
                                <input type="text" name="up_citizenship" class="form-control" value = "<?php echo $personalRow['citizenship']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telephone:</span>
                                <input type="text" name="up_telephone" class="form-control" value = "<?php echo $personalRow['telephone']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">E-mail Address: </span>
                                <input type="text" name="up_email" class="form-control" value = "<?php echo $personalRow['email']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Mobile no:</span>
                                <input type="text" name="up_mobileNo" class="form-control" value = "<?php echo $personalRow['mobile_no']  ?>">
                            </div>
                        </div>
                        <div class="col">
                            <p><strong>Residential Address:</strong><p>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">House/Block/Lot No.</span>
                                <input type="text" name="up_residentialHouseNo" class="form-control" value = "<?php echo $personalRow['residential_house_no']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Street</span>
                                <input type="text" name="up_residentialStreet" class="form-control" value = "<?php echo $personalRow['residential_street']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Subdivision/Village</span>
                                <input type="text" name="up_residentialSubdivision" class="form-control" value = "<?php echo $personalRow['residential_subdivision']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Barangay</span>
                                <input type="text" name="up_residentialBarangay" class="form-control" value = "<?php echo $personalRow['residential_barangay']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">City/Municipality</span>
                                <input type="text" name="up_residentialMunicipality" class="form-control" value ="<?php echo $personalRow['residential_municipality']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Province</span>
                                <input type="text" name="up_residentialProvince" class="form-control" value="<?php echo $personalRow['residential_province']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode</span>
                                <input type="text" name="up_residentialZipcode" class="form-control" value="<?php echo $personalRow['residential_zipcode']  ?>">
                            </div>
                            <p><strong>Permanent Address:</strong><p>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">House/Block/Lot No.</span>
                                <input type="text" name="up_permanentHouseNo" class="form-control" value="<?php echo $personalRow['permanent_house_no']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm"6>Street</span>
                                <input type="text" name="up_permanentStreet" class="form-control" value="<?php echo $personalRow['permanent_street']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Subdivision/Village</span>
                                <input type="text" name="up_permanentSubdivision" class="form-control" value="<?php echo $personalRow['permanent_subdivision']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Barangay</span>
                                <input type="text" name="up_permanentBarangay" class="form-control" value="<?php echo $personalRow['permanent_barangay']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">City/Municipality</span>
                                <input type="text" name="up_permanentMunicipality" class="form-control" value="<?php echo $personalRow['permanent_municipality']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Province</span>
                                <input type="text" name="up_permanentProvince" class="form-control" value="<?php echo $personalRow['permanent_province']  ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode</span>
                                <input type="text" name="up_permanentZipcode" class="form-control" value="<?php echo $personalRow['permanent_zipcode']  ?>">
                            </div>
                            </div>     
                             
                        </div>      
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn btn-success" name="save_personal">Save</button>
                    <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>