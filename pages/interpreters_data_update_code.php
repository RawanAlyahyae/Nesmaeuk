<?php
  session_start();
  	if($_SESSION['Usertype']=="admin")
	{
	  $Name=$_POST['Name'];
	  $City=$_POST['City'];
	  $Email=$_POST['Email'];
	  $IDNo=$_POST['ID_No'];
	  $InterpreterID=$_POST['ID'];
	  /*$Description=$_POST['Description'];*/
	  $Path_Old=$_POST['Imgpath'];
	  
	  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
	  if(empty($_FILES['update_img']['tmp_name']) || !is_uploaded_file($_FILES['update_img']['tmp_name'])) 
	  { 
		$check_interpreter=mysqli_query($DB_con,"UPDATE interpreters SET InterpreterName='$Name', City='$City', ID_No='$IDNo'
		where ID =$InterpreterID") or die(mysqli_error($DB_con));

		$check_interpreter=mysqli_query($DB_con,"UPDATE users SET Fullname='$Name', City='$City'
		where Email='$Email'") or die(mysqli_error($DB_con));

		if($check_interpreter)
		  header("location: interpreters_data.php");
		else
		  header("location: interpreters_data.php");
	  }

	  else
	  { 
		move_uploaded_file( $_FILES['update_img']['tmp_name'], "../imgservice/".$_FILES['update_img']['name']);

 		$Path="../imgservice/".$_FILES['update_img']['name'];

		$check_interpreter=mysqli_query($DB_con,"UPDATE interpreters SET InterpreterName='$Name', City='$City', ID_No='$IDNo',
		Imgpath='$Path' where ID =$InterpreterID") or die(mysqli_error($DB_con));

		$check_interpreter=mysqli_query($DB_con,"UPDATE users SET Fullname='$Name', City='$City',
		Imgpath='$Path' where Email='$Email'") or die(mysqli_error($DB_con));

		if($check_interpreter){
		  unlink($Path_Old);
		  header("location: interpreters_data.php");
		}
		
		else header("location: interpreters_data.php");
	  }
	}