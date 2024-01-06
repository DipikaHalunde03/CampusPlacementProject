<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject1";




$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "resume" key exists in $_FILES before accessing it
    if (isset($_FILES["resume"])) {
    // Get the values from the form
    $ID = $_POST['ID'];
    $prn = $_POST['prn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $hq = $_POST['hq'];
    $stream = $_POST['stream'];
    $skills = $_POST['skills'];
    $aboutme = $_POST['aboutme'];
    $address = $_POST['address'];
    $hsc = $_POST['hsc'];
    $ssc = $_POST['ssc'];
    $ug = $_POST['ug'];
    $pg = $_POST['pg'];
    $hg=$_POST['hq'];
    $dob=$_POST['dob'];

    $targetDir = "uploads/";
    $resumeFileName = basename($_FILES["resume"]["name"]);
    $resumePath = $targetDir . $resumeFileName;
    
    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resumePath)) {



    // Note: You might want to add more validation and sanitation here

    // Update the record in the database
  
    $sql ="UPDATE registered_user SET prn='$prn', name='$name', email='$email', phone_no='$phone_no', hg='$hq', stream='$stream', skills='$skills', aboutme='$aboutme', address='$address', hsc='$hsc', ssc='$ssc', ug='$ug', pg='$pg', hg='$hg', dob='$dob', resumepath='$resumePath' WHERE ID=$ID";
    ;
        
            if ($conn->query($sql) === TRUE) {
                
                echo "Update profile  successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } 
        else {
            echo "Error uploading resume.";
        }
        

    }
}






?>
