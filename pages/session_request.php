<?php
session_start();
$InterpreterID =$_GET['ID'];
$UserID =$_GET['UserID'];
$Date =$_POST['appointmentDate'];
$Time =$_POST['appointmentTime'];

if(!empty($_SESSION['Usertype']))	
{
	$db_conn = mysqli_connect("localhost", "root", "", "nesmaeuk") or die(mysqli_error($db_conn));

	$check_interpreters=mysqli_query($db_conn,"SELECT * from interpreters where ID='$InterpreterID'") or die(mysqli_error($db_conn));

	while($result=mysqli_fetch_array($check_interpreters)){
	  $InterpreterName=$result['InterpreterName'];
	  $InterpreterEmail=$result['Email'];
	  $InterpreterID_No=$result['ID_No'];
	  $Path=$result['Imgpath'];
	}

	$check_users=mysqli_query($db_conn,"SELECT * from users where ID='$UserID'") or die(mysqli_error($db_conn));

	while($result=mysqli_fetch_array($check_users)){
	  $UserName=$result['Fullname'];
	  $UserEmail=$result['Email'];
	  $Path2=$result['Imgpath'];
	}

	$check_session="SELECT * from sessions where InterpreterID = '$InterpreterID' && UserID = '$UserID'";
	$result=mysqli_query($db_conn,$check_session);
	$count=mysqli_num_rows($result);
	if($count>0){		
?>
	  <script>
		if (confirm("تم حجز هذه الجلسة بالفعل!") == true) {
		  text = location.replace("home_user.php");
		}
	  </script>
<?php
	  exit();
	}
	
	else {
	  $query=mysqli_query($db_conn, "INSERT INTO sessions (InterpreterID, UserID, InterpreterName, UserName, InterpreterEmail,
	  UserEmail, InterpreterID_No, Date, Time, InterpreterPath, UserPath, Status)
	  Values ('$InterpreterID','$UserID','$InterpreterName','$UserName','$InterpreterEmail','$UserEmail','$InterpreterID_No','$Date',
	  '$Time','$Path','$Path2','قيد المعالجة')") or die(mysqli_error($db_conn));
	  
	  $check_sessions=mysqli_query($db_conn,"select * from sessions") or die(mysqli_error($db_conn));
	  
	  while($result=mysqli_fetch_array($check_sessions))
	  {
		//$id=$result['id'];
	  }
	  
	  header ("location: appointments.php?id=$InterpreterID");
	}
}
?>