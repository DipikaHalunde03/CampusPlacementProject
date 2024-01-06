<?php
session_start();

// Database connection information
$server = "localhost";
$username = "root";
$password = "";
$database = "miniproject1";

// Create a database connection
$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
// Get the input data from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to check the credentials
$sql = "SELECT * FROM registered_user WHERE prn = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Correct credentials; redirect to index.php
    $row = $result->fetch_assoc();
    $_SESSION['userid'] = $row['ID'];
    $_SESSION['name'] = $row['Name'];
    session_write_close();

    header("Location: studentpage1.php");
    exit;
} 
else 
{
    // Incorrect credentials; redirect back to the login page
    header("Location: index.php");
    exit;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
