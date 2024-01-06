<?php
include('db_register.php');  // Include your database connection file



if (isset($_POST['add_user'])) 
{
    $ID = $_POST['ID'];
    $prn = $_POST['prn'];
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];

    // Check if ID or PRN already exists
    $check_query = "SELECT * FROM registered_user WHERE ID = '$ID' OR prn = '$prn'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result && mysqli_num_rows($check_result) > 0) 
    {
        // ID or PRN already exists, display a message

        $_SESSION['message']="ID or PRN already exists";
        header('Location: registeredUser.php');
        exit(0);
        //echo "ID or PRN already registered.";
    } 
    else
    {
        // Insert new user into the database
        $insert_query = "INSERT INTO registered_user (ID, prn, Name, email, phone_no, password) VALUES ('$ID', '$prn', '$Name', '$email', '$phone_no', '$password')";
        $insert_result = mysqli_query($conn, $insert_query);

        if($insert_result)
        {
            $_SESSION['message']="User Added Successfully";
            header('Location: registeredUser.php');
            exit(0);
        }
        else
        {
            $_SESSION['message']="Something went wrong..!";
            header('Location: registeredUser.php');
            exit(0);
        }
    }


}


?>






<!-- Your HTML form goes here -->
