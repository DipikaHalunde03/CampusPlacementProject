<?php
include('db_register.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "resume" key exists in $_FILES before accessing it
    if (isset($_FILES["resume"])) {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $currentYear = $_POST["currentYear"];
    $cgpa = $_POST["cgpa"];
    $backlogs = $_POST["backlogs"];
    $company_name = isset($_POST['jobtitle']) ? htmlspecialchars($_POST['jobtitle']) : '';
        echo "Company Name: " . $company_name;

    $targetDir = "uploads/";
    $resumeFileName = basename($_FILES["resume"]["name"]);
    $resumePath = $targetDir . $resumeFileName;

    // Validate and sanitize file name
    $resumeFileName = preg_replace("/[^a-zA-Z0-9-_\.]/", "", $resumeFileName);

    // Move the uploaded file to a secure location
    $resumePath = $targetDir . $resumeFileName;

    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resumePath)) {
        // Assuming $conn is your database connection
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO applicants (full_name, email, current_year, cgpa, backlogs, resume_path, jobtitle) 
                                VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $fullName, $email, $currentYear, $cgpa, $backlogs, $resumePath, $company_name);

        if ($stmt->execute()) {
            echo "Application submitted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error uploading resume.";
    }
}
}



?>
