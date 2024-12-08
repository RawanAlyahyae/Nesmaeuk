<html dir="rtl" lang="en">
  <head>
    <title>Options Update Page</title>
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
          if(!empty($_SESSION['Usertype'])){
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

            else{
        ?>
              <div class="login">
                <div class="sub_login"><a class="link" href="login.php">تسجيل دخول</a></div>
              </div>

              <div class="who_not_login"><a href="about_us.php">من نحن</a></div>
              <div class="contacts_us"><a href="contact_us.php">تواصل معنا</a></div>

              <div class="user_account"><a href="registration_user.php">تسجيل كمستخدم</a></div>

              <div class="create_account">
                <div class="sub_create_account"><a class="link" href="registration_user.php">إنشاء حساب</a></div>
              </div>
		    <?php	
					  }
		    ?>
      </div>

      <div class="rectangle1">
        <div class="rectangle12">
          <center>
            <br>
            <?php
              if(!empty($_SESSION['Usertype']))
              {            
                  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
                  $check_interpreter=mysqli_query($DB_con,"select * from users where ID = $InterpreterID") or die(mysqli_error($DB_con));
                  $result=mysqli_fetch_array($check_interpreter);
            
                  $Fullname=$result['Fullname'];
                  $City=$result['City'];
                  $Email=$result['Email'];
                  $Password=$result['Password'];
                  $Path=$result['Imgpath'];
              ?>
                
                <center>
                <form class="Form" name="update" action="options_interpreter_update_code.php" method="post" enctype="multipart/form-data">
                  <span class="label1">تعديل بياناتك</span><br>
                  <table>
                    <tr><br><br>
                      <td><b style="color:black">اسم المستخدم:</b></td>
                      <td><input type="text" name="Fullname" value="<?php echo $Fullname ?>"/></td>
                    </tr>
                      
                    <tr>
                      <td><br><b style="color:black">المدينة :</b></td>
                      <td><br><input type="text" name="City" value="<?php echo $City ?>"/></td>
                    </tr>

                    <tr>
                      <td><br><b style="color:black">كلمة المرور:</b></td>
                      <td><br><input type="text" name="Password" value="<?php echo $Password ?>" minlength="9" maxlength="15"/></td>
                    </tr>
                  </table>
                  
                  <br>
                  <img class="update_img" src ='<?php echo $Path ?>'><br><br>
                  <font color="red">تغيير الصورة</font><br><br>
                  
                  <input type="file" name="update_img"><br><br>
                  <input class="Update" type="submit" value="حفظ البيانات">
                
                  <input type="hidden" name="ID" value="<?php echo $InterpreterID ?>"/><br><br>
                  <input type="hidden" name="Email" value="<?php echo $Email ?>"/><br><br>
                  <input type="hidden" name="Imgpath" value="<?php echo $Path ?>"/>
                </form>
                </center>
               
                <?php }
                 else header("location: options_interpreter.php")
            ?>
        </div>
      </div>
        
      <div class="rectangle13">  
        <footer>
          <img class="nesmaeukImg_options" src="../img/image.jpg"/>
          <h1 class="Para_Footer1">كيف يمكننا المساعدة؟</h1>
          <h2 class="Para_Footer2">للتواصل عبر واتساب: 0550723934<br>
          للتواصل عبر تويتر: nesmaeuk.sa<br>
          للتواصل عبر البريد: nesmaeuk435@gmail.com</h2>
        
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
