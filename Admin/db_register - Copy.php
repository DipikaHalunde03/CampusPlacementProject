<?php
session_start();
$conn=mysqli_connect("localhost","root","","miniproject1");

if(!$conn)
{
	die("connection Error");
}

?>