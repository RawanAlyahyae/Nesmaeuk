<?php
  $fname=$_POST['Fullname'];
  $city=$_POST['City'];
  $email=$_POST['Email'];
  $pass=$_POST['Password'];
  
  $db_conn = mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($db_conn));
  
  $check_user = "SELECT * from users where Email = '$email'";
  $result = mysqli_query($db_conn,$check_user);
  $count = mysqli_num_rows($result);

  if($count>0){		
?>
  <script>
    if (confirm("عذرا، هذا البريد الإلكتروني موجود بالفعل!") == true) {
	  text = location.replace("registration_user.php");
	}
  </script>

 <?php
	exit();
  }
  
  else {
	$query=mysqli_query($db_conn,"INSERT INTO users (Fullname, City, Email, Password, Usertype)
	Values ('$fname','$city','$email','$pass','user')") or die(mysqli_error($db_conn));	
 ?>
	<script>
	  if (confirm("تم إنشاء حسابك بنجاح!") == true) {
		text = location.replace("login.php");
	  }
	</script>
<?php
  }
?>	