<?php

include('db_register.php');
include('header.php');
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
            background-color: #36454F;
            color: white;
        }
        tbody tr:hover
                    {
                      background-color: #FFFACD;
                    }
    </style>
</head>
<body>

    <div class="container-fluid px-4"> 
                   
        <h3 class="mt-4"><b>Applied Users for current drive</b></h3>
        
        <div class="row">

            <div class ="col-md-12">

                <div class="card-body">
                    
                        <?php

   
                    if ($result->num_rows > 0) 
                    {
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

            while ($row = $result->fetch_assoc()) 
            {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['full_name']}</td>
                    <td>{$row['jobtitle']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['current_year']}</td>
                    <td>{$row['cgpa']}</td>
                    <td>{$row['backlogs']}</td>
                    <td><a href='{$row['resume_path']}' target='_blank'>Download Resume</a></td>
                </tr>";
            }

        echo "</table>";
    } 
    else 
    {
        echo "No applicants yet.";
    }

    ?>

</div>
</div>
</div>
</div>

</body>
</html>

<?php
include('footer.php');
include('script.php');
?>