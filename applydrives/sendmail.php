<?php


//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter view-job-post.php in URL.
if (empty($_SESSION['id'])) {
    header("Location:application_form.php");
    exit();
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject1";




$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from applicants";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {


        //the subject
        $sub = "New Drive has been posted.";
        //the message
        $msg = "Go to your profile on placement portal to check your eligibility and apply for the drive.";
        //recipient email here
        $str = $row['email'];
        $rec = "$str";
        //send email
        mail($rec, $sub, $msg);
    }
}
?>