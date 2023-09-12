<?php
include 'config.php';
include 'header.php';
echo $_SESSION['id'];
   

if (isset($_POST['submit'])) {  
    // Prepare the personal info query
    $querypersonal = "INSERT INTO `personal_info_tb` (userid, firstname, surname, midname, extension, birthday, birthplace, sex, civil_status, height, weight, bloodtype, gsis, philhealth, sss, tin, agency_no, citizenship, residential_address, residential_zipcode, permanent_address, permanent_zipcode, telephone, email, mobile_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_personal = $con->prepare($querypersonal);

    // Bind parameters
    $stmt_personal->bind_param("issssssssssssssssssssssss", $userid, $firstname, $surname, $midname, $extension, $birthday, $birthplace, $sex, $civilStatus, $height, $weight, $bloodtype, $gsis, $philhealth, $sss, $tin, $agencyNo, $citizenship, $residentialAddress, $residentialZipcode, $permanentAddress, $permanentZipcode, $telephone, $email, $mobileNo);

   // Set parameter values
   $userid = $_SESSION['id'];
   $firstname = $_POST['firstname'];
   $surname = $_POST['surname'];
   $midname = $_POST['midname'];
   $extension = $_POST['extension'];
   $birthday = $_POST['birthday'];
   $birthplace = $_POST['birthplace'];
   $sex = $_POST['sex'];
   $civilStatus = $_POST['civilStatus'];
   $height = $_POST['height'];
   $weight = $_POST['weight'];
   $bloodtype = $_POST['bloodtype'];
   $gsis = $_POST['gsis'];
   $philhealth = $_POST['philhealth'];
   $sss = $_POST['sss'];
   $tin = $_POST['tin'];
   $agencyNo = $_POST['agencyNo'];
   $citizenship = $_POST['citizenship'];
   $residentialAddress = $_POST['residentialAddress'];
   $residentialZipcode = $_POST['residentialZipcode'];
   $permanentAddress = $_POST['permanentAddress'];
   $permanentZipcode = $_POST['permanentZipcode'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];
   $mobileNo = $_POST['mobileNo'];

   // Execute the personal info query
   $stmt_personal->execute();

   // Prepare the family background query
   $queryfamily = "INSERT INTO `family_background_tb` (userid, spouse_surname, spouse_firstname, spouse_midname, occupation, employer, business_address, telephone_no, father_surname, father_firstname, father_midname, father_extension, mother_surname, mother_firstname, mother_midname) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
   $stmt_family = $con->prepare($queryfamily);

   // Bind parameters
   $stmt_family->bind_param('issssssssssssss', $userid, $spouseSurname, $spouseFirstname, $spouseMidname, $occupation, $employer, $business, $telephoneNo, $fatherSurname, $fatherFirstname, $fatherMidname, $fatherExtension, $motherSurname, $motherFirstname, $motherMidname);


   // Set parameter values
   $userid = $_SESSION['id'];
   $spouseSurname = $_POST['spouseSurname'];
   $spouseFirstname = $_POST['spouseFirstname'];
   $spouseMidname = $_POST['spouseMidname'];
   $occupation = $_POST['occupation'];
   $employer = $_POST['employer'];
   $business = $_POST['business'];   
   $telephoneNo = $_POST['telephoneNo'];
   $fatherSurname = $_POST['fatherSurname'];
   $fatherFirstname = $_POST['fatherFirstname'];
   $fatherMidname = $_POST['fatherMidname'];
   $fatherExtension = $_POST['fatherExtension'];
   $motherSurname = $_POST['motherSurname'];
   $motherFirstname = $_POST['motherFirstname'];
   $motherMidname = $_POST['motherMidname'];

   // Execute the family background query
   $stmt_family->execute();

   // Close the statements and database connection
   $stmt_personal->close();
   $stmt_family->close();
   $con->close();

   // Redirect to the same page
   $currentURL = $_SERVER['REQUEST_URI'];
   header('Location: ' . $currentURL);
   exit;

  
}


$familyDetails = isset($_SESSION['familyDetails']) ? $_SESSION['familyDetails'] : array();
?>
 <button type="button" class="btn btn-dark mt-5" data-bs-toggle="modal" data-bs-target="#pdsmodal">Create</button>

<div class="modal fade " id="pdsmodal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="pdsmodalabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel7">Create PDS Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="test-personal.php" method="POST">                       
                        <h3>Personal Information</h3>                        
                        <div class="row align-items-start mt-2">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Firstname:</span>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Surname:</span>
                                <input type="text" name="surname" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Middle Name:</span>
                                <input type="text" name="midname" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR,SR):</span>
                                <input type="text" name="extension" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Place of Birth:</span>
                                <input type="date" name="birthplace" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Sex:</span>
                                <input type="text" name="sex" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Civil Status:</span>
                                <input type="text" name="civilStatus" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Height(m):</span>
                                <input type="text" name="height" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Weight(kg):</span>
                                <input type="text" name="weight" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Blood Type:</span>
                                <input type="text" name="bloodtype" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">GSIS ID no:</span>
                                <input type="text" name="gsis" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">PHILHEATH ID no:</span>
                                <input type="text" name="philhealth" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">SSS no:</span>
                                <input type="text" name="sss" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Tin no:</span>
                                <input type="text" name="tin" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Agency Employee no:</span>
                                <input type="text" name="agencyNo" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Citizenship:</span>
                                <input type="text" name="citizenship" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Residential Address:</span>
                                <input type="text" name="residentialAddress" class="form-control">
                                <span class="mx-2"></span>
                                <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode:</span>
                                <input type="text" name="residentialZipcode" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Permanent Address:</span>
                                <input type="text" name="permanentAddress" class="form-control">
                                <span class="mx-2"></span>
                                <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode:</span>
                                <input type="text" name="permanentZipcode" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telephone:</span>
                                <input type="text" name="telephone" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">E-mail Address:</span>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Mobile no:</span>
                                <input type="text" name="mobileNo" class="form-control">
                            </div>
                            </div>          
                        </div>
                        </hr>
                            <h3>Family background</h3>
                                <div class="row align-items-start mt-2">
                                    <div class="col">                                    
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Surname:</span>
                                        <input type="text" name="spouseSurname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Firstname:</span>
                                            <input type="text" name="spouseFirstname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Middle Name:</span>
                                            <input type="text" name="spouseMidname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Occupation:</span>
                                            <input type="text" name="occupation" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Employer/Business Name:</span>
                                            <input type="text" name="employer" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Business Address:</span>
                                            <input type="text" name="business" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Telephone no:</span>
                                            <input type="text" name="telephoneNo" class="form-control">
                                        </div>        
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Surname:</span>
                                            <input type="text" name="fatherSurname" class="form-control">
                                        </div>                                
                                    </div>
                                    <div class="col">                                       
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Firstname:</span>
                                            <input type="text" name ="fatherFirstname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Father's Middle name:</span>
                                            <input type="text" name="fatherMidname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR.,SR):</span>
                                            <input type="text" name="fatherExtension" class="form-control">
                                        </div>
                                        <p>Mother's Maiden Name</p>                                        
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Surname:</span>
                                            <input type="text" name="motherSurname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Firstname:</span>
                                            <input type="text" name="motherFirstname" class="form-control">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Middle name:</span>
                                            <input type="text" name="motherMidname" class="form-control">
                                        </div>
                                    </div>
                                </div> 

                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                        <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>       
