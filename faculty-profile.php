<?php
$userID = $_SESSION['id'];

$sqlpersonalInfoDetails = mysqli_query($con,"SELECT * FROM `personal_info_tb` where userid = $userID");
$rowpersonal = mysqli_fetch_array($sqlpersonalInfoDetails);

$sqlFamilyDetails = mysqli_query($con,"SELECT * FROM `family_background_tb` where userid = $userID");
$rowfamily = mysqli_fetch_array($sqlFamilyDetails);

$sqlChildrenDetails = mysqli_query($con,"SELECT * FROM `family_children_tb` where userid = $userID");
$rowchildren = mysqli_fetch_array($sqlChildrenDetails);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
    <?php  
    include 'pds-modal.php';
    ?>
    <div class="profile-pds mt-3 rounded p-3">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#pdsmodal">Create</button>
        <button type="button" class="btn btn-primary">Upload</button>        
        <hr class="hr"/>
        <div class="profile-pds rounded bg-secondary bg-opacity-50 p-2 text-center">
            <div class="d-flex justify-content-center">
                <a class="d-inline link-opacity-100 px-2  nav-link-info"id="personal" href="#personal-info">Personal Information</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-2  nav-link-info"id="family" href="#family-background">Family Background</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-2  nav-link-info"id="educational" href="#educational-background">Educational Background</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-2  nav-link-info"id="civilservice" href="#civil-service">Civil Service Eligibility</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-2  nav-link-info"id="workexp" href="#work-exp">Work Experience</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-2  nav-link-info"id="voluntary" href="#voluntary-work">Voluntary Work</a>
                <span class="vertical-line"></span>
                <a class="d-inline link-opacity-100 px-2  nav-link-info"id="interventions" href="#intervention-ld">L&D Interventions</a>
            </div>
        </div>
        <div class="profile-pds-personal mt-3" id="personal-info">
            <h4 class="fw-bold">Personal Information </h4>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <p>Firstname: <?php echo $rowpersonal['firstname'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Surname: <?php echo $rowpersonal['surname'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Middle Name: <?php echo $rowpersonal['midname']; ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Name Extension(JR,SR): <?php echo $rowpersonal['extension'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Date of Birth: <?php echo $rowpersonal['birthday'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Place of Birth: <?php echo $rowpersonal['birthplace'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Sex: <?php echo $rowpersonal['sex'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Civil Status: <?php echo $rowpersonal['civil_status'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Height(m): <?php echo $rowpersonal['height'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Weight(kg): <?php echo $rowpersonal['weight'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Blood Type: <?php echo $rowpersonal['bloodtype'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>GSIS ID no: <?php echo $rowpersonal['gsis'];  ?></p>
                        </div>                        
                    </div>
                    <div class="col">  
                        <div class="input-group input-group-sm mb-3">
                            <p>PHILHEATH ID no: <?php echo $rowpersonal['philhealth'];  ?></p>
                        </div>                      
                        <div class="input-group input-group-sm mb-3">
                            <p>SSS no: <?php echo $rowpersonal['sss'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Tin no: <?php echo $rowpersonal['tin'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Agency Employee no: <?php echo $rowpersonal['agency_no'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Citizenship: <?php echo $rowpersonal['citizenship'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Residential Address: <?php echo $rowpersonal['residential_address'];  ?></p> 
                        </div>
                        <div class="input-group input-group-sm mb-3">
                        <p>Zipcode: <?php echo $rowpersonal['residential_zipcode'];  ?></p>
                        </div> 
                        <div class="input-group input-group-sm mb-3">
                            <p>Permanent Address: <?php echo $rowpersonal['permanent_address'];  ?></p>                            
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Zipcode: <?php echo $rowpersonal['residential_zipcode'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Telephone: <?php echo $rowpersonal['telephone'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>E-mail Address: <?php echo $rowpersonal['email'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Mobile no: <?php echo $rowpersonal['mobile_no'];  ?></p>
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
                            <p>Spouse Surname: <?php echo $rowfamily['spouse_surname'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Spouse Firstname: <?php echo $rowfamily['spouse_firstname'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Spouse Middle Name: <?php echo $rowfamily['spouse_midname'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                             <p>Occupation: <?php echo $rowfamily['occupation'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Employer/Business Name: <?php echo $rowfamily['employer'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Business Address: <?php echo $rowfamily['business_address'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Telephone no: <?php echo $rowfamily['telephone_no'];  ?></p>
                        </div> 
                        <div class="input-group input-group-sm mb-3">
                            <p>Father's Surname:<?php echo $rowfamily['father_surname'];  ?></p>
                        </div>                                           
                    </div>
                    <div class="col">                        
                        <div class="input-group input-group-sm mb-3">
                            <p>Father's Firstname: <?php echo $rowfamily['father_firstname'];  ?></p>
                        </div>                         
                        <div class="input-group input-group-sm mb-3">
                            <p>Father's Middle name: <?php echo $rowfamily['father_midname'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Name Extension(JR.,SR): <?php echo $rowfamily['father_extension'];  ?></p>
                        </div>
                        <div class="text-start">                        
                            <p><strong>Mother's Maiden name</strong></p>  
                        </div>                      
                        <div class="input-group input-group-sm mb-3">
                            <p>Mother's Surname: <?php echo $rowfamily['mother_surname'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Mother's Firstname: <?php echo $rowfamily['mother_firstname'];  ?></p>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <p>Mother's Middle name: <?php echo $rowfamily['mother_midname'];  ?></p>
                        </div>                    
                    </div>                    
                </div>
                <div class="text-start">
                    <p><strong>Name of Children</strong></p>
                </div>
                <?php
                
                    while ($row1 = mysqli_fetch_array($sqlChildrenDetails)){
                        echo '<div class="row">
                        <div class="col text-start">                       
                            <div class="input-group input-group-sm mb-3">
                                <p>Child Name: '. $row1['childname'].'</p> 
                            </div>
                            </div>
                            <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <p>Date of Birth: '. $row1['childbirth'].'</p> 
                            </div>                        
                        </div>
                    </div>   ';
                    }
                ?>                             
            </div>
            <div class="mt-2 text-end">
                <button type="button" class="btn btn-success px-3 edit-btn-1 "data-bs-toggle="modal" data-bs-target="#exampleModal2">Edit</button>
                <hr class="border border-success border-3 opacity-100"/>
            </div>
        </div>
        <div class="profile-pds-education" id="educational-background">
            <h4 class="fw-bold">Educational Background</h4>                       
            <div class="elementary">
            <h5 class="fw-bold">Elementary</h5>
            <?php
            
            $sqlElementary = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'elementary'");         

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
            </div>';
            }

            ?>
                
            </div>
            <div class="secondary">
            <h5 class="fw-bold">Secondary</h5>

            <?php            
            $sqlSecondary = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'secondary'");         

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
            </div>';
            }

            ?>
            </div>
            
            <div class="profile-pds-vocational">
            <h5 class="fw-bold">Vocational/Trade Course</h5>
            <?php
            
            $sqlVocational = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'vocational'");         

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
            </div>';
            }

            ?>
            </div>
                <div class="college">
                <h5 class="fw-bold">College</h5>
                <?php
            
            $sqlCollege = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'college'");         

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
            </div>';
            }

            ?>
                </div>
                <div class="graduate">
                <h5 class="fw-bold">Graduate Studies</h5>
                <?php
            
            $sqlGraduate = mysqli_query($con, "SELECT * FROM `education_tb` where userid = $userID AND level = 'graduate'");         

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
            </div>';
            }

            ?>

                </div>
                <div class="mt-2 text-end">
                    <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal3">Edit</button>
                    <hr class="border border-success border-3 opacity-100"/>
                </div>
            </div>
            
            
            <div class="profile-pds-civil" id="civil-service">
            <h4 class="fw-bold">Civil Service Eligibility </h4>
            <?php
                $sqlCivilDetails = mysqli_query($con,"SELECT * FROM `civil_service_tb` where userid = $userID");
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
                
                ?>
                    
                    <div class="mt-2 text-end">
                        <button type="button" class="btn btn-success px-3 edit-btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal6">Edit</button>
                        <hr class="border border-success border-3 opacity-100"/>
                    </div>
                </div>
                <div class="profile-pds-intervention" id="intervendion-ld">
                <h5 class="fw-bold">Learning and Development (L&D) Interventions/Training Programs Attended</h5>
                <?php
                $sqlTrainingDetails = mysqli_query($con,"SELECT * FROM `training_programs_tb` where userid = $userID");
                
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
                
                ?>
                <div class="mt-2 text-end">
                        <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal7">Edit</button>
                        
                    </div>
                </div>


    </div>
    <!-- end of profile -->

    <!-- start of modals -->
    
    <?php

    // include 'pds-modal-personal.php';
    // include 'pds-modal-family.php';
    // include 'pds-modal-education.php';
    // include 'pds-modal-civil-service.php';
    // include 'pds-modal-work.php';
    // include 'pds-modal-voluntary.php';
    // include 'pds-modal-training.php';


    ?>   

    

       



</body>
</html>