<?php
$userID = $_SESSION['id'];

// Fetch personal info details
$sqlpersonalInfoDetails = mysqli_query($con, "SELECT * FROM `personal_info_tb` WHERE userid = $userID");
$rowpersonal = mysqli_fetch_array($sqlpersonalInfoDetails);

// Fetch family background details
$sqlFamilyDetails = mysqli_query($con, "SELECT * FROM `family_background_tb` WHERE userid = $userID");
$rowfamily = mysqli_fetch_array($sqlFamilyDetails);



// Check if the array elements exist before accessing them
if (!empty($rowpersonal)) {
    // Access the personal info data
    $firstname = $rowpersonal['firstname'];
    $surname = $rowpersonal['surname'];
    $midname = $rowpersonal['midname'];
    $extensionPersonal = $rowpersonal['extension'];
    $birthday = $rowpersonal['birthday'];
    $birthplace = $rowpersonal['birthplace'];
    $sex = $rowpersonal['sex'];
    $civilStatus = $rowpersonal['civil_status'];
    $height = $rowpersonal['height'];
    $weight = $rowpersonal['weight'];
    $bloodtype = $rowpersonal['bloodtype'];
    $gsis = $rowpersonal['gsis'];
    $pagibig = $rowpersonal['pagibig'];
    $philhealth = $rowpersonal['philhealth'];
    $sss = $rowpersonal['sss'];
    $tin = $rowpersonal['tin'];
    $agencyNo = $rowpersonal['agency_no'];
    $citizenship = $rowpersonal['citizenship'];
    $residential_house_no = $rowpersonal['residential_house_no'];
    $residential_street = $rowpersonal['residential_street'];
    $residential_subdivision = $rowpersonal['residential_subdivision'];
    $residential_barangay = $rowpersonal['residential_barangay'];
    $residential_municipality = $rowpersonal['residential_municipality'];
    $residential_province = $rowpersonal['residential_province'];
    $residential_zipcode = $rowpersonal['residential_zipcode'];
    $permanent_house_no = $rowpersonal['permanent_house_no'];
    $permanent_street = $rowpersonal['permanent_street'];
    $permanent_subdivision = $rowpersonal['permanent_subdivision'];
    $permanent_barangay = $rowpersonal['permanent_barangay'];
    $permanent_municipality = $rowpersonal['permanent_municipality'];
    $permanent_province = $rowpersonal['permanent_province'];
    $permanent_zipcode = $rowpersonal['permanent_zipcode'];
    $telephone = $rowpersonal['telephone'];
    $email = $rowpersonal['email'];
    $mobileNo = $rowpersonal['mobile_no'];


    
} else {
    // Handle the case where personal info data is not found
    // You can provide default values or perform other error handling
    $firstname = '';
    $surname = '';
    $midname = '';
    $extensionPersonal = '';
    $birthday = '';
    $birthplace = '';
    $sex = '';
    $civilStatus = '';
    $height = '';
    $weight = '';
    $bloodtype = '';
    $gsis = '';
    $pagibig = '';
    $philhealth = '';
    $sss = '';
    $tin = '';
    $agencyNo = '';
    $citizenship = '';
    $residential_house_no = '';
    $residential_street = '';
    $residential_subdivision = '';
    $residential_barangay = '';
    $residential_municipality = '';
    $residential_province = '';
    $residential_zipcode = '';
    $permanent_house_no = '';
    $permanent_street = '';
    $permanent_subdivision = '';
    $permanent_barangay = '';
    $permanent_municipality = '';
    $permanent_province = '';
    $permanent_zipcode = '';
    $telephone = '';
    $email = '';
    $mobileNo = '';

}

