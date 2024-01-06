


 <?php









include('db_register.php');

if (isset($_POST['add_user'])) {
    $ID = $_POST['ID'];
    $prn = $_POST['prn'];
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];  // Include the password field
   
    $check_query = "SELECT * FROM registered_user WHERE ID = '$ID' OR prn = '$prn'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result && mysqli_num_rows($check_result) > 0) {
        // ID or PRN already exists, display a message
        $error_message = "ID or PRN already registered.";
    } else {
        $query = "INSERT INTO registered_user (ID,prn,Name,email,phone_no,password) VALUES('$ID','$prn','$Name','$email','$phone_no','$password')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['message'] = "User Added Successfully";
            header('Location: registeredUser.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Something went wrong..!";
            header('Location: registeredUser.php');
            exit(0);
        }
    }
} 
elseif (isset($_POST['user_delete'])) {
    $user_id = $_POST['user_delete'];

    $query = "DELETE FROM registered_user where ID='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "User deleted Successfully";
        header('Location: registeredUser.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: registeredUser.php');
        exit(0);
    }
} elseif (isset($_POST['update_user'])) {
    $user_id = $_POST['ID'];
    $prn = $_POST['prn'];
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
   // $password = $_POST['password'];  // Include the password field
    $Status = $_POST['Status'] == true ? '1' : '0';

    $query = "UPDATE registered_user SET prn='$prn', Name='$Name' ,email='$email', phone_no='$phone_no', Status='$Status' WHERE ID='$user_id'";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Record Updated Successfully";
        header('Location: registeredUser.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: registeredUser.php');
        exit(0);
    }
}



?>



























<?php


/*
include('db_register.php');

if(isset($_POST['add_user']))
{
	$ID=$_POST['ID'];
	$prn=$_POST['prn'];	
	$Name=$_POST['Name'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$password=$_POST['password'];
	$Status=$_POST['Status']==true ?'1' :'0';



	$check_query = "SELECT * FROM registered_user WHERE ID = '$ID' OR prn = '$prn'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result && mysqli_num_rows($check_result) > 0) {
        // ID or PRN already exists, display a message
        $error_message = "ID or PRN already registered.";
    } 


else{



	$query="INSERT INTO registered_user (ID,prn,Name,email,phone_no,Status,password) VALUES('$ID','$prn','$Name','$email','$phone_no','$Status','$password')";//parameters(prn,Name..) are nothing but database column name
	$query_run=mysqli_query($conn,$query);

	if($query_run)
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



if(isset($_POST['user_delete']))
{
	$user_id=$_POST['user_delete'];

	$query="DELETE FROM registered_user where ID='$user_id'";
	$query_run=mysqli_query($conn,$query);

	if($query_run)
	{
		$_SESSION['message']="User deleted Successfully";
		header('Location: registeredUser.php');
		exit(0);
	}
	else
	{
		$_SESSION['message']="Something went wrong";
		header('Location: registeredUser.php');
		exit(0);
	}
}



if(isset($_POST['update_user']))
{
	$user_id=$_POST['user_id'];
	$prn=$_POST['prn'];	
	$Name=$_POST['name'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	
	$Status=$_POST['Status']==true ?'1' :'0';

	$query ="UPDATE registered_user SET prn='$prn', Name='$Name' ,email='$email', phone_no='$phone_no',Status='$Status' 
	where ID='$user_id' password='$password' ";

	$query_run=mysqli_query($conn,$query);

	if($query_run)
	{
		$_SESSION['message']="Record Updated Successfully";
		header('Location: registeredUser.php');
		exit(0);
	}
	else
	{
		$_SESSION['message']="Something went wrong";
		header('Location: registeredUser.php');
		exit(0);
	}

}
}
*/

?>