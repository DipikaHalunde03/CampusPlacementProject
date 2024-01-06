<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject1";




$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "resume" key exists in $_FILES before accessing it
    if (isset($_FILES["resume"])) {
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $currentYear = $_POST["currentYear"];
        $cgpa = $_POST["cgpa"];
        $backlogs = $_POST["backlogs"];
        $company_name = $_POST["jobtitle"];

        $targetDir = "uploads/";
        $resumeFileName = basename($_FILES["resume"]["name"]);
        $resumePath = $targetDir . $resumeFileName;
        
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resumePath)) {
            // Insert data into the database, including the company name and resume path
            $sql = "INSERT INTO applicants (full_name, email, current_year, cgpa, backlogs, resume_path, jobtitle) 
                    VALUES ('$fullName', '$email', '$currentYear', '$cgpa', '$backlogs','$resumePath', '$company_name')";
        
            if ($conn->query($sql) === TRUE) {
                echo "Application submitted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading resume.";
        }
        

    }
}






?>
