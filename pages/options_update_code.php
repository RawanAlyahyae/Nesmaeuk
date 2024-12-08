<?php
  session_start();
	if(!empty($_SESSION['Usertype']))
	{
	  $Fullname=$_POST['Fullname'];
	  $City=$_POST['City'];
	  $Email=$_POST['Email'];
	  $Password=$_POST['Password'];
	  $UserID=$_POST['ID'];
	  $Path_Old=$_POST['Imgpath'];
	  
	  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
	  if(empty($_FILES['update_img']['tmp_name']) || !is_uploaded_file($_FILES['update_img']['tmp_name'])) 
	  { 
		$check_user=mysqli_query($DB_con,"UPDATE users SET Fullname='$Fullname', City='$City', Email='$Email',
		Password='$Password' where ID=$UserID") or die(mysqli_error($DB_con));
		
		if($check_user)
		  header("location: options.php");
		else
		  header("location: options.php");
	  }

	  else
	  { 
		move_uploaded_file( $_FILES['update_img']['tmp_name'], "../imgservice/".$_FILES['update_img']['name']);

 		$Path="../imgservice/".$_FILES['update_img']['name'];

		$check_user=mysqli_query($DB_con,"UPDATE users SET Fullname='$Fullname', City='$City', Email='$Email',
		Password='$Password', Imgpath='$Path' where ID=$UserID") or die(mysqli_error($DB_con));

		if($check_user){
		  unlink($Path_Old);
		  header("location: options.php");
		}
		
		else header("location: options.php");
	  }
	}