<?php
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
  $execute_personal = $stmt_personal->execute();

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
  $execute_family = $stmt_family->execute();

  
  if ($execute_personal && $execute_family) {
      // Retrieve the education details from the JSON-encoded input
      $educationDetails = isset($_POST['education-details']) ? json_decode($_POST['education-details'], true) : array();
      $civilServiceDetails = isset($_POST['civil-service-details']) ? json_decode($_POST['civil-service-details'], true) : array();
      $workDetails = isset($_POST['work-details']) ? json_decode($_POST['work-details'], true) : array();
      $voluntaryDetails = isset($_POST['voluntary-details']) ? json_decode($_POST['voluntary-details'], true) : array();
      $trainingDetails = isset($_POST['training-details']) ? json_decode($_POST['training-details'], true) : array();
      $familyDetails = isset($_POST['family-details']) ? json_decode($_POST['family-details'], true) : array();


      // Insert education details into the database
      foreach ($educationDetails as $education) {
          $userID = $_SESSION['id'];
          $level = $education['level'];
          $schoolName = $education['schoolName'];
          $degree = $education['degree'];
          $fromDate = $education['fromDate'];
          $toDate = $education['toDate'];
          $units = $education['units'];
          $graduated = $education['graduated'];
          $honors = $education['honors'];

          $queryeducationDetails = "INSERT INTO `education_tb` (userid, level, schoolName, degree, fromDate, toDate, units, graduated, honors) VALUES ('$userID', '$level', '$schoolName', '$degree', '$fromDate', '$toDate', '$units', '$graduated', '$honors')";
          $sqleducationDetails = mysqli_query($con, $queryeducationDetails);

          if (!$sqleducationDetails) {
              die(mysqli_error($con));
          } else {           
              unset($_SESSION['educationDetails']);
          }
      }

      foreach ($civilServiceDetails as $service) {
          $userID = $_SESSION['id'];
          $career = $service['career'];
          $rating = $service['rating'];
          $examination = $service['examination'];
          $place = $service['place'];
          $number = $service['number'];
          $validity = $service['validity'];       

          $queryserviceDetails = "INSERT INTO `civil_service_tb` (userid, career, rating, examination, place, number, validity) VALUES ('$userID', '$career', '$rating', '$examination', '$place', '$number', '$validity')";
          $sqlserviceDetails = mysqli_query($con, $queryserviceDetails);

          if (!$sqlserviceDetails) {
              die(mysqli_error($con));
          } else {           
              unset($_SESSION['civilServiceDetails']);
          }
      }


      foreach ($workDetails as $work) {
          $userID = $_SESSION['id'];
          $workfrom = $work['workfrom'];
          $workto = $work['workto'];
          $department = $work['department'];
          $salary = $work['salary'];
          $paygrade = $work['paygrade'];
          $appointment = $work['appointment'];       
          $govservice = $work['govservice'];       

          $queryworkDetails = "INSERT INTO `work_experience_tb` (userid, work_from_date, work_to_date, department, salary, paygrade, appointment, gov_service) VALUES ('$userID', '$workfrom', '$workto', '$department', '$salary', '$paygrade', '$appointment', '$govservice')";
          $sqlworkDetails = mysqli_query($con, $queryworkDetails);

          if (!$sqlworkDetails) {
              die(mysqli_error($con));
          } else {            
              unset($_SESSION['civilServiceDetails']);
          }
      }

      foreach ($voluntaryDetails as $voluntary) {
          $userID = $_SESSION['id'];
          $organization = $voluntary['organization'];
          $voluntaryfrom = $voluntary['voluntaryfrom'];
          $voluntaryto = $voluntary['voluntaryto'];
          $hours = $voluntary['hours'];
          $position = $voluntary['position'];             

          $queryvoluntaryDetails = "INSERT INTO `voluntary_work_tb` (userid, organization, from_date, to_date, hours, position) VALUES ('$userID', '$organization', '$voluntaryfrom', '$voluntaryto', '$hours', '$position')";
          $sqlvoluntaryDetails = mysqli_query($con, $queryvoluntaryDetails);

          if (!$sqlvoluntaryDetails) {
              die(mysqli_error($con));
          } else {            
              unset($_SESSION['voluntaryDetails']);
          }
      }

      foreach ($trainingDetails as $training) {
          $userID = $_SESSION['id'];
          $title = $training['title'];
          $trainingfrom = $training['trainingfrom'];
          $trainingto = $training['trainingto'];
          $duration = $training['duration'];
          $type = $training['type'];             
          $sponsor = $training['sponsor'];             

          $querytrainingDetails = "INSERT INTO `training_programs_tb` (userid, title, training_from_date, training_to_date, duration, type, sponsor) VALUES ('$userID', '$title', '$trainingfrom', '$trainingto', '$duration', '$type', '$sponsor')";
          $sqltrainingDetails = mysqli_query($con, $querytrainingDetails);

          if (!$sqltrainingDetails) {
              die(mysqli_error($con));
          } else {            
              unset($_SESSION['trainingDetails']);
          }
      }
      foreach ($familyDetails as $family) {
          $userID = $_SESSION['id'];
          $childname = $family['childname'];
          $childbirth = $family['childbirth'];
                      

          $queryfamilyDetails = "INSERT INTO `family_children_tb` (userid, childname, childbirth) VALUES ('$userID', '$childname', '$childbirth')";
          $sqlfamilyDetails = mysqli_query($con, $queryfamilyDetails);

          if (!$sqlfamilyDetails) {
              die(mysqli_error($con));
          } else {            
              unset($_SESSION['familyDetails']);
          }
      }

      // Close the statements and database connection
      $stmt_personal->close();
      $stmt_family->close();
      $con->close();  
    } 
      
}

$familyDetails = isset($_SESSION['familyDetails']) ? $_SESSION['familyDetails'] : array();
$trainingDetails = isset($_SESSION['trainingDetails']) ? $_SESSION['trainingDetails'] : array();
$voluntaryDetails = isset($_SESSION['voluntaryDetails']) ? $_SESSION['voluntaryDetails'] : array();
$workDetails = isset($_SESSION['workDetails']) ? $_SESSION['workDetails'] : array();
$civilServiceDetails = isset($_SESSION['civilServiceDetails']) ? $_SESSION['civilServiceDetails'] : array();
$educationDetails = isset($_SESSION['educationDetails']) ? $_SESSION['educationDetails'] : array();
?>