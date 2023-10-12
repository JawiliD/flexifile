<?php
$userID = $_SESSION['id'];
if (isset($_POST['submit'])) { 
   
  // Prepare the personal info query
  $querypersonal = "INSERT INTO `personal_info_tb` (userid, firstname, surname, midname, extension, birthday, birthplace, sex, civil_status, height, weight, bloodtype, gsis, philhealth, sss, tin, agency_no, citizenship, residential_house_no, residential_street, residential_subdivision, residential_barangay, residential_municipality, residential_province, residential_zipcode, permanent_house_no, permanent_street, permanent_subdivision, permanent_barangay, permanent_municipality, permanent_province, permanent_zipcode, telephone, email, mobile_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
  // Bind parameters
  $stmt_personal = $con->prepare($querypersonal);
  $stmt_personal->bind_param("issssssssssssssssssssssssssssssssss", $userID, $firstname, $surname, $midname, $extension, $birthday, $birthplace, $sex, $civilStatus, $height, $weight, $bloodtype, $gsis, $philhealth, $sss, $tin, $agencyNo, $citizenship, $residentialHouseNo, $residentialStreet, $residentialSubdivision, $residentialBarangay, $residentialMunicipality, $residentialProvince, $residentialZipcode, $permanentHouseNo, $permanentStreet, $permanentSubdivision, $permanentBarangay, $permanentMunicipality, $permanentProvince, $permanentZipcode, $telephone, $email, $mobileNo);

  // Set parameter values

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
  $residentialHouseNo = $_POST['residentialHouseNo'];
  $residentialStreet = $_POST['residentialStreet'];
  $residentialSubdivision = $_POST['residentialSubdivision'];
  $residentialBarangay = $_POST['residentialBarangay'];
  $residentialMunicipality = $_POST['residentialMunicipality'];
  $residentialProvince = $_POST['residentialProvince'];
  $residentialZipcode = $_POST['residentialZipcode'];
  $permanentHouseNo = $_POST['permanentHouseNo'];
  $permanentStreet = $_POST['permanentStreet'];
  $permanentSubdivision = $_POST['permanentSubdivision'];
  $permanentBarangay = $_POST['permanentBarangay'];
  $permanentMunicipality = $_POST['permanentMunicipality'];
  $permanentProvince = $_POST['permanentProvince'];
  $permanentZipcode = $_POST['permanentZipcode'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $mobileNo = $_POST['mobileNo'];


  // Execute the personal info query
  $execute_personal = $stmt_personal->execute();

  // Prepare the family background query
  $queryfamily = "INSERT INTO `family_background_tb` (userid, spouse_surname, spouse_firstname, spouse_midname, spouse_extension, occupation, employer, business_address, telephone_no, father_surname, father_firstname, father_midname, father_extension, mother_surname, mother_firstname, mother_midname) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt_family = $con->prepare($queryfamily);

  // Bind parameters
  $stmt_family->bind_param('isssssssssssssss', $userID, $spouseSurname, $spouseFirstname, $spouseMidname, $spouseExtension, $occupation, $employer, $business, $telephoneNo, $fatherSurname, $fatherFirstname, $fatherMidname, $fatherExtension, $motherSurname, $motherFirstname, $motherMidname);


  // Set parameter values

  $spouseSurname = $_POST['spouseSurname'];
  $spouseFirstname = $_POST['spouseFirstname'];
  $spouseMidname = $_POST['spouseMidname'];
  $spouseExtension = $_POST['spouseExtension'];
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
      $otherDetails = isset($_POST['other-details']) ? json_decode($_POST['other-details'], true) : array();
      $familyDetails = isset($_POST['family-details']) ? json_decode($_POST['family-details'], true) : array();


      // Insert education details into the database
      foreach ($otherDetails as $others) {
        // $userID = $_SESSION['id'];
        $skills = $others['skills'];
        $recognition = $others['recognition'];
        $association = $others['association'];       
    
        // Create a prepared statement
        $queryotherDetails = "INSERT INTO `other_info_tb` (userid, skills_hobbies, recognition, association) VALUES (?, ?, ?, ?)";
        $stmt_other = mysqli_prepare($con, $queryotherDetails);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt_other, "isss", $userID, $skills, $recognition, $association);
    
        // Execute the statement
        $result_other = mysqli_stmt_execute($stmt_other);
    
        if (!$result_other) {
            die(mysqli_error($con));
        } else {
            unset($_SESSION['otherDetails']);
        }
    
        
       
    }

    foreach ($educationDetails as $education) {
        // $userID = $_SESSION['id'];
        $level = $education['level'];
        $schoolName = $education['schoolName'];
        $degree = $education['degree'];
        $fromDate = $education['fromDate'];
        $toDate = $education['toDate'];
        $units = $education['units'];
        $graduated = $education['graduated'];
        $honors = $education['honors'];
    
        // Create a prepared statement
        $queryeducationDetails = "INSERT INTO `education_tb` (userid, level, schoolName, degree, fromDate, toDate, units, graduated, honors) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_education = mysqli_prepare($con, $queryeducationDetails);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt_education, "issssssss", $userID, $level, $schoolName, $degree, $fromDate, $toDate, $units, $graduated, $honors);
    
        // Execute the statement
        $result_education = mysqli_stmt_execute($stmt_education);
    
        if (!$result_education) {
            die(mysqli_error($con));
        } else {
            unset($_SESSION['educationDetails']);
        }
    
        
       
    }
    
    

    foreach ($civilServiceDetails as $service) {
       
        $career = $service['career'];
        $rating = $service['rating'];
        $examination = $service['examination'];
        $place = $service['place'];
        $number = $service['number'];
        $validity = $service['validity'];
    
        // Create a prepared statement
        $queryserviceDetails = "INSERT INTO `civil_service_tb` (userid, career, rating, examination, place, number, validity) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_service = mysqli_prepare($con, $queryserviceDetails);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt_service, "issssss", $userID, $career, $rating, $examination, $place, $number, $validity);
    
        // Execute the statement
        $result_service = mysqli_stmt_execute($stmt_service);
    
        if (!$result_service) {
            die(mysqli_error($con));
        } else {
            unset($_SESSION['civilServiceDetails']);
        }
    
        
        
    }
    


    foreach ($workDetails as $work) {
        
        $workfrom = $work['workfrom'];
        $workto = $work['workto'];
        $department = $work['department'];
        $salary = $work['salary'];
        $position = $work['position'];
        $paygrade = $work['paygrade'];
        $appointment = $work['appointment'];
        $govservice = $work['govservice'];
    
        // Create a prepared statement
        $queryworkDetails = "INSERT INTO `work_experience_tb` (userid, work_from_date, work_to_date, position_title department, salary, paygrade, appointment, gov_service) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_work = mysqli_prepare($con, $queryworkDetails);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt_work, "isssdsss", $userID, $workfrom, $workto,$position, $department, $salary, $paygrade, $appointment, $govservice);
    
        // Execute the statement
        $result_work = mysqli_stmt_execute($stmt_work);
    
        if (!$result_work) {
            die(mysqli_error($con));
        } else {
            unset($_SESSION['workDetails']);
        }
    
        
        
    }
    

    foreach ($voluntaryDetails as $voluntary) {
     
        $organization = $voluntary['organization'];
        $voluntaryfrom = $voluntary['voluntaryfrom'];
        $voluntaryto = $voluntary['voluntaryto'];
        $hours = $voluntary['hours'];
        $position = $voluntary['position'];
    
        // Create a prepared statement
        $queryvoluntaryDetails = "INSERT INTO `voluntary_work_tb` (userid, organization, from_date, to_date, hours, position) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt_voluntary = mysqli_prepare($con, $queryvoluntaryDetails);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt_voluntary, "isssds", $userID, $organization, $voluntaryfrom, $voluntaryto, $hours, $position);
    
        // Execute the statement
        $result_voluntary = mysqli_stmt_execute($stmt_voluntary);
    
        if (!$result_voluntary) {
            die(mysqli_error($con));
        } else {
            unset($_SESSION['voluntaryDetails']);
        }
    
      
       
    }
    

    foreach ($trainingDetails as $training) {
       
        $title = $training['title'];
        $trainingfrom = $training['trainingfrom'];
        $trainingto = $training['trainingto'];
        $duration = $training['duration'];
        $type = $training['type'];
        $sponsor = $training['sponsor'];
    
        // Create a prepared statement
        $querytrainingDetails = "INSERT INTO `training_programs_tb` (userid, title, training_from_date, training_to_date, duration, type, sponsor) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_training = mysqli_prepare($con, $querytrainingDetails);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt_training, "isssdss", $userID, $title, $trainingfrom, $trainingto, $duration, $type, $sponsor);
    
        // Execute the statement
        $result_training = mysqli_stmt_execute($stmt_training);
    
        if (!$result_training) {
            die(mysqli_error($con));
        } else {
            unset($_SESSION['trainingDetails']);
        }
    
       
        
    }
    
    foreach ($familyDetails as $family) {
       
        $childname = $family['childname'];
        $childbirth = $family['childbirth'];
    
        // Create a prepared statement
        $queryfamilyDetails = "INSERT INTO `family_children_tb` (userid, childname, childbirth) VALUES (?, ?, ?)";
        $stmt_children = mysqli_prepare($con, $queryfamilyDetails);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt_children, "iss", $userID, $childname, $childbirth);
    
        // Execute the statement
        $result_children = mysqli_stmt_execute($stmt_children);
    
        if (!$result_children) {
            die(mysqli_error($con));
        } else {
            unset($_SESSION['familyDetails']);
        }
    
        
    

      // Close the statements and database connection
      $stmt_personal->close();
      $stmt_family->close(); 
      mysqli_stmt_close($stmt_children);
      mysqli_stmt_close($stmt_training);
      mysqli_stmt_close($stmt_voluntary);
      mysqli_stmt_close($stmt_work);
      mysqli_stmt_close($stmt_service);
      mysqli_stmt_close($stmt_education);
      mysqli_stmt_close($stmt_other);
      

    } 

      //notification
      
      $queryNotification = "INSERT INTO `notification_tb` (fullname, faculty_type, date_upload, updated_part) VALUES (?, ?, ?, ?)";

      $stmt_notification = $con->prepare($queryNotification);

      $stmt_notification->bind_param('ssss', $fullname, $facultyType, $date, $section);

      $fullname = $_SESSION['fullname'];
      date_default_timezone_set("Asia/Manila");
      $date = date("Y-m-d");
      $section = "uploaded his/her Personal Data sheet";
      $facultyType = "ITE Faculty/GE faculty";

      $execute_notification = $stmt_notification->execute();

      if (!$execute_notification){        
        echo "Error: " . $stmt_notification->error;
      }else{
        $stmt_notification->close();        
      }
      
    } 
      
}

$otherDetails = isset($_SESSION['otherDetails']) ? $_SESSION['otherDetails'] : array();
$familyDetails = isset($_SESSION['familyDetails']) ? $_SESSION['familyDetails'] : array();
$trainingDetails = isset($_SESSION['trainingDetails']) ? $_SESSION['trainingDetails'] : array();
$voluntaryDetails = isset($_SESSION['voluntaryDetails']) ? $_SESSION['voluntaryDetails'] : array();
$workDetails = isset($_SESSION['workDetails']) ? $_SESSION['workDetails'] : array();
$civilServiceDetails = isset($_SESSION['civilServiceDetails']) ? $_SESSION['civilServiceDetails'] : array();
$educationDetails = isset($_SESSION['educationDetails']) ? $_SESSION['educationDetails'] : array();
?>