<?php
// Database connection information
$server = "localhost";
$username = "root";
$password = "";
$database = "miniproject1";

// Create a database connection
$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) 
{
    die("Connection failed: ".$conn->connect_error);
}

// Get the input data from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to check the credentials
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) 
{
    // Correct credentials; redirect to index.php
    header("Location: indexadmin.php");
    exit;
} 
else 
{
    // Incorrect credentials; redirect back to the login page
    header("Location: index.php?error=Incorrect Username or Password");
    exit;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
