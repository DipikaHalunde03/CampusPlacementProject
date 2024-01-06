<?php

include('db_register.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_FILES["image"]))
	{
	
		$Name=$_POST['name'];
		$Package=$_POST['Package'];
		$company_name=$_POST['company_name'];

		$target="uploads/";
		$image=basename($_FILES["image"]["name"]);
		$filename=$target.$image;	
		//rename this)
		
		if(move_uploaded_file($_FILES["image"]["tmp_name"], $filename))
		{
		

			$query="INSERT INTO placed_student (name,package,company_name,image) VALUES('$Name','$Package','$company_name','$filename')";//parameters(prn,Name..) are nothing but database column name
			$query_run=mysqli_query($conn,$query);

			if($query_run)
			{
				$_SESSION['message']="Post Added Successfully";
				header('Location: addplacedstudent.php');
				exit(0);
			}
			else
			{
				$_SESSION['message']="Something went wrong..!";
				header('Location: addplacedstudent.php');
				exit(0);
			}
		}
	}
}
?>