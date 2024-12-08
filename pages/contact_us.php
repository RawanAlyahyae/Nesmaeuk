<?php
  if(!empty($_POST["send"])) {
	$name = $_POST["Fullname"];
	$email = $_POST["Email"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$conn = mysqli_connect("localhost", "root", "", "nesmaeuk") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO comments (Fullname, Email,Subject,Content)
	VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "تم الارسال بنجاح";
	   $type = "تم الارسال بنجاح";
	//}
  }
  require_once "contact_view.php";
?>