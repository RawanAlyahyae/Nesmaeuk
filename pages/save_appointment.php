<?php
  session_start();
  if($_SESSION['Usertype']=="interpreter")
	{
    $id=$_GET['ID'];
	  $Date=$_POST['appointmentDate'];
	  $Time=$_POST['appointmentTime'];
	  $Link=$_POST['meetingLink'];

	  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
		$check_appointment=mysqli_query($DB_con,"UPDATE sessions SET Date='$Date', Time='$Time', Link='$Link' where ID=$id")
		or die(mysqli_error($DB_con));
		
		if($check_appointment)
?>   
      <script>
	      if (confirm("تم إضافة موعد الجلسة بنجاح!") == true) {
		      text = location.replace("add_appointment.php");
	      }
	    </script>
<?php
  }
    else
      header("location: logout.php"); 
?>
