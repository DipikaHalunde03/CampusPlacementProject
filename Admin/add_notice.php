<?php

include('db_register.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	 //$attachment=$_POST['attachment'];
	
	if(isset($_FILES["attachment"]))
	{
		$subject=$_POST['subject'];
		$date1=$_POST['date1'];	
		$time1=$_POST['time1'];
	
		$target="uploads/";
		$Resumefilename = basename($_FILES["attachment"]["name"]);
		$Resumepath=$target.$Resumefilename;

    	 if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $Resumepath)) 
    	 {
			$query="INSERT INTO notice (subject,date1,time1,Resumepath) VALUES('$subject','$date1','$time1','$Resumepath')";
			$query_run=mysqli_query($conn,$query);

	 
    
			if($query_run)
			{
			$_SESSION['message']="Notice Added Successfully";
			header('Location: addnotice.php');
			exit(0);
			}

   		}
	else
	{
		$_SESSION['message']="Something went wrong..!";
		header('Location: addnotice.php');
		exit(0);
	}
}
}
?>