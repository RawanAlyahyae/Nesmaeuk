<html dir="rtl" lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Create Account (User)</title>
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
        
        <div class="container_user">
          <h1 class="form-title">حساب جديد (مستخدم)</h1>
          <form action="registration_user_code.php" method="post" enctype="multipart/form-data">

            <div class="main-user-info">
              <div class="user-input-box">
                <label for="Fullname"><span class="star">*</span>الاسم الثلاثي</label>
                <input type="text" id="Fullname" name="Fullname" placeholder="الاسم" required/>
              </div>

              <div class="user-input-box">
                <label for="City"><span class="star">*</span>المدينة</label>
                <input type="text" id="City" name="City" placeholder="المدينة" required/>
              </div>

              <div class="user-input-box">
                <label for="Email"><span class="star">*</span>البريد الإلكتروني</label>
                <input type="Email" id="Email" name="Email" placeholder="البريد الإلكتروني" required/>
              </div>

              <div class="user-input-box">
                <label for="Password"><span class="star">*</span>كلمة المرور</label>
                <input type="Password" id="Password" name="Password" placeholder="كلمة السر" required/>
                <div id="passwordMessage" style="color: red;"></div> <!-- Message area for password validation -->
              </div>    
            </div>

            <input type="checkbox" Name="G" required/> من خلال تسجيلك حساب جديد فأنت توافق على  
            <a href="terms&conditions.php" target="_blank"><b>الشروط والأحكام</b></a><br><br>

            <center>
              <div class="form-submit-btn">
                <input type="submit" class="submit_account" value="تسجيل الحساب">
              </div><br>
              <a href="login.php" style="font-size: 18px;">تسجيل دخول</a>
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
    <script>
      document.querySelector("form").addEventListener("submit", function(event) {
          const password = document.getElementById("Password").value;
          const passwordMessage = document.getElementById("passwordMessage");
          
          // Password validation criteria
          const hasUpperCase = /[A-Z]/.test(password);
          const hasLowerCase = /[a-z]/.test(password);
          const hasNumbers = /\d/.test(password);
          const hasSpecialChars = /[!@#$%^&*(),.?":{}|<>]/.test(password);
          const isValidLength = password.length >= 9;

          // Clear previous messages
          passwordMessage.innerHTML = "";

          // Validate password
          if (!hasUpperCase) {
              passwordMessage.innerHTML += "يجب أن تحتوي كلمة المرور على حرف كبير على الأقل.<br>";
          }
          if (!hasLowerCase) {
              passwordMessage.innerHTML += "يجب أن تحتوي كلمة المرور على حرف صغير على الأقل.<br>";
          }
          if (!hasNumbers) {
              passwordMessage.innerHTML += "يجب أن تحتوي كلمة المرور على رقم على الأقل.<br>";
          }
          if (!hasSpecialChars) {
              passwordMessage.innerHTML += "يجب أن تحتوي كلمة المرور على رمز خاص على الأقل.<br>";
          }
          if (!isValidLength) {
              passwordMessage.innerHTML += "يجب أن تكون كلمة المرور 9 أحرف على الأقل.<br>";
          }

          // Prevent form submission if validation fails
          if (!(hasUpperCase && hasLowerCase && hasNumbers && hasSpecialChars && isValidLength)) {
              event.preventDefault(); // Stop form submission
          }
      });
    </script>
  </body>
</html>
