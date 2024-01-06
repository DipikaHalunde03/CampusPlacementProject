<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM applicants";
$result = $conn->query($sql);

// Close the database connection
//$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }
    </style>
</head>
<body>

    <h2>Applicants List</h2>
    



    <?php

   
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Year of B.Tech</th>
                    <th>CGPA</th>
                    <th>Backlogs</th>
                    <th>Resume</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['full_name']}</td>
                    <td>{$row['company_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['current_year']}</td>
                    <td>{$row['cgpa']}</td>
                    <td>{$row['backlogs']}</td>
                    <td><a href='{$row['resume_path']}' target='_blank'>Download Resume</a></td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No applicants yet.";
    }

    ?>

</body>
</html>
