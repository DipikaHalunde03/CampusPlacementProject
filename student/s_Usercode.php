<?php

include('s_dbconnection.php');

if(isset($_POST['update_user']))
{
	$user_id=$_POST['user_id'];
	$prn=$_POST['prn'];	
	$Name=$_POST['name'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$Status=$_POST['Status']==true ?'1' :'0';

	$query ="UPDATE registered_user SET prn='$prn', Name='$Name' ,email='$email', phone_no='$phone_no',Status='$Status' 
	where ID='$user_id' ";

	$query_run=mysqli_query($conn,$query);

	if($query_run)
	{
		$_SESSION['message']="Record Updated Successfully";
		header('Location: updateprofile.php');
		exit(0);
	}

}
?>