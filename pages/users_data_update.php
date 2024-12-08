<html dir="rtl" lang="en">
  <head>
    <title>Users Data Update</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"/> <!--For Social Icons-->
  </head>    
  
  <body>
    <div class="homePage">
      <div class="navigation">
        <div>
          <a href="admin.php" target="_self"><img class="logo" src="../logo/logo.jpg" alt="Something Wrong!"/></a>
        </div>
          
        <div class="interpreters"><a href="admin.php">الصفحة الرئيسية</a></div>
        <?php
          session_start();
            if(!empty($_SESSION['Usertype'])){
              $UserID=$_GET['ID'];
			        $UserName=$_SESSION['Fullname'];
			        $UserEmail=$_SESSION['Email'];
              ?>
              <div class="who_are_we"> <a href="users_data.php">بيانات المستخدمين</a></div>
			        <div class="my_sessions"><a href="interpreters_data.php">بيانات المترجمين</a></div>
			        <div class="comments"><a href="comments.php">التعليقات</a></div>

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
              <div class="interpreter_account"><a href="registration_interpreter.php">تسجيل كمترجم</a></div>

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
              if($_SESSION['Usertype']=="admin")
              {            
                  $DB_con=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($DB_con));
                  $check_user=mysqli_query($DB_con,"select * from users where ID = $UserID") or die(mysqli_error($DB_con));
                  $result=mysqli_fetch_array($check_user);
            
                  $Fullname=$result['Fullname'];
                  $City=$result['City'];
                  $Email=$result['Email'];
                  $Password=$result['Password'];
                  $Path=$result['Imgpath'];
              ?>
                
                <center>
                <form class="Form" name="update" action="users_data_update_code.php" method="post" enctype="multipart/form-data">
                  <span class="label1">تعديل بيانات المستخدم</span><br>
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
                      <td><br><b style="color:black">البريد الإلكتروني:</b></td>
                      <td><br><input type="text" name="Email" value="<?php echo $Email ?>"/></td>
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
                
                  <input type="hidden" name="ID" value="<?php echo $UserID ?>"/><br><br>
                  <input type="hidden" name="Imgpath" value="<?php echo $Path ?>"/>
                </form>
                </center>
               
                <?php }
                 else header("location: login.php")
            ?>
        </div>
      </div> 
    </div>
  </body>
</html>
