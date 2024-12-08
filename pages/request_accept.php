<?php
  session_start();
	if($_SESSION['Usertype']=="interpreter")
	{
    	$Id=$_GET['ID'];
    	$DB_Connection=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_Connection));

		$Check_request=mysqli_query($DB_Connection,"UPDATE sessions SET Status='طلب مقبول' where ID=$Id") or die(mysqli_error($DB_Connection));

		if($Check_request){
		  header("location: home_interpreter.php");
		}
		
		else header("location: home_interpreter.php");
	}
	else header("location: logout.php");
