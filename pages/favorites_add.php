<?php
  $id=$_GET['id'];
  $UserID=$_GET['ID'];
  $UserEmail=$_GET['Email'];
  $UserName=$_GET['Fullname'];
  
  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));

  $check_interpreters=mysqli_query($DB_con,"SELECT * from interpreters where ID='$id'") or die(mysqli_error($DB_con));
	while($result=mysqli_fetch_array($check_interpreters)){
	  $InterpreterName=$result['InterpreterName'];
	  $InterpreterEmail=$result['Email'];
	  $Language=$result['Language'];
	  $City=$result['City'];
	  $Rate=$result['Rate'];
	  $Path=$result['Imgpath'];
	}

	$check_favorites="SELECT * from favorites where InterpreterEmail = '$InterpreterEmail' && UserEmail = '$UserEmail'";
	$result=mysqli_query($DB_con,$check_favorites);
	$count=mysqli_num_rows($result);
	if($count>0){		
?>
	  <script>
		if (confirm("هذا المترجم موجود في قائمة المفضلة لديك بالفعل!") == true) {
		text = location.replace("home_user.php");
		}
	  </script>
<?php
	  exit();
	}
	
	else {
	  $query=mysqli_query($DB_con,"INSERT INTO favorites (UserID, InterpreterID, InterpreterName,
	  UserName, UserEmail, InterpreterEmail, Language, City, Rate, Imgpath)
	  Values ('$UserID','$id','$InterpreterName','$UserName','$UserEmail','$InterpreterEmail','$Language','$City','$Rate','$Path')")
	  or die(mysqli_error($DB_con));
?>
	  <script>
		if (confirm("تمت الإضافة بنجاح إلى قائمة المفضلة لديك!") == true) {
		text = location.replace("home_user.php");
		}
	  </script>
<?php
	}	
?>