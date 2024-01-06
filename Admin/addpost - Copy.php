<?php

include('db_register.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_FILES["image"]))
	{
		$jobtitle=$_POST['jobtitle'];
		$description=$_POST['description'];	
		$minimumsalary=$_POST['minimumsalary'];
		$maximumsalary=$_POST['maximumsalary'];
		$experience=$_POST['experience'];
		$qualification=$_POST['qualification'];
		$Location=$_POST['Location'];

		$target="uploads/";
		$image=basename($_FILES["image"]["name"]);
		$filename=$target.$image;	
		//rename this)
		
		if(move_uploaded_file($_FILES["image"]["tmp_name"], $filename))
		{

			$query="INSERT INTO job_post (jobtitle,description,Location,minimumsalary,maximumsalary,experience,qualification,image) VALUES('$jobtitle','$description','$Location','$minimumsalary','$maximumsalary','$experience','$qualification','$filename')";
			$query_run=mysqli_query($conn,$query);

			if($query_run)
			{
				
				$_SESSION['message']="Post Added Successfully";
				header('Location: drives.php');
				exit(0);
			}
			else
			{
				$_SESSION['message']="Something went wrong..!";
				header('Location: drives.php');
				exit(0);
			}
    	}
	}
}
?>
