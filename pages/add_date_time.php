<html dir="rtl" lang="en">
  <head>
  	<title>Add Date & Time.php</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--For Stars-->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script> <!--For Heart-->

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
			  $id=$_GET['ID'];
			  $UserID=$_SESSION['ID'];
			  $UserName=$_SESSION['Fullname'];
			  $UserEmail=$_SESSION['Email'];
		?>
			  <div class="interpreters"><a href="contact_us_interpreter.php">تواصل معنا</a></div>
              <div class="favorites"><a href="about_us_interpreter.php">من نحن</a></div>
              <div class="options"><a href="options_interpreter.php">الإعدادات</a></div>
              <div class="interpreter_sessions"><a href="interpreter_sessions.php">جلساتي</a></div>
              <div class="add_appointment"><a href="add_appointment.php">اضافة موعد</a></div>

					    <div class="logout">
            		<div class="sub_logout"><a class="link" href="logout.php">تسجيل خروج</a></div>
          		</div>
		<?php
			}
            else header("location: login.php");
        ?>
      </div>

      <div class="Rectangle1">
		<div class ="Successful">
		  <div class="container">
			<h1>إضافة موعد للجلسة</h1><br><br>
			<?php echo "<form action='save_appointment.php?ID=$id' method='POST'>";?>
				<div class="form-group">
					<label class="label2" for="appointmentDate">تاريخ الجلسة:</label>
					<input type="date" id="appointmentDate" name="appointmentDate" required>
				</div>

				<div class="form-group">
					<label class="label2" for="appointmentTime">وقت الجلسة:</label>
					<input type="time" id="appointmentTime" name="appointmentTime" required>
				</div><br>

				<div class="form-group">
					<label class="label3" for="meetingLink">رابط الجلسة:</label>
					<input type="text" id="meetingLink" name="meetingLink" required>
				</div>
				<button type="submit" class="submit-btn">إضافة الموعد</button>
			</form>
    	  </div>
	    </div>
	  </div>
        <img class="NesmaeukImg_appointments" src="../img/image.jpg"/>
		<div class="rectangle8">  
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
              </div>
            </div>
          </footer>
        </div> 
    </div>
  </body>
</html>