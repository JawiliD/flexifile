<?php

require '../vendor/autoload.php'; // Include the PhpSpreadsheet library

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flexifile"; 


// Function to handle database connection with error handling
function connectToDatabase($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Function to validate and sanitize uploaded file
function validateAndSanitizeFile($file) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($file["name"]);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if it's a valid XLSX file
    if ($fileType != "xlsx") {
        return false; // Invalid file type
    }

    // Move the file to the upload directory
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        return $target_file;
    }

    return false; // File upload failed
}

// Function to insert data into a table with prepared statements
function insertDataIntoTable($conn, $sql, $data) {
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Dynamically bind parameters based on the data array
    $types = str_repeat('s', count($data));
    $stmt->bind_param($types, ...$data);

    if ($stmt->execute()) {
        $stmt->close(); // Close the statement
        return true;
    } else {
        die("Error inserting data: " . $stmt->error);
    }
}


// Check if a file was uploaded
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
    // Validate and sanitize the uploaded file
    $uploadedFile = validateAndSanitizeFile($_FILES['fileToUpload']);

    if ($uploadedFile) {
        // Load the uploaded Excel file
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($uploadedFile);

        // Establish a database connection
        $conn = connectToDatabase($servername, $username, $password, $dbname);

        function validateAndSanitizeInput($input) {
            // Remove leading/trailing white spaces
            $input = trim($input);
            
            // Use filter_var to validate and sanitize input
            $input = filter_var($input, FILTER_SANITIZE_STRING);
        
            return $input;
        }

        // Process the first sheet 'C1'
        $worksheet1 = $spreadsheet->getSheetByName('C1');

        // Define columns for the 'personalinfo_tb' table
        $personal_info_data = array(
            $userID,
            validateAndSanitizeInput($worksheet1->getCell('D10')->getValue()),  // surname
            validateAndSanitizeInput($worksheet1->getCell('D11')->getValue()),  // firstname
            validateAndSanitizeInput($worksheet1->getCell('D12')->getValue()),  // midname
            $worksheet1->getCell('L11')->getValue(),  // extension
            validateAndSanitizeInput($worksheet1->getCell('D13')->getValue()),  // birthday
            validateAndSanitizeInput($worksheet1->getCell('D15')->getValue()),  // birthplace
            validateAndSanitizeInput($worksheet1->getCell('D16')->getValue()),  // sex
            validateAndSanitizeInput($worksheet1->getCell('D17')->getValue()),  // civil_status
            validateAndSanitizeInput($worksheet1->getCell('D22')->getValue()),  // height
            validateAndSanitizeInput($worksheet1->getCell('D24')->getValue()),  // weight
            validateAndSanitizeInput($worksheet1->getCell('D25')->getValue()),  // bloodtype
            validateAndSanitizeInput($worksheet1->getCell('D27')->getValue()),  // gsis
            validateAndSanitizeInput($worksheet1->getCell('D29')->getValue()),  // pagibig
            validateAndSanitizeInput($worksheet1->getCell('D31')->getValue()),  // philhealth
            validateAndSanitizeInput($worksheet1->getCell('D32')->getValue()),  // sss
            validateAndSanitizeInput($worksheet1->getCell('D33')->getValue()),  // tin
            validateAndSanitizeInput($worksheet1->getCell('D34')->getValue()),  // agency_no
            validateAndSanitizeInput($worksheet1->getCell('J13')->getValue()),  // citizenship
            validateAndSanitizeInput($worksheet1->getCell('I17')->getValue()),  // residential_house_no
            validateAndSanitizeInput($worksheet1->getCell('L17')->getValue()),  // residential_street
            validateAndSanitizeInput($worksheet1->getCell('I19')->getValue()),  // residential_subdivision
            validateAndSanitizeInput($worksheet1->getCell('L19')->getValue()),  // residential_barangay
            validateAndSanitizeInput($worksheet1->getCell('I22')->getValue()),  // residential_municipality
            validateAndSanitizeInput($worksheet1->getCell('L22')->getValue()),  // residential_province
            validateAndSanitizeInput($worksheet1->getCell('I24')->getValue()),  // residential_zipcode
            validateAndSanitizeInput($worksheet1->getCell('I25')->getValue()),  // permanent_house_no
            validateAndSanitizeInput($worksheet1->getCell('L25')->getValue()),  // permanent_street
            validateAndSanitizeInput($worksheet1->getCell('I27')->getValue()),  // permanent_subdivision
            validateAndSanitizeInput($worksheet1->getCell('L27')->getValue()),  // permanent_barangay
            validateAndSanitizeInput($worksheet1->getCell('I29')->getValue()),  // permanent_municipality
            validateAndSanitizeInput($worksheet1->getCell('L29')->getValue()),  // permanent_province
            validateAndSanitizeInput($worksheet1->getCell('I31')->getValue()),  // permanent_zipcode
            validateAndSanitizeInput($worksheet1->getCell('I32')->getValue()),  // telephone
            validateAndSanitizeInput($worksheet1->getCell('I33')->getValue()),  // mobile_no
            validateAndSanitizeInput($worksheet1->getCell('I34')->getValue())   // email
        );
        

        $rowNumbersChildren = [37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48]; // Update this array as needed

        // Define arrays for children's data
        $children_names = [];
        $date_of_births = [];
        
        foreach ($rowNumbersChildren as $rowNumber) {
            // Fetch data from the Excel worksheet for the current row
            $children_names[] = $worksheet1->getCell("I$rowNumber")->getValue();
            $date_of_births[] = $worksheet1->getCell("M$rowNumber")->getValue();
        }
        
        // Prepare the data for insertion into the family_children_tb
        $familychildren_data = [];
        foreach ($children_names as $key => $childName) {
            // Check if both childName and childbirth are not empty
            if (!empty($childName) && !empty($date_of_births[$key])) {
                $familychildren_data[] = [
                    $userID,
                    validateAndSanitizeInput($childName),
                    validateAndSanitizeInput($date_of_births[$key])
                ];
            }
        }
        
        // Define the SQL statement
        $family_children_tb_sql = "INSERT INTO family_children_tb (userid, childname, childbirth) VALUES (?, ?, ?)";
        
        // Loop through the data and insert it into the database
        foreach ($familychildren_data as $childData) {
            if (insertDataIntoTable($conn, $family_children_tb_sql, $childData)) {
                // Insertion successful
            } else {
                // Insertion failed
                echo " " . $conn->error;
            }
        }

        $family_background_data = array(
            $userID,
            validateAndSanitizeInput($worksheet1->getCell('D36')->getValue()),  // spouse_surname
            validateAndSanitizeInput($worksheet1->getCell('D37')->getValue()),  // spouse_firstname
            validateAndSanitizeInput($worksheet1->getCell('D38')->getValue()),  // spouse_middlename
            validateAndSanitizeInput($worksheet1->getCell('D39')->getValue()),  // occupation
            validateAndSanitizeInput($worksheet1->getCell('D40')->getValue()),  // employer
            validateAndSanitizeInput($worksheet1->getCell('D41')->getValue()),  // business address
            validateAndSanitizeInput($worksheet1->getCell('D42')->getValue()),  // telephone no
            validateAndSanitizeInput($worksheet1->getCell('G37')->getValue()),  // spouse_extension
            validateAndSanitizeInput($worksheet1->getCell('D43')->getValue()),  // father_surname
            validateAndSanitizeInput($worksheet1->getCell('D44')->getValue()),  // father_firstname
            validateAndSanitizeInput($worksheet1->getCell('D45')->getValue()),  // father_middlename
            validateAndSanitizeInput($worksheet1->getCell('G44')->getValue()),  // father_name_extension
            validateAndSanitizeInput($worksheet1->getCell('D47')->getValue()),  // mother_surname
            validateAndSanitizeInput($worksheet1->getCell('D48')->getValue()),  // mother_firstname
            validateAndSanitizeInput($worksheet1->getCell('D49')->getValue())   // mother_middlename
        );
        

        $rowNumbersEduc = [54, 55, 56, 57, 58, 59, 60, 61]; // Update this array as needed

        // Define arrays for educational data
        $educ_level = [];
        $educ_schoolname = [];
        $educ_degree = [];
        $educ_from = [];
        $educ_to = [];
        $educ_unit = [];
        $educ_graduate = [];
        $educ_honor = [];

        foreach ($rowNumbersEduc as $rowNumber2) {
            // Fetch data from the Excel worksheet for the current row
            $educ_level[] = validateAndSanitizeInput($worksheet1->getCell("B$rowNumber2")->getValue());
            $educ_schoolname[] = validateAndSanitizeInput($worksheet1->getCell("D$rowNumber2")->getValue());
            $educ_degree[] = validateAndSanitizeInput($worksheet1->getCell("G$rowNumber2")->getValue());
            $educ_from[] = validateAndSanitizeInput($worksheet1->getCell("J$rowNumber2")->getValue());
            $educ_to[] = validateAndSanitizeInput($worksheet1->getCell("K$rowNumber2")->getValue());
            $educ_unit[] = validateAndSanitizeInput($worksheet1->getCell("L$rowNumber2")->getValue());
            $educ_graduate[] = validateAndSanitizeInput($worksheet1->getCell("M$rowNumber2")->getValue());
            $educ_honor[] = validateAndSanitizeInput($worksheet1->getCell("N$rowNumber2")->getValue());
        }

        // Prepare the data for insertion into the education_tb
        $education_data = [];
        foreach ($educ_level as $key => $level) {
            if (!empty($level) && !empty($educ_honor[$key]) && !empty($educ_unit[$key])) {
                $education_data[] = [
                    $userID,
                    $level,
                    $educ_schoolname[$key],
                    $educ_degree[$key],
                    $educ_from[$key],
                    $educ_to[$key],
                    $educ_unit[$key],
                    $educ_graduate[$key],
                    $educ_honor[$key]
                ];
            }
        }

        // Define the SQL statement
        $education_tb_sql = "INSERT INTO education_tb (
            userid,
            level,
            schoolName,
            degree,
            fromDate,
            toDate,
            units,
            graduated,
            honors
        ) VALUES (?,?,?,?,?,?,?,?,?)";

        // Loop through the data and insert it into the database
        foreach ($education_data as $educData) {
            if (insertDataIntoTable($conn, $education_tb_sql, $educData)) {
                // Insertion successful
            } else {
                // Insertion failed
                echo "Insertion into education_tb failed: " . $conn->error;
            }
        }

        

        function setDefaultValues(&$data) {
            foreach (array_keys($data) as $key) {
                if ($data[$key] === null) {
                    $data[$key] = ''; // Set a default value (an empty string) for NULL values
                }
            }
        }
        
        // Call the function for each data section
        setDefaultValues($personal_info_data);
        setDefaultValues($family_background_data);

        // Define SQL query for 'personalinfo_tb'
        $personal_info_tb_sql = "INSERT INTO personal_info_tb (
            userid,firstname,surname, midname,extension, birthday, birthplace, sex, civil_status, height, weight,
            bloodtype, gsis, pagibig, philhealth, sss, tin, agency_no, citizenship, residential_house_no, residential_street, 
            residential_subdivision, residential_barangay, residential_municipality, residential_province, residential_zipcode,
            permanent_house_no, permanent_street, permanent_subdivision, permanent_barangay, permanent_municipality, permanent_province, 
            permanent_zipcode,telephone,email, mobile_no
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        // Prepare statement and insert data into 'personalinfo_tb'
        if (insertDataIntoTable($conn, $personal_info_tb_sql, $personal_info_data)) {
            echo "";
        }
        $family_background_tb_sql = "INSERT INTO family_background_tb (
            userid,spouse_surname, spouse_firstname, spouse_midname,occupation, employer,
            business_address, telephone_no, spouse_extension,
            father_surname, father_firstname, father_midname, father_extension, mother_surname, mother_firstname, mother_midname
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        
        // Prepare statement and insert data into 'backgroundfam_tb'
        if (insertDataIntoTable($conn, $family_background_tb_sql, $family_background_data)) {
            echo "";
        }
        // Process the second sheet 'C2'
        $worksheet2 = $spreadsheet->getSheetByName('C2');



        $rowNumbersCs = [5, 6, 7, 8, 9, 10, 11]; // Update this array as needed

        // Define arrays for civil service data
        $cs_career = [];
        $cs_rating = [];
        $cs_examination = [];
        $cs_place = [];
        $cs_number = [];
        $cs_validity = [];

        foreach ($rowNumbersCs as $rowNumber3) {
            // Fetch data from the Excel worksheet for the current row
            $cs_career[] = validateAndSanitizeInput($worksheet2->getCell("A$rowNumber3")->getValue());
            $cs_rating[] = validateAndSanitizeInput($worksheet2->getCell("F$rowNumber3")->getValue());
            $cs_examination[] = validateAndSanitizeInput($worksheet2->getCell("G$rowNumber3")->getValue());
            $cs_place[] = validateAndSanitizeInput($worksheet2->getCell("I$rowNumber3")->getValue());
            $cs_number[] = validateAndSanitizeInput($worksheet2->getCell("L$rowNumber3")->getValue());
            $cs_validity[] = validateAndSanitizeInput($worksheet2->getCell("M$rowNumber3")->getValue());
        }

        // Prepare the data for insertion into the civil_service_tb
        $civilservice_data = [];
        foreach ($cs_career as $key => $career) {
            if (!empty($career) && !empty($cs_rating[$key]) && !empty($cs_examination[$key]) && !empty($cs_place[$key]) && !empty($cs_number[$key]) && !empty($cs_validity[$key])) {
                $civilservice_data[] = [
                    $userID,
                    $career,
                    $cs_rating[$key],
                    $cs_examination[$key],
                    $cs_place[$key],
                    $cs_number[$key],
                    $cs_validity[$key]
                ];
            }
        }

        // Define the SQL statement
        $civil_service_tb_sql = "INSERT INTO civil_service_tb (
            userid, career, rating, examination, place, number, validity
        ) VALUES (?,?,?,?,?,?,?)";

        // Loop through the data and insert it into the database
        foreach ($civilservice_data as $csData) {
            if (insertDataIntoTable($conn, $civil_service_tb_sql, $csData)) {
                // Insertion successful
            } else {
                // Insertion failed
                echo "Insertion into civil_service_tb failed: " . $conn->error;
            }
        }


        $rowNumbersWork = [18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46]; // Update this array as needed

        // Define arrays for work experience data
        $work_from = [];
        $work_to = [];
        $work_title = [];
        $work_department = [];
        $work_salary = [];
        $work_paygrade = [];
        $work_appointment = [];
        $work_govservice = [];
        
        foreach ($rowNumbersWork as $rowNumber4) {
            // Fetch data from the Excel worksheet for the current row
            $work_from[] = validateAndSanitizeInput($worksheet2->getCell("A$rowNumber4")->getValue());
            $work_to[] = validateAndSanitizeInput($worksheet2->getCell("C$rowNumber4")->getValue());
            $work_title[] = validateAndSanitizeInput($worksheet2->getCell("D$rowNumber4")->getValue());
            $work_department[] = validateAndSanitizeInput($worksheet2->getCell("G$rowNumber4")->getValue());
            $work_salary[] = validateAndSanitizeInput($worksheet2->getCell("J$rowNumber4")->getValue());
            $work_paygrade[] = validateAndSanitizeInput($worksheet2->getCell("K$rowNumber4")->getValue());
            $work_appointment[] = validateAndSanitizeInput($worksheet2->getCell("L$rowNumber4")->getValue());
            $work_govservice[] = validateAndSanitizeInput($worksheet2->getCell("M$rowNumber4")->getValue());
        }
        
        // Prepare the data for insertion into the work_experience_tb
        $workexperience_data = [];
        foreach ($work_from as $key => $work_from_date) {
            if (!empty($work_from_date) && !empty($work_to[$key]) && !empty($work_title[$key]) && !empty($work_department[$key])
             && !empty($work_salary[$key]) && !empty($work_paygrade[$key]) && !empty($work_appointment[$key]) && !empty($work_govservice[$key])) {
                $workexperience_data[] = [
                    $userID,
                    $work_from_date,
                    $work_to[$key],
                    $work_title[$key],
                    $work_department[$key],
                    $work_salary[$key],
                    $work_paygrade[$key],
                    $work_appointment[$key],
                    $work_govservice[$key]
                ];
            }
        }
        
        // Define the SQL statement
        $work_experience_tb_sql = "INSERT INTO work_experience_tb (
            userid,
            work_from_date,
            work_to_date,
            position_title,
            department,
            salary,
            paygrade,
            appointment,
            gov_service
        ) VALUES (?,?,?,?,?,?,?,?,?)";
        
        // Loop through the data and insert it into the database
        foreach ($workexperience_data as $workData) {
            if (insertDataIntoTable($conn, $work_experience_tb_sql, $workData)) {
                // Insertion successful
            } else {
                // Insertion failed
                echo "Insertion into work_experience_tb failed: " . $conn->error;
            }
        }
        

        // Process the third sheet 'C3'
        $worksheet3 = $spreadsheet->getSheetByName('C3');
        // Extract data from 'C3'


        $rowNumbersVoluntary = [6, 7, 8]; // Update this array as needed

        // Define arrays for voluntary work data
        $voluntary_organization = [];
        $voluntary_from = [];
        $voluntary_to = [];
        $voluntary_hours = [];
        $voluntary_position = [];

        foreach ($rowNumbersVoluntary as $rowNumber4) {
            // Fetch data from the Excel worksheet for the current row
            $voluntary_organization[] = validateAndSanitizeInput($worksheet3->getCell("A$rowNumber4")->getValue());
            $voluntary_from[] = validateAndSanitizeInput($worksheet3->getCell("E$rowNumber4")->getValue());
            $voluntary_to[] = validateAndSanitizeInput($worksheet3->getCell("F$rowNumber4")->getValue());
            $voluntary_hours[] = validateAndSanitizeInput($worksheet3->getCell("G$rowNumber4")->getValue());
            $voluntary_position[] = validateAndSanitizeInput($worksheet3->getCell("H$rowNumber4")->getValue());
        }

        // Prepare the data for insertion into the voluntary_work_tb
        $voluntarywork_data = [];
        foreach ($voluntary_organization as $key => $organization) {
            if (!empty($organization) && !empty($voluntary_from[$key]) && !empty($voluntary_to[$key]) && !empty($voluntary_hours[$key])
            && !empty($voluntary_position[$key])) {
                $voluntarywork_data[] = [
                    $userID,
                    $organization,
                    $voluntary_from[$key],
                    $voluntary_to[$key],
                    $voluntary_hours[$key],
                    $voluntary_position[$key]
                ];
            }
        }

        // Define the SQL statement
        $voluntary_work_tb_sql = "INSERT INTO voluntary_work_tb (
            userid,
            organization,
            from_date,
            to_date,
            hours,
            position
        ) VALUES (?,?,?,?,?,?)";

        // Loop through the data and insert it into the database
        foreach ($voluntarywork_data as $voluntaryData) {
            if (insertDataIntoTable($conn, $voluntary_work_tb_sql, $voluntaryData)) {
                // Insertion successful
            } else {
                // Insertion failed
                echo "Insertion into voluntary_work_tb failed: " . $conn->error;
            }
        }


        $rowNumbersProgram = [15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43]; // Update this array as needed

        // Define arrays for training program data
        $program_title = [];
        $program_from = [];
        $program_to = [];
        $program_duration = [];
        $program_type = [];
        $program_sponsor = [];

        foreach ($rowNumbersProgram as $rowNumber4) {
            // Fetch data from the Excel worksheet for the current row
            $program_title[] = validateAndSanitizeInput($worksheet3->getCell("A$rowNumber4")->getValue());
            $program_from[] = validateAndSanitizeInput($worksheet3->getCell("E$rowNumber4")->getValue());
            $program_to[] = validateAndSanitizeInput($worksheet3->getCell("F$rowNumber4")->getValue());
            $program_duration[] = validateAndSanitizeInput($worksheet3->getCell("G$rowNumber4")->getValue());
            $program_type[] = validateAndSanitizeInput($worksheet3->getCell("H$rowNumber4")->getValue());
            $program_sponsor[] = validateAndSanitizeInput($worksheet3->getCell("I$rowNumber4")->getValue());
        }

        // Prepare the data for insertion into the training_programs_tb
        $trainingprogram_data = [];
        foreach ($program_title as $key => $title) {
            if (!empty($title) && !empty($program_from[$key]) && !empty($program_to[$key]) && !empty($program_duration[$key])
            && !empty($program_type[$key]) && !empty($program_sponsor[$key])) {
                $trainingprogram_data[] = [
                    $userID,
                    $title,
                    $program_from[$key],
                    $program_to[$key],
                    $program_duration[$key],
                    $program_type[$key],
                    $program_sponsor[$key]
                ];
            }
        }

        // Define the SQL statement
        $training_programs_tb_sql = "INSERT INTO training_programs_tb (
            userid,
            title,
            training_from_date,
            training_to_date,
            duration,
            type,
            sponsor
        ) VALUES (?,?,?,?,?,?,?)";

        // Loop through the data and insert it into the database
        foreach ($trainingprogram_data as $trainingData) {
            if (insertDataIntoTable($conn, $training_programs_tb_sql, $trainingData)) {
                // Insertion successful
            } else {
                // Insertion failed
                echo "Insertion into training_programs_tb failed: " . $conn->error;
            }
        }

        $rowNumbersOther = [47, 48 , 49, 50 , 51]; // Update this array as needed

        // Define arrays for other information data
        $other_hobbies = [];
        $other_recognition = [];
        $other_association = [];

        foreach ($rowNumbersOther as $rowNumber5) {
            // Fetch data from the Excel worksheet for the current row
            $other_hobbies[] = validateAndSanitizeInput($worksheet3->getCell("A$rowNumber5")->getValue());
            $other_recognition[] = validateAndSanitizeInput($worksheet3->getCell("C$rowNumber5")->getValue());
            $other_association[] = validateAndSanitizeInput($worksheet3->getCell("I$rowNumber5")->getValue());
        }

        // Prepare the data for insertion into the other_info_tb
        $otherinfo_data = [];
        foreach ($other_hobbies as $key => $skills_hobbies) {
            if (!empty($skills_hobbies) && !empty($other_recognition[$key]) && !empty($other_association[$key])) {
                $otherinfo_data[] = [
                    $userID,
                    $skills_hobbies,
                    $other_recognition[$key],
                    $other_association[$key]
                ];
            }
        }

        // Define the SQL statement
        $other_info_tb_sql = "INSERT INTO other_info_tb (
            userid,
            skills_hobbies,
            recognition,
            association
        ) VALUES (?,?,?,?)";

        // Loop through the data and insert it into the database
        foreach ($otherinfo_data as $otherData) {
            if (insertDataIntoTable($conn, $other_info_tb_sql, $otherData)) {
                // Insertion successful
            } else {
                // Insertion failed
                echo "Insertion into other_info_tb failed: " . $conn->error;
            }
        }

        // Close the database connection
        $conn->close();
        } else {
            echo "Invalid file or file upload failed.";
        }


   

                
    echo "<script>alert('File uploaded succesfully')</script>";

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
?>
