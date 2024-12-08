<html dir="rtl" lang="en">
  <head>
    <title>About Us Page</title>
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
            if(!empty($_SESSION['Usertype'])){
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

      <div class="rectangle1"></div>
        <div class="rectangle3">
          <img class="nesmaeukImg_about" src="../img/image.jpg"/>
        </div>
        
        <div class="parag1_about">مرحبًا بكم في نسمعك</div>
        <div class="parag3_about">
            نحن منصة رائدة متخصصة في توفير معلمين <br>
            خصوصيين معتمدين لتدريس وترجمة لغة الإشارة. <br>
            هدفنا هو توفير عدد كبير من المترجمين والسماح <br>
            للمستخدم باختيار المترجم المناسب بسهولة وكفاءة، <br>
            وتعزيز التواصل بين الناطقين وغير الناطقين.
        </div>
        
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
