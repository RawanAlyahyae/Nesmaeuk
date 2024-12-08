<html dir="rtl" lang="en">
  <head>
	<title>Favorites Page</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--For Stars-->
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
		  if($_SESSION['Usertype']=="user")
			{
			  $UserID=$_SESSION['ID'];
			  $UserName=$_SESSION['Fullname'];
			  $UserEmail=$_SESSION['Email'];
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
	
	  <img class="headerImg" src="../img/header.jpg"/>
	  <div class="Rectangle6"> 
		
	  <center>
		<?php
		  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
		  $display_result=mysqli_query($DB_con,"SELECT * from favorites where UserEmail='$UserEmail'") or die(mysqli_error($DB_con));
		?>	
		  <ul class="interpreter"> 
		<?php
		    while($result=mysqli_fetch_array($display_result)){
			  /*$id=$result['ID'];
			  $path=$result['Imgpath'];*/
			  echo"<li><img class='interpreter_img' src='".$result['Imgpath']."'alt='No Image'>";
			  echo "<h4 class='Info'>".'الاسم: '.$result['InterpreterName']."</h4>";
			  echo "<h4 class='Info'>".'اللغة: '.$result['Language']."</h4>";					
			  echo "<h4 class='Info'>".'المدينة: '.$result['City']."</h4>";
			  echo '<span class="fa fa-star checked"></span>
				  <span class="fa fa-star checked"></span>
				  <span class="fa fa-star checked"></span>
				  <span class="fa fa-star checked"></span>
				  <span class="fa fa-star checked"></span>';
			  echo "</li>";
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
