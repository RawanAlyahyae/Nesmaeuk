<?php
  session_start();
	if($_SESSION['Usertype']=="admin"){
	  $Email=$_GET['Email'];

	  $db_conn=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($db_conn));
	  /*$check_interpreter=mysqli_query($db_conn,"DELETE from interpreters where ID=$InterpreterID") or die(mysqli_error($db_conn));*/

	  $check_interpreter = "DELETE from interpreters where Email = '$Email'";
  	  $result = mysqli_query($db_conn,$check_interpreter);

	  $check_interpreter = "DELETE from users where Email = '$Email'";
	  $result = mysqli_query($db_conn,$check_interpreter);

	  /*$check_interpreters=mysqli_query($db_conn,"DELETE from users where Email=$Email") or die(mysqli_error($db_conn));*/

	  if($check_interpreter){
		header("location: interpreters_data.php");
	  }
	}

	else header("location: interpreters_data.php");
 ?>