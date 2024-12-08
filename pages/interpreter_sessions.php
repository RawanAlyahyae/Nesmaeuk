<html dir="rtl" lang="en">
  <head>
  	<title>Session Page</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"/> <!--For Social Icons-->
	
  </head>    
    
  <body>
    <div class="homePage">
      <div class="navigation">
        <div>
          <a href="home_interpreter.php" target="_self"><img class="logo" src="../logo/logo.jpg" alt="Something Wrong!"/></a>
        </div>
        
        <div class="home_page"><a href="home_interpreter.php">الصفحة الرئيسية</a></div>

        <?php
          session_start();
		  if($_SESSION['Usertype']=="interpreter")
			{
			  $InterpreterID=$_SESSION['ID'];
			  $InterpreterName=$_SESSION['Fullname'];
			  $InterpreterEmail=$_SESSION['Email'];
		?>
			  <div class="interpreters"><a href="contact_us_interpreter.php">تواصل معنا</a></div>
              <div class="favorites"><a href="about_us_interpreter.php">من نحن</a></div>
              <div class="options"><a href="options_interpreter.php">الإعدادات</a></div>
              <div class="interpreter_sessions"><a href="interpreter_sessions.php">جلساتي</a></div>
			  <div class="add_appointment"><a href="add_appointment.php">إضافة موعد</a></div>
			  
			  <div class="logout">
            	<div class="sub_logout"><a class="link" href="logout.php">تسجيل خروج</a></div>
          	  </div>
		<?php
			}
			else header("location: login.php");
		?>
      </div>
		
      <div class="Rectangle7">
		<center>
		  <?php
			$DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
			$check_session=mysqli_query($DB_con,"select * from sessions where InterpreterEmail='$InterpreterEmail' ") or die(mysqli_error($DB_con));
		  ?>
			<ul class="interpreter"> 
		  <?php
			
			while($result=mysqli_fetch_array($check_session)){
			  $id=$result['ID'];
			  $path=$result['InterpreterPath'];
			  $date=$result['Date'];
			  $time=$result['Time'];
			  $link=$result['Link'];
			  $formattedTime = date("g:i a", strtotime($time));

			  echo"<li><a href='home_user.php'></a>
			  <img class='interpreter_img' src='".$result['InterpreterPath']."'alt='No Image'>";
			  echo "<h4 class='Info'>".'رقم الجلسة: '.$result['ID']."</h4>";
			  echo "<h4 class='Info'>".'اسم المترجم: '.$result['InterpreterName']."</h4>";
			  echo "<h4 class='Info'>".'تاريخ الجلسة: '.$result['Date']."</h4>";
			  echo "<h4 class='Info'>".'توقيت الجلسة: '.$formattedTime."</h4>";

			  $sql = "SELECT Date FROM sessions WHERE ID = $id"; // Change the ID as needed
			  $result = $DB_con->query($sql);
			  
			  if ($result->num_rows > 0) {
				  $row = $result->fetch_assoc();
				  $eventDate = strtotime($row['Date']);
				  $currentDate = time();
			  
				  if ($eventDate < $currentDate) {
					  // Date is expired
					  echo "<a class='disabled'>انتهت الجلسة!</a>";

				  } else {				  

			  echo "<a class='Session' href='$link' target='_blank'>بدء الجلسة!</a>";
			}
			  echo "</li>";
			}}
		  ?>
		</center>
		<br>
				
		<footer>
		  <h1 class="Para_Footer1">رؤيتنــا</h1>
		  <h2 class="Para_Footer2">رؤيتنا في موقع توفير مترجم للصم والبكم هي أن نكون<br>
			الجسر الذي يربط مجتمع الصم والبكم بالعالم من خلال<br>
			تقديم مترجم يسهل التواصل وتعزيز اندماجهم في المجتمع.</h2>

		  <div class="socials">
			<div>
				<a href="#"><i class="ri-facebook-fill"></i></a>
				<a href="#"><i class="ri-instagram-line"></i></a>
				<a href="#"><i class="ri-twitter-x-fill"></i></a>
				<a href="#"><i class="ri-whatsapp-line"></i></a>
				<a href="#"><i class="ri-mail-open-fill"></i></a>
				<!--<a href="#"><i class="ri-heart-2-line"></i></a>-->
			</div>
		  </div>
		
		</footer>
	  </div>
	</div>
  </body>
</html>