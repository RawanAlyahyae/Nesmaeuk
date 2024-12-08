<?php
  session_start();
	if($_SESSION['Usertype']=="admin"){
	  $UserID=$_GET['ID'];

	  $db_conn=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($db_conn));
	  $Check_User=mysqli_query($db_conn,"DELETE from users where ID=$UserID") or die(mysqli_error($db_conn));

	  if($Check_User){
		header("location: users_data.php");
	  }
	}

	else header("location: users_data.php");
 ?>