if (!empty($rowfamily)) {
    // Access the family background data
    $spouseSurname = $rowfamily['spouse_surname'];
    $spouseFirstname = $rowfamily['spouse_firstname'];
    $spouseMidname = $rowfamily['spouse_midname'];
    $spouseExtension = $rowfamily['spouse_extension'];
    $occupation = $rowfamily['occupation'];
    $employer = $rowfamily['employer'];
    $businessAddress = $rowfamily['business_address'];
    $telephone_spouse = $rowfamily['telephone_no'];
    $spouse_extension = $rowfamily['spouse_extension'];
    $father_surname = $rowfamily['father_surname'];
    $father_firstname = $rowfamily['father_firstname'];
    $father_midname = $rowfamily['father_midname'];
    $father_extension = $rowfamily['father_extension'];
    $mother_surname = $rowfamily['mother_surname'];
    $mother_firstname = $rowfamily['mother_firstname'];
    $mother_midname = $rowfamily['mother_midname'];
    
} else {
    // Handle the case where family background data is not found
    // You can provide default values or perform other error handling
    $spouseSurname = '';
    $spouseFirstname = '';
    $spouseMidname = '';
    $spouseExtension = '';
    $occupation = '';
    $employer = '';
    $businessAddress = '';
    $telephone_spouse = '';
    $spouse_extension = '';
    $father_surname = '';
    $father_firstname = '';
    $father_midname = '';
    $father_extension = '';
    $mother_surname = '';
    $mother_firstname = '';
    $mother_midname = '';
    
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
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
    <?php  
    include 'pds-modal.php';
    include 'pds-modal-upload.php';    
    ?>
    <div class="profile-pds mt-3 rounded p-2">          
        <button type="button" class="btn btn-dark"data-bs-toggle="modal" data-bs-target="#pdsmodal">Create</button>        
        <button type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#exampleModal8">Upload</button>        
        <hr class="hr"/>
        <div class="profile-pds rounded bg-secondary bg-opacity-50 p-2 text-center">
            <div class="d-flex justify-content-center">
                <a class="d-inline link-opacity-100 px-1  nav-link-info"id="personal" href="#personal-info">Personal Information</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-1  nav-link-info"id="family" href="#family-background">Family Background</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-1  nav-link-info"id="educational" href="#educational-background">Educational Background</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-1  nav-link-info"id="civilservice" href="#civil-service">Civil Service Eligibility</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-1  nav-link-info"id="workexp" href="#work-exp">Work Experience</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-1  nav-link-info"id="voluntary" href="#voluntary-work">Voluntary Work</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-1  nav-link-info"id="interventions" href="#intervention-ld">L&D Interventions</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-1  nav-link-info"id="interventions" href="#other_info">Other Information</a>
            </div>
        </div>
        <div class="profile-pds-personal mt-3" id="personal-info">
            <h4 class="fw-bold">Personal Information </h4>
            <div class="container text-start">
                <div class="row">
                    <div class="col">
                    <div class="input-group input-group-sm mb-3">
                            <p>Firstname: <?php echo $firstname;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Surname: <?php echo $surname;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Middle Name: <?php echo $midname; ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Name Extension(JR,SR): <?php echo $extensionPersonal;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Date of Birth: <?php echo $birthday;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Place of Birth: <?php echo $birthplace;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Sex: <?php echo $sex;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Civil Status: <?php echo $civilStatus;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Height(m): <?php echo $height;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Weight(kg): <?php echo $weight;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Blood Type: <?php echo $bloodtype;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>GSIS ID no: <?php echo $gsis;  ?></p>
                        </div> 
                        <div class="input-group input-group-sm mb-3">
                            <p>PAGIBIG ID no: <?php echo $pagibig;  ?></p>
                        </div>  
                        <div class="input-group input-group-sm mb-3">
                            <p>PHILHEATH ID no: <?php echo $philhealth;  ?></p>
                        </div>                      
                        <div class="input-group input-group-sm mb-3">
                            <p>SSS no: <?php echo $sss;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Tin no: <?php echo $tin;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Agency Employee no: <?php echo $agencyNo;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Citizenship: <?php echo $citizenship;  ?></p>
                        </div>  
                        <div class="input-group input-group-sm mb-3">
                            <p>Telephone: <?php echo $telephone;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>E-mail Address: <?php echo $email;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Mobile no: <?php echo $mobileNo;  ?></p>
                        </div>   
                    </div>
                    <div class="col">
                        <p><strong>Residential Address:</strong></p>
                        <div class="input-group input-group-sm mb-3">
                            <p>House/Block/Lot No. <?php echo $residential_house_no;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Street: <?php echo $residential_street;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Subdivision/Village: <?php echo $residential_subdivision;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Barangay: <?php echo $residential_barangay;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>City/Municipality: <?php echo $residential_municipality;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Province: <?php echo $residential_province;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Zipcode: <?php echo $residential_zipcode;  ?></p>
                        </div>
                        <p><strong>Permanent Address:</strong></p> 
                        <div class="input-group input-group-sm mb-3">
                            <p>House/Block/Lot No. <?php echo $permanent_house_no;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Street: <?php echo $permanent_street;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Subdivision/Village: <?php echo $permanent_subdivision;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Barangay: <?php echo $permanent_barangay;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>City/Municipality: <?php echo $permanent_municipality;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Province: <?php echo $permanent_province;  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Zipcode: <?php echo $permanent_province;  ?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="mt-2 text-end">
                <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</button>
                <hr class="border border-success border-3 opacity-100"/>
            </div> 
        </div>
        <div class="profile-pds-family mt-3" id="family-background">
            <h4 class="fw-bold">Family Background</h4>
            <div class="container text-start">
                <div class="row">
                    <div class="col">
                    <div class="input-group input-group-sm mb-3">
                            <p>Spouse Surname: <?php echo $spouseSurname;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Spouse Firstname: <?php echo $spouseFirstname;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Spouse Middle Name: <?php echo $spouseMidname ;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Spouse Extension: <?php echo $spouseExtension ;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                             <p>Occupation: <?php echo $occupation;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Employer/Business Name: <?php echo $employer;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Business Address: <?php echo $businessAddress;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Telephone no: <?php echo $telephone_spouse  ?></p>
                        </div> 
                        <div class="input-group input-group-sm mb-3">
                            <p>Spouse Extension: <?php echo  $spouse_extension  ?></p>
                        </div> 
                        <div class="input-group input-group-sm mb-3">
                            <p>Father's Surname:<?php echo $father_surname;  ?></p>
                        </div>                                           
                    </div>
                    <div class="col">                        
                    <div class="input-group input-group-sm mb-3">
                            <p>Father's Firstname: <?php echo $father_firstname;  ?></p>
                        </div>                         
                        <div class="input-group input-group-sm mb-3">
                            <p>Father's Middle name: <?php echo $father_midname;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Name Extension(JR.,SR): <?php echo $father_extension;  ?></p>
                        </div>
                        <div class="text-start">                        
                            <p><strong>Mother's Maiden name</strong></p>  
                        </div>                      
                        <div class="input-group input-group-sm mb-3">
                            <p>Mother's Surname: <?php echo $mother_surname;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Mother's Firstname: <?php echo $mother_firstname;  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Mother's Middle name: <?php echo $mother_midname;  ?></p>
                        </div>                 
                    </div>                    
                </div>
                <div class="text-start">
                    <p><strong>Name of Children</strong></p>
                </div>
                <div class="row">
                   <?php
                   $sqlChildrenDetails = mysqli_query($con, "SELECT * FROM `family_children_tb` WHERE userid = $userID");

                   if (mysqli_num_rows($sqlChildrenDetails) > 0) {
                       while ($rowchildren = mysqli_fetch_array($sqlChildrenDetails)) {
                           echo '<div class="row">
                               <div class="col text-start">                       
                                   <div class="input-group input-group-sm mb-3">
                                       <p>Child Name: ' . $rowchildren['childname'] . '</p> 
                                   </div>
                               </div>
                               <div class="col">
                                   <div class="input-group input-group-sm mb-3">
                                       <p>Date of Birth: ' . $rowchildren['childbirth'] . '</p> 
                                   </div>                        
                               </div>
                           </div>';
                       }
                   } else {
                       echo '<div class="row">
                       <div class="col text-start">                       
                           <div class="input-group input-group-sm mb-3">
                               <p>Child Name: </p> 
                           </div>
                       </div>
                       <div class="col">
                           <div class="input-group input-group-sm mb-3">
                               <p>Date of Birth: </p> 
                           </div>                        
                       </div>
                   </div>';
                   }
                   
                   ?>
                </div>                   
            </div>
            <div class="mt-2 text-end">
                <button type="button" class="btn btn-success px-3 edit-btn-1 "data-bs-toggle="modal" data-bs-target="#exampleModal2">Edit</button>
                <hr class="border border-success border-3 opacity-100"/>
            </div>
        </div>
        <div class="profile-pds-education" id="educational-background">
            <h4 class="fw-bold">Educational Background</h4> 
            <h5 class="fw-bold">Elementary</h5>                      
            <?php
            
            $sqlElementary = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'ELEMENTARY'");         
            
            if(mysqli_num_rows($sqlElementary) > 0) {
                while ($row2 = mysqli_fetch_array($sqlElementary)){
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:'.$row2['schoolName'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:'.$row2['degree'].'</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:'.$row2['fromDate'].'</p>
                                <span class="mx-5"></span>
                                <p>To:'.$row2['toDate'].'</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:'.$row2['units'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:'.$row2['graduated'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:'.$row2['honors'].'</p>
                            </div>
                        </div>                        
                    </div>
                </div>
                <hr>';
                }
            } else {               
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:</p>
                                <span class="mx-5"></span>
                                <p>To:</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:</p>
                            </div>
                        </div>                        
                    </div>
                </div>';
                
            }
           

            ?>
                
            </div>
            <div class="secondary">
            <h5 class="fw-bold">Secondary</h5>

            <?php            
            $sqlSecondary = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'SECONDARY'");         

            if(mysqli_num_rows($sqlSecondary) > 0){
                while ($row3 = mysqli_fetch_array($sqlSecondary)){
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:'.$row3['schoolName'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:'.$row3['degree'].'</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:'.$row3['fromDate'].'</p>
                                <span class="mx-5"></span>
                                <p>To:'.$row3['toDate'].'</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:'.$row3['units'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:'.$row3['graduated'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:'.$row3['honors'].'</p>
                            </div>
                        </div>                        
                    </div>
                </div><hr>';
                } 
            }else{                
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:</p>
                                <span class="mx-5"></span>
                                <p>To:</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:</p>
                            </div>
                        </div>                        
                    </div>
                </div>';
                }
            
        

            ?>
            </div>
            
            <div class="profile-pds-vocational">
            <h5 class="fw-bold">Vocational/Trade Course</h5>
            <?php
            
            $sqlVocational = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'VOCATIONAL / TRADE COURSE'");         
            
            if(mysqli_num_rows($sqlVocational)){
                while ($row4 = mysqli_fetch_array($sqlVocational)){
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:'.$row4['schoolName'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:'.$row4['degree'].'</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:'.$row4['fromDate'].'</p>
                                <span class="mx-5"></span>
                                <p>To:'.$row4['toDate'].'</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:'.$row4['units'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:'.$row4['graduated'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:'.$row4['honors'].'</p>
                            </div>
                        </div>                        
                    </div>
                </div><hr>';
                }
            }else{                
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:</p>
                                <span class="mx-5"></span>
                                <p>To:</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:</p>
                            </div>
                        </div>                        
                    </div>
                </div>';
                
            }
            

            ?>
            </div>
                <div class="college">
                <h5 class="fw-bold">College</h5>
                <?php
            
            $sqlCollege = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'COLLEGE'");         

            if(mysqli_num_rows($sqlCollege) > 0){
                while ($row5 = mysqli_fetch_array($sqlCollege)){
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:'.$row5['schoolName'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:'.$row5['degree'].'</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:'.$row5['fromDate'].'</p>
                                <span class="mx-5"></span>
                                <p>To:'.$row5['toDate'].'</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:'.$row5['units'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:'.$row5['graduated'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:'.$row5['honors'].'</p>
                            </div>
                        </div>                        
                    </div>
                </div><hr>';
                }
            }else {                
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:</p>
                                <span class="mx-5"></span>
                                <p>To:</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned: /p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated: </p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved: </p>
                            </div>
                        </div>                        
                    </div>
                </div>';
                
            }
            

            ?>
                </div>
                <div class="graduate">
                <h5 class="fw-bold">Graduate Studies</h5>
                <?php
            
            $sqlGraduate = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'GRADUATE STUDIES'");         
            if(mysqli_num_rows($sqlGraduate)){
                while ($row6 = mysqli_fetch_array($sqlGraduate)){
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:'.$row6['schoolName'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:'.$row6['degree'].'</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:'.$row6['fromDate'].'</p>
                                <span class="mx-5"></span>
                                <p>To:'.$row6['toDate'].'</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:'.$row6['units'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:'.$row6['graduated'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:'.$row6['honors'].'</p>
                            </div>
                        </div>                        
                    </div>
                </div><hr>';
                }
            }else{
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Name of School:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Basic Educational/Degree/Course:</p>
                            </div>
                            <p>Period Attendance</p>
                            <div class="input-group input-group-sm mb-3">                            
                                <span class="mx-3"></span>
                                <p>From:</p>
                                <span class="mx-5"></span>
                                <p>To:</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Highest Level/Unit Earned:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Year Graduated:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Scholarship/Academic Honors Recieved:</p>
                            </div>
                        </div>                        
                    </div>
                </div>';
                
            }
            

            ?>

                <div class="mt-2 text-end">
                    <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal3">Edit</button>
                    <hr class="border border-success border-3 opacity-100"/>
                </div>
            </div>
            
            
            <div class="profile-pds-civil" id="civil-service">
            <h4 class="fw-bold">Civil Service Eligibility </h4>
            <?php
                $sqlCivilDetails = mysqli_query($con,"SELECT * FROM `civil_service_tb` where userid = $userID");
                 
                if(mysqli_num_rows($sqlCivilDetails)){
                    while($row7 = mysqli_fetch_array($sqlCivilDetails)){
                        echo '<div class="container text-start">
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Career Service:'.$row7['career'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Rating:'.$row7['rating'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Date of Examination/Conferment:'.$row7['examination'].'</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Place of Examination/Conferment:'.$row7['place'].'</p>
                                </div>
                                <p><strong>License</strong></p>
                                <div class="input-group input-group-sm mb-3">                               
                                    <p>Number:'.$row7['number'].'</p>                                
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Date of Validity:'.$row7['validity'].'</p>
                                </div>
                                </div>
                            </div>                       
                        </div><hr>';
                     }
                }else{                   
                        echo '<div class="container text-start">
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Career Service:</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Rating:</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Date of Examination/Conferment:</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Place of Examination/Conferment:</p>
                                </div>
                                <p><strong>License</strong></p>
                                <div class="input-group input-group-sm mb-3">                               
                                    <p>Number:</p>                                
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Date of Validity:</p>
                                </div>
                                </div>
                            </div>                       
                        </div><hr>';
                     
                }
                
                
            ?>
                    <div class="mt-2 text-end">
                        <button type="button" class="btn btn-success px-3 edit-btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal4">Edit</button>
                        <hr class="border border-success border-3 opacity-100"/>
                    </div>
                </div>
                <div class="profile-pds-work" id="work-exp">
                <h4 class="fw-bold">Work Experience  </h4>
                <?php
            $sqlWorkDetails = mysqli_query($con,"SELECT * FROM `work_experience_tb` where userid = $userID");
            
            if(mysqli_num_rows($sqlWorkDetails)){
                while ($row8 = mysqli_fetch_array($sqlWorkDetails)){
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <p>Inclusive Dates</p>
                            <div class="input-group input-group-sm mb-3">
                                <p>From:'.$row8['work_from_date'].'</p>
                                <span class="mx-5"></span>
                                <p>To:'.$row8['work_to_date'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Position Title:'.$row8['position_title'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Department/Agency/Office/Company:'.$row8['department'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Monthly Salary:'.$row8['salary'].'</p>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="input-group input-group-sm mb-3">
                                <p>Salary/Job/Pay Grade (if applicable) & Step  (Format "00-0")/ Increment:'.$row8['paygrade'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Status of Appointment:'.$row8['appointment'].'</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Govt Service (Y/N):'.$row8['gov_service'].'</p>
                            </div>
                        </div>    
                    </div>
                </div><hr>';
                }
    
            }else{
                    echo '<div class="container text-start">
                    <div class="row">
                        <div class="col">
                            <p>Inclusive Dates</p>
                            <div class="input-group input-group-sm mb-3">
                                <p>From:b</p>
                                <span class="mx-5"></span>
                                <p>To:v</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Position Title:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Department/Agency/Office/Company: </p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Monthly Salary: </p>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="input-group input-group-sm mb-3">
                                <p>Salary/Job/Pay Grade (if applicable) & Step  (Format "00-0")/ Increment:</p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Status of Appointment: </p>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <p>Govt Service (Y/N): </p>
                            </div>
                        </div>    
                    </div>
                </div><hr>';
                
    
            }
            
            ?>
                    <div class="mt-2 text-end">
                        <button type="button" class="btn btn-success px-3 edit-btn-1 " data-bs-toggle="modal" data-bs-target="#exampleModal5">Edit</button>
                        <hr class="border border-success border-3 opacity-100"/>
                    </div>
                </div>
                

                <div class="profile-pds-voluntary" id="voluntary-work">
                <h5 class="fw-bold">Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s  </h5>
                <?php
                $sqlVoluntaryDetails = mysqli_query($con,"SELECT * FROM `voluntary_work_tb` where userid = $userID");
                
                if(mysqli_num_rows($sqlVoluntaryDetails) > 0){
                    while($row9 = mysqli_fetch_array($sqlVoluntaryDetails)){
                        echo '<div class="container text-start">
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Name and Address of Organization:'.$row9['organization'].'</p>                                                                
                                </div>
                                <p>Inclusive Dates</p>
                                <div class="input-group input-group-sm mb-3">
                                    <p>From:'.$row9['from_date'].'</p>
                                    <span class="mx-5"></span>
                                    <p>To:'.$row9['to_date'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Number of Hours:'.$row9['hours'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Position/ Nature of Work:'.$row9['position'].'</p>
                                </div>
                            </div>                                                      
                        </div>
                    </div><hr>';
                    }

                }else{                   
                        echo '<div class="container text-start">
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Name and Address of Organization:</p>                                                                
                                </div>
                                <p>Inclusive Dates</p>
                                <div class="input-group input-group-sm mb-3">
                                    <p>From:</p>
                                    <span class="mx-5"></span>
                                    <p>To:</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Number of Hours:</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Position/ Nature of Work:</p>
                                </div>
                            </div>                                                      
                        </div>
                    </div><hr>';
                    }               
                
                
                ?>
                <div class="mt-2 text-end">
                    <button type="button" class="btn btn-success px-3 edit-btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal6">Edit</button>
                    <hr class="border border-success border-3 opacity-100"/>
                </div>
            </div>
            <div class="profile-pds-intervention" id="intervention-ld">
                <h5 class="fw-bold">Learning and Development (L&D) Interventions/Training Programs Attended</h5>
                <?php
                $sqlTrainingDetails = mysqli_query($con,"SELECT * FROM `training_programs_tb` where userid = $userID");
                if(mysqli_num_rows($sqlTrainingDetails)){
                    while($row10 = mysqli_fetch_array($sqlTrainingDetails)){
                        echo '<div class="container text-start">
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Title of Learning and Development Interventions/Training Programs:'.$row10['title'].'</p>
                                </div>
                                <p><strong>Inclusive Dates of Attendance</strong></p>
                                <div class="input-group input-group-sm mb-3">
                                    <p>From:'.$row10['training_from_date'].'</p>
                                    <span class="mx-5"></span>
                                    <p>To:'.$row10['training_to_date'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Number of Hours:'.$row10['duration'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Type of LD( Managerial/ Supervisory/Technical/etc):'.$row10['type'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Conducted/Sponsored by:'.$row10['sponsor'].'</p>
                                </div>
                            </div>                                
                        </div>
                    </div><hr>';
                    }
                }else{                    
                        echo '<div class="container text-start">
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Title of Learning and Development Interventions/Training Programs:</p>
                                </div>
                                <p><strong>Inclusive Dates of Attendance</strong></p>
                                <div class="input-group input-group-sm mb-3">
                                    <p>From:</p>
                                    <span class="mx-5"></span>
                                    <p>To:</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Number of Hours:</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Type of LD( Managerial/ Supervisory/Technical/etc):</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Conducted/Sponsored by:</p>
                                </div>
                            </div>                                
                        </div>
                    </div><hr>';
                    
                }
               
                
                ?>
                <div class="mt-2 text-end">
                        <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal7">Edit</button>
                        <hr class="border border-success border-3 opacity-100"/>
                </div>
            </div>
            <div class="profile-pds-intervention" id="other_info">
                <h5 class="fw-bold">Other Information</h5>
                <?php
                $sqlOtherDetails = mysqli_query($con,"SELECT * FROM `other_info_tb` where userid = $userID");
                if(mysqli_num_rows($sqlOtherDetails)){
                    while($row11 = mysqli_fetch_array($sqlOtherDetails)){
                        echo '<div class="container text-start">
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Special Skill and Hobbies'.$row11['skills_hobbies'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Non-Academic Distinctions/Recognition:'.$row11['recognition'].'</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Membership in Association/Organization by:'.$row11['association'].'</p>
                                </div>
                            </div>                                
                        </div>
                    </div><hr>';
                    }
                }else{                    
                        echo '<div class="container text-start">
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <p>Special Skill and Hobbies: </p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Non-Academic Distinctions/Recognition:</p>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <p>Membership in Association/Organization by:</p>
                                </div>
                            </div>                              
                        </div>
                    </div><hr>';
                    
                }
               
                
                ?>
                <div class="mt-2 text-end">
                        <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal9">Edit</button>
                        
                </div>
            </div>


    </div>
    <!-- end of profile -->

    <!-- start of modals -->
    
    <?php

    include 'pds-modal-personal.php';
    include 'pds-modal-family.php';
    include 'pds-modal-education.php';
    include 'pds-modal-civil-service.php';
    include 'pds-modal-work.php';
    include 'pds-modal-voluntary.php';
    include 'pds-modal-training.php';
    include 'pds-modal-other.php';


    ?>   

    

       



</body>
</html>