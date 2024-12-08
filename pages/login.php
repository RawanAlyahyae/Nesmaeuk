<html dir="rtl" lang="en">
  <head>
    <title>Login Page</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"/> <!--For Social Icons-->  
  </head>    
    
  <body>
    <div class="homePage">
      <div class="navigation">
        <div>
          <a href="index.php" target="_self">
            <img class="logo" src="../logo/logo.jpg"/>
          </a>
        </div>
          
        <div class="home_page"><a href="home_user.php">الصفحة الرئيسية</a></div>
        <div class="interpreters"><a href="interpreters.php">المترجمون</a></div>
        <?php
          session_start();
            if(!empty($_SESSION['Usertype']))
            {
              header("location: logout.php");
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

      <div class="rectangle4">
        <div class="rectangle5">
          <img class="nesmaeukImg_register" src="../img/image.jpg"/>
        </div>
          
        <div class="container_login">
          <h1 class="form-title">تسجيل الدخول</h1>
          <form name="login" onsubmit= "return validateR()" action="login_code.php" method="post" enctype="multipart/form-data">
            <div class="main-user-info">
              <div class="user-input-box">
                <label for="Email"><span class="star">* </span>البريد الإلكتروني</label>
                <input type="Email" name="myemail" placeholder="البريد الإلكتروني" required/>
              </div>

              <div class="user-input-box">
                <label for="Password"><span class="star">* </span>كلمة المرور</label>
                <input type="Password" name="mypassword" placeholder="كلمة السر" minlength="9" maxlength="15" required/>
              </div>
            </div>

            <center>
              <div class="form-submit-btn">
                <input type="submit" class="submit_account" value="تسجيل دخول">
              </div><br>
            <span style="font-size: 18px;">هل نسيت كلمة المرور؟</span><br><br>
              <a href="registration_user.php" style="font-size: 18px;">إنشاء حساب جديد</a>
            </center>
          </form>
        </div>
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