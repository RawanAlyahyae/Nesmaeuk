<html dir="rtl" lang="en">
  <head>
	<title>Description Page</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="../css/style.css">
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
			  $UserID=$_SESSION['ID'];
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

			else{
		?>
			  <div class="login">
				<div class="sub_login"><a class="link" href="login.php">تسجيل دخول</a></div>
			  </div>
			  
			  <div class="who_not_login"><a href="about_us.php">من نحن</a></div>
			  <div class="contacts_us"><a href="contact_us.php">تواصل معنا</a></div>

			  <div class="interpreter_account"><a href="registration_interpreter.php">تسجيل كمترجم</a></div>
		
			  <div class="create_account">
				<div class="sub_create_account"><a class="link" href="registration_user.php">إنشاء حساب</a></div>
			  </div>
		<?php	
			}
		?>
	  </div> 
	
	  <img class="headerImg" src="../img/header.jpg"/>
	  <div class="Rectangle6"> 
		
	  <center>
		<?php
		  $id=$_GET['id'];
		  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
		  $check_service=mysqli_query($DB_con,"select * from interpreters where ID=$id") or die(mysqli_error($DB_con));
		  
		  while($result=mysqli_fetch_array($check_service)){
			$id=$result['ID'];
			$path=$result['Imgpath'];
			echo "</br>"."<img class='interpreter_img' src='".$result['Imgpath']."'alt='No Image'>"."</br>"."</br>";
			echo "<span class='Info'> الاسم: </span>" .$result['InterpreterName']."</br>"."</br>";
			echo "<span class='Info'> المدينة: </span>" .$result['City']."</br>"."</br>";
			echo "<span class='Info'> اللغة: </span>" .$result['Language']."<br>"."</br>";
			echo "<span class='Info'> الوصف: </span>".$result['Description']."</br>"."</br>";
			if(!empty($_SESSION['Usertype'])){	
			  echo "<a href='session_appointment.php?ID=$id & UserID=$UserID'><button class='appointments'>حجز موعد</button></a>"."</br>"."</br>";}
		  }	
		?>
	  </center>

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
  </body>
</html>  
