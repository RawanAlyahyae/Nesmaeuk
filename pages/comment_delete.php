<?php
  session_start();
	if($_SESSION['Usertype']=="admin"){
	  $Id=$_GET['ID'];

	  $DB_Connection=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_Connection));
	  $Check_User=mysqli_query($DB_Connection,"DELETE from comments where ID=$Id") or die(mysqli_error($DB_Connection));

	  if($Check_User){
		header("location: comments.php");
	  }
	}

	else header("location: comments.php");
 ?>