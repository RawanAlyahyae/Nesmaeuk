<?php
  session_start();
  if($_SESSION['Usertype']=="interpreter")
  {
	  $Fullname=$_POST['Fullname'];
	  $City=$_POST['City'];
	  $Email=$_POST['Email'];
	  $Password=$_POST['Password'];
	  $InterpreterID=$_POST['ID'];
	  $Path_Old=$_POST['Imgpath'];
	  
	  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
	  if(empty($_FILES['update_img']['tmp_name']) || !is_uploaded_file($_FILES['update_img']['tmp_name'])) 
	  { 
		$check_interpreter=mysqli_query($DB_con,"UPDATE interpreters SET InterpreterName='$Fullname', City='$City', 
		Password='$Password' where Email='$Email'") or die(mysqli_error($DB_con));
		
		$check_interpreter=mysqli_query($DB_con,"UPDATE users SET Fullname='$Fullname', City='$City',
		Password='$Password' where ID=$InterpreterID") or die(mysqli_error($DB_con));
		
		if($check_interpreter)
		  header("location: options_interpreter.php");
		else
		  header("location: options_interpreter.php");
	  }

	  else
	  { 
		move_uploaded_file( $_FILES['update_img']['tmp_name'], "../imgservice/".$_FILES['update_img']['name']);

 		$Path="../imgservice/".$_FILES['update_img']['name'];

		 $check_interpreter=mysqli_query($DB_con,"UPDATE interpreters SET InterpreterName='$Fullname', City='$City', Password='$Password',
		Imgpath='$Path' where Email='$Email'") or die(mysqli_error($DB_con));
		
		$check_interpreter=mysqli_query($DB_con,"UPDATE users SET Fullname='$Fullname', City='$City', Email='$Email',
		Password='$Password', Imgpath='$Path' where ID=$InterpreterID") or die(mysqli_error($DB_con));

		

		if($check_interpreter){
		  unlink($Path_Old);
		  header("location: options_interpreter.php");
		}
		
		else header("location: options_interpreter.php");
	  }
	}