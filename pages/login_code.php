<?php
  session_start();
	$mymail=$_POST['myemail'];
	$mypass=$_POST['mypassword'];

	$DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));

	$check_user=mysqli_query($DB_con,"select * from users where Email='$mymail' and Password='$mypass'") or die(mysqli_error($DB_con));
	$result=mysqli_fetch_array($check_user);

	$name_DB=$result['Fullname'];
	$email=$result['Email'];
	$myid=$result['ID'];
	$user_type=$result['Usertype'];

	if($result && $user_type == 'user')
	{
	  header ("location: home_user.php");
	  $_SESSION['Fullname']=$name_DB;
	  $_SESSION['Email']=$email;
	  $_SESSION['Usertype']=$user_type;
	  $_SESSION['ID']=$myid;
	}	

	else if ($result && $user_type == 'admin')
	{
	  header ("location: admin.php");
	  $_SESSION['Fullname']=$name_DB;
	  $_SESSION['Email']=$email;
	  $_SESSION['ID']=$myid;
	  $_SESSION['Usertype']=$user_type;
	}	
		
	else if ($result && $user_type == 'interpreter')
	{
	  header ("location: home_interpreter.php");
	  $_SESSION['Fullname']=$name_DB;
	  $_SESSION['Email']=$email;
	  $_SESSION['Usertype']=$user_type;
	  $_SESSION['ID']=$myid;
	} 

	else
?>
	  <script>
		if (confirm("الرجاء إدخال بريد إلكتروني وكلمة مرور صالحين!") == true) {
		  text = location.replace("login.php");
		}
      </script>