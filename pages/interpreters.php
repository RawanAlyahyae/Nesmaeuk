<html dir="rtl" lang="en">
  <head>
  	<title>Interpreters Page</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--For Stars-->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script> <!--For Heart-->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"/> <!--For Social Icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
	integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
	crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
		
      <div class="Rectangle7">
		<center>
		  <?php
		    $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
			$check_interpreters=mysqli_query($DB_con,"select * from interpreters") or die(mysqli_error($DB_con));		
		  ?>
			<ul class="Interpreter"> 
		  <?php		
			while($result=mysqli_fetch_array($check_interpreters))
			{
			  $id=$result['ID'];
			  $path=$result['Imgpath'];
			
			  echo"<li><img class='interpreter_img' src='".$result['Imgpath']."'alt='No Image'>";
			  echo "<h4 class='Info'>".'الاسم: '.$result['InterpreterName']."</h4>";
			  echo "<h4 class='Info'>".'اللغة: '.$result['Language']."</h4>";					
			  echo "<h4 class='Info'>".'المدينة: '.$result['City']."</h4>";
			  echo '<span class="fa fa-star checked"></span>
				    <span class="fa fa-star checked"></span>
				    <span class="fa fa-star checked"></span>
				    <span class="fa fa-star checked"></span>
				    <span class="fa fa-star checked"></span><br>';
			  echo "<br><b><a class='learn_more' href='most_popular_desc.php?id=$id'>عرض المزيد ...</a></b><br>";
			  echo "</li>";			
		  }
		?>
						<!--<i class="fa fa-heart"></i>-->

				</center><br>
				
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