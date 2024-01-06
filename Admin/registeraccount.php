<?php
session_start();
include('s_dbconnection.php');

if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($conn, $_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $confirm_password=mysqli_real_escape_string($conn,$_POST['cpassword']);

    if($password ==$confirm_password)
    {
    	$checkusername ="SELECT username FROM student WHERE username='$username'";

    	$checkusername_run=mysqli_query($conn,$checkusername);

    	if(mysqli_num_rows($checkusername_run)>0)
    	{
    		$_SESSION['message']="Alraedy Username Exits";
    		header('Location: createaccount.php');
    		exit(0);
    	}
    	else
    	{
    		$user_query="INSERT INTO student (username,password) VALUES ('$username','$password')";
    		$user_query_run=mysqli_query($conn,$user_query);

    		if($user_query_run)
    		{
    			$_SESSION['message']="Register Successfully";
    			header('Location: createaccount.php');
    			exit(0);
    		}
    		else
    		{
    			$_SESSION['message']="Something went wrong";
    			header('Location:createaccount.php');
    			exit(0);
    		}
    	}

    }
    else
    {
    	$_SESSION['meassage']="Password and confirm Password does not match";
    	header('Location:createaccount.php');
    	exit(0);
    }
}
else
{
	header('Location:createaccount.php');
	exit(0);
}
?>