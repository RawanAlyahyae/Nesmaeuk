<html dir="rtl" lang="en">
  <head>
    <title>Interpreters Data Page</title>
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

      <div class="rectangle17">
        <div class="rectangle19">
        <?php 
		      $db_conn=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($db_conn));
		      $check_interpreters=mysqli_query($db_conn,"select * from interpreters") or die(mysqli_error($db_conn));
		  
		      if($_SESSION['Usertype']=="admin"){
	      ?>
          <center>
            <table class="Users_Table" border="5" cellspacing="5" cellpadding="5">
              <tr class='Users_Table_Row'>
              <th>ID</th>
              <th>اسم المترجم</th>
              <th>المدينة</th>
              <th>البريد الإلكتروني</th>
              <th>كلمة المرور</th>
              <th>رقم الرخصة</th>
              <th>صورة الملف الشخصي</th>
              <th>التحكم في بيانات المترجم</th>
              </tr>
              
        <?php
              while($result=mysqli_fetch_array($check_interpreters)){
                $InterpreterID=$result['ID'];
                $Path=$result['Imgpath'];
                $Email=$result['Email'];

                echo "<tr class= 'Users_Table' ><td>".$result['ID']."</td>";
                echo "<td>".$result['InterpreterName']."</td>";
                echo "<td>".$result['City']."</td>";
                echo "<td>".$result['Email']."</td>";
                echo "<td>".$result['Password']."</td>";
                echo "<td>".$result['ID_No']."</td>";
                echo "<td><img src='".$result['Imgpath']. "' alt='No Image' height='90px' width='95px'></td>";

                echo"<td><a href='interpreters_data_update.php?ID=$InterpreterID & Email=$Email'><button class='Update_Button'>تعديل</button></a>";
                echo"<a href='interpreters_data_delete.php?Email=$Email'><button class='Delete_Button'>حذف</button></a></td></tr>";
              }
        ?>	
              
        <?php
            }
            else
              header("location: Login.php");
        ?>
            </table></br>
            </center>	
        </div>
      </div>
    </div>
  </body>
</html>
