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
          <a href="index.php" target="_self"><img class="logo" src="../logo/logo.jpg" alt="Something Wrong!"/></a>
        </div>
        
        <div class="home_page"><a href="home_user.php">الصفحة الرئيسية</a></div>
        <div class="interpreters"><a href="interpreters.php">المترجمون</a></div>

        <?php
          session_start();
            if(!empty($_SESSION['Usertype']))
			{
			  $id=$_GET['ID'];
			  $UserID=$_GET['UserID'];
		?>
			  <div class="favorites"><a href="favorites.php">المفضلة</a></div>
			  <div class="options"><a href="options.php">الإعدادات</a></div>
			  <div class="who_are_we"> <a href="about_us.php">من نحن</a></div>
			  <div class="my_sessions"><a href="my_sessions.php">جلساتي</a></div>
			  <div class="contactss_us"><a href="contact_us.php">تواصل معنا</a></div>

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
			<h1>اختيار موعد للجلسة</h1><br><br>
			<?php echo "<form action='session_request.php?ID=$id & UserID=$UserID' method='POST'>";?>
				<div class="form-group">
					<label class="label2" for="appointmentDate">تاريخ الجلسة:</label>
					<input type="date" id="appointmentDate" name="appointmentDate" required>
				</div>
				<div class="form-group">
					<label class="label2" for="appointmentTime">توقيت الجلسة:</label>
					<input type="time" id="appointmentTime" name="appointmentTime" required>
				</div><br>
				<button type="submit" class="submit-btn">حفظ الموعد</button>
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