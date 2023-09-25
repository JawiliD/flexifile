<?php


require 'vendor/autoload.php'; // Include the PhpSpreadsheet library

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Check if a file was uploaded
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if it's a valid XLSX file
    if ($fileType != "xlsx") {
        echo "Only XLSX files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk) {
        // Upload the file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Load the uploaded Excel file
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($target_file);
            $worksheet = $spreadsheet->getActiveSheet();

            $children_names = array(
                'child1' => $worksheet->getCell('I37')->getValue(),
                'child2' => $worksheet->getCell('I38')->getValue(),
                'child3' => $worksheet->getCell('I39')->getValue(),
                'child4' => $worksheet->getCell('I40')->getValue(),
                'child5' => $worksheet->getCell('I41')->getValue(),
                'child6' => $worksheet->getCell('I42')->getValue(),
                'child7' => $worksheet->getCell('I43')->getValue(),
                'child8' => $worksheet->getCell('I44')->getValue(),
                'child9' => $worksheet->getCell('I45')->getValue(),
                'child10' => $worksheet->getCell('I46')->getValue(),
                'child11' => $worksheet->getCell('I47')->getValue(),
                'child12' => $worksheet->getCell('I48')->getValue()
            );
            foreach ($children_names as &$name) {
                if ($name === null) {
                    $name = '';
                }
            }
            unset($name);
            $children_name = implode(', ', $children_names);

            $date_of_births = array(
                'date1' => $worksheet->getCell('M37')->getValue(),
                'date2' => $worksheet->getCell('M38')->getValue(),
                'date3' => $worksheet->getCell('M39')->getValue(),
                'date4' => $worksheet->getCell('M40')->getValue(),
                'date5' => $worksheet->getCell('M41')->getValue(),
                'date6' => $worksheet->getCell('M42')->getValue(),
                'date7' => $worksheet->getCell('M43')->getValue(),
                'date8' => $worksheet->getCell('M44')->getValue(),
                'date9' => $worksheet->getCell('M45')->getValue(),
                'date10' => $worksheet->getCell('M46')->getValue(),
                'date11' => $worksheet->getCell('M47')->getValue(),
                'date12' => $worksheet->getCell('M48')->getValue()
            );
            foreach ($date_of_births as &$date) {
                if ($date === null) {
                    $date = '';
                }
            }
            unset($date);
            $date_of_childbirth = implode(', ', $date_of_births);

            $college_list = array(
                'college1' => $worksheet->getCell('D57')->getValue(),
                'college2' => $worksheet->getCell('D58')->getValue(),
            );
            foreach ($college_list as &$college) {
                if ($college === null) {
                    $college = '';
                }
            }
            unset($college);
            $name_of_school_college = implode(', ', $college_list);

            $basicEducdegree_list = array(
                'basiceduc1' => $worksheet->getCell('G57')->getValue(),
                'basiceduc2' => $worksheet->getCell('G58')->getValue(),
            );
            foreach ($basicEducdegree_list as &$educdegree) {
                if ($educdegree === null) {
                    $educdegree = '';
                }
            }
            unset($educdegree);
            $basiceduc_deg_course_college = implode(', ', $basicEducdegree_list);

            $periodAttendace_list = array(
                'from1' => $worksheet->getCell('J57')->getValue(),
                'from2' => $worksheet->getCell('J58')->getValue(),
            );
            foreach ($periodAttendace_list as &$attendfrom) {
                if ($attendfrom === null) {
                    $attendfrom = '';
                }
            }
            unset($attendfrom);
            $period_of_attendance_collegefrom = implode(', ', $periodAttendace_list);

            $periodAttendaceto_list = array(
                'to1' => $worksheet->getCell('K57')->getValue(),
                'to2' => $worksheet->getCell('K58')->getValue(),
            );
            foreach ($periodAttendaceto_list as &$attendto) {
                if ($attendto === null) {
                    $attendto = '';
                }
            }
            unset($attendto);
            $period_of_attendance_collegeto = implode(', ', $periodAttendaceto_list);
            
            $unitearnedcollege_list = array(
                'unit1' => $worksheet->getCell('L57')->getValue(),
                'unit2' => $worksheet->getCell('L58')->getValue(),
            );
            foreach ($unitearnedcollege_list as &$unit) {
                if ($unit === null) {
                    $unit = '';
                }
            }
            unset($unit);
            $college_unitearned = implode(', ', $unitearnedcollege_list);

            $yeargrad_list = array(
                'year1' => $worksheet->getCell('M57')->getValue(),
                'year2' => $worksheet->getCell('M58')->getValue(),
            );
            foreach ($yeargrad_list as &$yeargrad) {
                if ($yeargrad === null) {
                    $yeargrad = '';
                }
            }
            unset($yeargrad);
            $college_yeargrad = implode(', ', $yeargrad_list);


            $scholarAcad_list = array(
                'received1' => $worksheet->getCell('N57')->getValue(),
                'received2' => $worksheet->getCell('N58')->getValue(),
            );
            foreach ($scholarAcad_list as &$received) {
                if ($received === null) {
                    $received = '';
                }
            }
            unset($received);
            $college_scholar_acadhonor_recieved = implode(', ', $scholarAcad_list);


            $gradstudies_list = array(
                'graduateStudies1' => $worksheet->getCell('D59')->getValue(),
                'graduateStudies2' => $worksheet->getCell('D60')->getValue(),
                'graduateStudies3' => $worksheet->getCell('D61')->getValue(),
            );
            foreach ($gradstudies_list as &$graduate) {
                if ($graduate === null) {
                    $graduate = '';
                }
            }
            unset($graduate);
            $name_of_school_gradstudies = implode(', ', $gradstudies_list);

            $basicEducdegreeGrad_list = array(
                'basiceducGrad1' => $worksheet->getCell('G59')->getValue(),
                'basiceducGrad2' => $worksheet->getCell('G60')->getValue(),
                'basiceducGrad3' => $worksheet->getCell('G61')->getValue(),
            );
            foreach ($basicEducdegreeGrad_list as &$educdegreeGrad) {
                if ($educdegreeGrad === null) {
                    $educdegreeGrad = '';
                }
            }
            unset($educdegreeGrad);
            $basiceduc_deg_course_gradstudies = implode(', ', $basicEducdegreeGrad_list);

            $gradstudiesperiodAttendace_list = array(
                'gradstudiesfrom1' => $worksheet->getCell('J59')->getValue(),
                'gradstudiesfrom2' => $worksheet->getCell('J60')->getValue(),
                'gradstudiesfrom3' => $worksheet->getCell('J61')->getValue(),
            );
            foreach ($gradstudiesperiodAttendace_list as &$gradstudiesAttendfrom) {
                if ($gradstudiesAttendfrom === null) {
                    $gradstudiesAttendfrom = '';
                }
            }
            unset($gradstudiesAttendfrom);
            $period_of_attendance_gradstudiesfrom = implode(', ', $gradstudiesperiodAttendace_list);

            $gradstudiesperiodAttendaceto_list = array(
                'gradstudiesto1' => $worksheet->getCell('K59')->getValue(),
                'gradstudiesto2' => $worksheet->getCell('K60')->getValue(),
                'gradstudiesto3' => $worksheet->getCell('K61')->getValue(),
            );
            foreach ($gradstudiesperiodAttendaceto_list as &$gradstudiesAttendto) {
                if ($gradstudiesAttendto === null) {
                    $gradstudiesAttendto = '';
                }
            }
            unset($gradstudiesAttendto);
            $period_of_attendance_gradstudiesto = implode(', ', $gradstudiesperiodAttendaceto_list);
            
            $unitearnedGradstudies_list = array(
                'gradstudiesunit1' => $worksheet->getCell('L59')->getValue(),
                'gradstudiesunit2' => $worksheet->getCell('L60')->getValue(),
                'gradstudiesunit3' => $worksheet->getCell('L61')->getValue(),
            );
            foreach ($unitearnedGradstudies_list as &$gradstudiesUnit) {
                if ($gradstudiesUnit === null) {
                    $gradstudiesUnit = '';
                }
            }
            unset($gradstudiesUnit);
            $gradstudies_unitearned = implode(', ', $unitearnedGradstudies_list);

            $gradstudiesYeargrad_list = array(
                'gradstudiesyear1' => $worksheet->getCell('M59')->getValue(),
                'gradstudiesyear2' => $worksheet->getCell('M60')->getValue(),
                'gradstudiesyear3' => $worksheet->getCell('M61')->getValue(),
            );
            foreach ($gradstudiesYeargrad_list as &$yeargrad1) {
                if ($yeargrad1 === null) {
                    $yeargrad1 = '';
                }
            }
            unset($yeargrad1);
            $gradstudies_yeargrad = implode(', ', $gradstudiesYeargrad_list);


            $scholarAcad_list1 = array(
                'gradSreceived1' => $worksheet->getCell('N59')->getValue(),
                'gradSreceived2' => $worksheet->getCell('N60')->getValue(),
                'gradSreceived3' => $worksheet->getCell('N61')->getValue(),
            );
            foreach ($scholarAcad_list1 as &$received1) {
                if ($received1 === null) {
                    $received1 = '';
                }
            }
            unset($received1);
            $gradstudies_scholar_acadhonor_recieved = implode(', ', $scholarAcad_list1);

            // Extract other data
            $data = array(
                'surname' => $worksheet->getCell('D10')->getValue(),
                'first_name' => $worksheet->getCell('D11')->getValue(),
                'middle_name' => $worksheet->getCell('D12')->getValue(),
                'name_extension' => $worksheet->getCell('L11')->getValue(),
                'date_of_birth' => $worksheet->getCell('D13')->getValue(),
                'place_of_birth' => $worksheet->getCell('D15')->getValue(),
                'sex' => $worksheet->getCell('D16')->getValue(),
                'civil_status' => $worksheet->getCell('D17')->getValue(),
                'height' => $worksheet->getCell('D22')->getValue(),
                'weight' => $worksheet->getCell('D24')->getValue(),
                'blood_type' => $worksheet->getCell('D25')->getValue(),
                'gsis_id_no' => $worksheet->getCell('D27')->getValue(),
                'pagibig_id_no' => $worksheet->getCell('D29')->getValue(),
                'philhealth_no' => $worksheet->getCell('D31')->getValue(),
                'sss_no' => $worksheet->getCell('D32')->getValue(),
                'tin_no' => $worksheet->getCell('D33')->getValue(),
                'agency_emp_no' => $worksheet->getCell('D34')->getValue(),
                'citizenship' => $worksheet->getCell('J13')->getValue(),
                'resident_house_no' => $worksheet->getCell('I17')->getValue(),
                'resident_street' => $worksheet->getCell('L17')->getValue(),
                'resident_sub_vil' => $worksheet->getCell('I19')->getValue(),
                'resident_barangay' => $worksheet->getCell('L19')->getValue(),
                'resident_city_mul' => $worksheet->getCell('I22')->getValue(),
                'resident_province' => $worksheet->getCell('L22')->getValue(),
                'resident_zipcode' => $worksheet->getCell('I24')->getValue(),
                'permanent_house_no' => $worksheet->getCell('I25')->getValue(),
                'permanent_street' => $worksheet->getCell('L25')->getValue(),
                'permanent_sub_vil' => $worksheet->getCell('I27')->getValue(),
                'permanent_barangay' => $worksheet->getCell('L27')->getValue(),
                'permanent_city_mul' => $worksheet->getCell('I29')->getValue(),
                'permanent_province' => $worksheet->getCell('L29')->getValue(),
                'permanent_zipcode' => $worksheet->getCell('I31')->getValue(),
                'telephone_no' => $worksheet->getCell('I32')->getValue(),
                'mobile_no' => $worksheet->getCell('I33')->getValue(),
                'email_address' => $worksheet->getCell('I34')->getValue(),
                'spouse_surname' => $worksheet->getCell('D36')->getValue(),
                'spouse_firstname' => $worksheet->getCell('D37')->getValue(),
                'spouse_middlename' => $worksheet->getCell('D38')->getValue(),
                'spouse_occupation' => $worksheet->getCell('D39')->getValue(),
                'spouse_empname' => $worksheet->getCell('D40')->getValue(),
                'spouse_businessAdd' => $worksheet->getCell('D41')->getValue(),
                'spouse_telno' => $worksheet->getCell('D42')->getValue(),
                'spouse_extension' => $worksheet->getCell('G37')->getValue(),
                'children_name' => $children_name,
                'date_of_childbirth' => $date_of_childbirth,
                'father_surname' => $worksheet->getCell('D43')->getValue(),
                'father_firstname' => $worksheet->getCell('D44')->getValue(),
                'father_middlename' => $worksheet->getCell('D45')->getValue(),
                'father_name_extension' => $worksheet->getCell('G44')->getValue(),
                'mother_maiden_name' => $worksheet->getCell('D46')->getValue(),
                'mother_surname' => $worksheet->getCell('D47')->getValue(),
                'mother_firstname' => $worksheet->getCell('D48')->getValue(),
                'mother_middlename' => $worksheet->getCell('D49')->getValue(),
                'name_of_school_elem' => $worksheet->getCell('D54')->getValue(),
                'basiceduc_deg_course_elem' => $worksheet->getCell('G54')->getValue(),
                'period_of_attendance_elemfrom' => $worksheet->getCell('J54')->getValue(),
                'period_of_attendance_elemto' => $worksheet->getCell('K54')->getValue(),
                'elem_unitearned' => $worksheet->getCell('L54')->getValue(),
                'elem_yeargrad' => $worksheet->getCell('M54')->getValue(),
                'elem_scholar_acadhonor_recieved' => $worksheet->getCell('N54')->getValue(),
                'name_of_school_secondary' => $worksheet->getCell('D55')->getValue(),
                'basiceduc_deg_course_secondary' => $worksheet->getCell('G55')->getValue(),
                'period_of_attendance_secondaryfrom' => $worksheet->getCell('J55')->getValue(),
                'period_of_attendance_secondaryto' => $worksheet->getCell('K55')->getValue(),
                'secondary_unitearned' => $worksheet->getCell('L55')->getValue(),
                'secondary_yeargrad' => $worksheet->getCell('M55')->getValue(),
                'secondary_scholar_acadhonor_recieved' => $worksheet->getCell('N55')->getValue(),
                'name_of_school_voc' => $worksheet->getCell('D56')->getValue(),
                'basiceduc_deg_course_voc' => $worksheet->getCell('G56')->getValue(),
                'period_of_attendance_vocfrom' => $worksheet->getCell('J56')->getValue(),
                'period_of_attendance_vocto' => $worksheet->getCell('K56')->getValue(),
                'voc_unitearned' => $worksheet->getCell('L56')->getValue(),
                'voc_yeargrad' => $worksheet->getCell('M56')->getValue(),
                'voc_scholar_acadhonor_recieved' => $worksheet->getCell('N56')->getValue(),
                'name_of_school_college' => $name_of_school_college,
                'basiceduc_deg_course_college' => $basiceduc_deg_course_college,
                'period_of_attendance_collegefrom' => $period_of_attendance_collegefrom,
                'period_of_attendance_collegeto' => $period_of_attendance_collegeto,
                'college_unitearned' => $college_unitearned,
                'college_yeargrad' => $college_yeargrad,
                'college_scholar_acadhonor_recieved' => $college_scholar_acadhonor_recieved,
                'name_of_school_gradstudies' => $name_of_school_gradstudies,
                'basiceduc_deg_course_gradstudies' => $basiceduc_deg_course_gradstudies,
                'period_of_attendance_gradstudiesfrom' => $period_of_attendance_gradstudiesfrom,
                'period_of_attendance_gradstudiesto' => $period_of_attendance_gradstudiesto,
                'gradstudies_unitearned' => $gradstudies_unitearned,
                'gradstudies_yeargrad' => $gradstudies_yeargrad,
                'gradstudies_scholar_acadhonor_recieved' => $gradstudies_scholar_acadhonor_recieved,
                


            );
            foreach (array_keys($data) as $key) {
                if ($data[$key] === null) {
                    $data[$key] = ''; // Set a default value (an empty string) for NULL values
                }
            }
           

            // Establish a database connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Define your SQL queries with placeholders
            $personalinfo_sql = "INSERT INTO personalinfo (
                surname, first_name, middle_name, name_extension, date_of_birth, place_of_birth, sex, civil_status, height, weight,
                blood_type, gsis_id_no, pagibig_id_no, philhealth_no, sss_no, tin_no, agency_emp_no, citizenship,
                resident_house_no, resident_street, resident_sub_vil, resident_barangay, resident_city_mul, resident_province, resident_zipcode,
                permanent_house_no, permanent_street, permanent_sub_vil, permanent_barangay, permanent_city_mul, permanent_province, permanent_zipcode,
                telephone_no, mobile_no, email_address
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $backgroundfam_sql = "INSERT INTO backgroundfam (
                spouse_surname, spouse_firstname, spouse_middlename, spouse_occupation, spouse_empname,
                spouse_businessAdd, spouse_telno, spouse_extension, children_name, date_of_childbirth,
                father_surname, father_firstname, father_middlename, father_name_extension,
                mother_maiden_name, mother_surname, mother_firstname, mother_middlename
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $backgroundeduc_sql = "INSERT INTO backgroundeduc (
                name_of_school_elem, basiceduc_deg_course_elem, period_of_attendance_elemfrom, period_of_attendance_elemto,
                elem_unitearned, elem_yeargrad, elem_scholar_acadhonor_recieved, name_of_school_secondary, basiceduc_deg_course_secondary,
                period_of_attendance_secondaryfrom, period_of_attendance_secondaryto, secondary_unitearned, secondary_yeargrad, secondary_scholar_acadhonor_recieved,
                name_of_school_voc, basiceduc_deg_course_voc,period_of_attendance_vocfrom, period_of_attendance_vocto, voc_unitearned, voc_yeargrad, voc_scholar_acadhonor_recieved,
                name_of_school_college, basiceduc_deg_course_college, period_of_attendance_collegefrom, period_of_attendance_collegeto,
                college_unitearned, college_yeargrad,college_scholar_acadhonor_recieved, name_of_school_gradstudies, basiceduc_deg_course_gradstudies,
                period_of_attendance_gradstudiesfrom, period_of_attendance_gradstudiesto, gradstudies_unitearned, gradstudies_yeargrad,gradstudies_scholar_acadhonor_recieved
            ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            // Prepare statements
            $personalinfo_stmt = $conn->prepare($personalinfo_sql);
            $backgroundfam_stmt = $conn->prepare($backgroundfam_sql);
            $backgroundeduc_stmt = $conn->prepare($backgroundeduc_sql);

            if (!$personalinfo_stmt || !$backgroundfam_stmt || !$backgroundeduc_stmt) {
                die("Prepare failed: " . $conn->error);
            }

            // Bind parameters for 'personal_info'
            $personalinfo_stmt->bind_param(
                "sssssssssssssssssssssssssssssssssss",
                $data['surname'],
                $data['first_name'],
                $data['middle_name'],
                $data['name_extension'],
                $data['date_of_birth'],
                $data['place_of_birth'],
                $data['sex'],
                $data['civil_status'],
                $data['height'],
                $data['weight'],
                $data['blood_type'],
                $data['gsis_id_no'],
                $data['pagibig_id_no'],
                $data['philhealth_no'],
                $data['sss_no'],
                $data['tin_no'],
                $data['agency_emp_no'],
                $data['citizenship'],
                $data['resident_house_no'],
                $data['resident_street'],
                $data['resident_sub_vil'],
                $data['resident_barangay'],
                $data['resident_city_mul'],
                $data['resident_province'],
                $data['resident_zipcode'],
                $data['permanent_house_no'],
                $data['permanent_street'],
                $data['permanent_sub_vil'],
                $data['permanent_barangay'],
                $data['permanent_city_mul'],
                $data['permanent_province'],
                $data['permanent_zipcode'],
                $data['telephone_no'],
                $data['mobile_no'],
                $data['email_address']
            );

            // Bind parameters for 'backgroundfam'
            $backgroundfam_stmt->bind_param(
                "ssssssssssssssssss",
                $data['spouse_surname'],
                $data['spouse_firstname'],
                $data['spouse_middlename'],
                $data['spouse_occupation'],
                $data['spouse_empname'],
                $data['spouse_businessAdd'],
                $data['spouse_telno'],
                $data['spouse_extension'],
                $data['children_name'],
                $data['date_of_childbirth'],
                $data['father_surname'],
                $data['father_firstname'],
                $data['father_middlename'],
                $data['father_name_extension'],
                $data['mother_maiden_name'],
                $data['mother_surname'],
                $data['mother_firstname'],
                $data['mother_middlename']
            );
            $backgroundeduc_stmt->bind_param(
                "sssssssssssssssssssssssssssssssssss",
                $data['name_of_school_elem'],
                $data['basiceduc_deg_course_elem'],
                $data['period_of_attendance_elemfrom'],
                $data['period_of_attendance_elemto'],
                $data['elem_unitearned'],
                $data['elem_yeargrad'],
                $data['elem_scholar_acadhonor_recieved'],
                $data['name_of_school_secondary'],
                $data['basiceduc_deg_course_secondary'],
                $data['period_of_attendance_secondaryfrom'],
                $data['period_of_attendance_secondaryto'],
                $data['secondary_unitearned'],
                $data['secondary_yeargrad'],
                $data['secondary_scholar_acadhonor_recieved'],
                $data['name_of_school_voc'],
                $data['basiceduc_deg_course_voc'],
                $data['period_of_attendance_vocfrom'],
                $data['period_of_attendance_vocto'],
                $data['voc_unitearned'],
                $data['voc_yeargrad'],
                $data['voc_scholar_acadhonor_recieved'],
                $data['name_of_school_college'],
                $data['basiceduc_deg_course_college'],
                $data['period_of_attendance_collegefrom'],
                $data['period_of_attendance_collegeto'],
                $data['college_unitearned'],
                $data['college_yeargrad'],
                $data['college_scholar_acadhonor_recieved'],
                $data['name_of_school_gradstudies'],
                $data['basiceduc_deg_course_gradstudies'],
                $data['period_of_attendance_gradstudiesfrom'],
                $data['period_of_attendance_gradstudiesto'],
                $data['gradstudies_unitearned'],
                $data['gradstudies_yeargrad'],
                $data['gradstudies_scholar_acadhonor_recieved'],
                
            );

            // Execute the 'personal_info' query
            if ($personalinfo_stmt->execute()) {
                echo "Data inserted into 'personal_info' table successfully!<br>";
            } else {
                echo "Error inserting data into 'personal_info' table: " . $personalinfo_stmt->error;
            }

            // Execute the 'backgroundfam' query
            if ($backgroundfam_stmt->execute()) {
                echo "Data inserted into 'backgroundfam' table successfully!<br>";
            } else {
                echo "Error inserting data into 'backgroundfam' table: " . $backgroundfam_stmt->error;
            }
             // Execute the 'backgroundeduc' query
             if ($backgroundeduc_stmt->execute()) {
                echo "Data inserted into 'backgroundeduc' table successfully!";
            } else {
                echo "Error inserting data into 'backgroundfam' table: " . $backgroundeduc_stmt->error;
            }

            // Close the statements and the database connection
            $personalinfo_stmt->close();
            $backgroundfam_stmt->close();
            $backgroundeduc_stmt->close();
            $conn->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "Error uploading the file.";
}
?>
