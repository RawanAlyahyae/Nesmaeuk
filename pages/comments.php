<html dir="rtl" lang="en">
  <head>
    <title>Comments Page</title>
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
        <div class="rectangle21">
        <?php 
		      $db_conn=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($db_conn));
		      $check_interpreters=mysqli_query($db_conn,"select * from comments") or die(mysqli_error($db_conn));
		  
		      if($_SESSION['Usertype']=="admin"){
	      ?>
          <center>
            <table class="Users_Table" border="5" cellspacing="5" cellpadding="5">
              <tr class='Users_Table_Row'>
              <th>ID</th>
              <th>اسم المستخدم</th>
              <th>البريد الإلكتروني</th>
              <th>الموضوع</th>
              <th>التعليقات</th>
              <th>اتخاذ القرار</th>
              </tr>
              
        <?php
              while($result=mysqli_fetch_array($check_interpreters)){
                $ID=$result['ID'];
                $Email=$result['Email'];

                echo "<tr class= 'Users_Table' ><td>".$result['ID']."</td>";
                echo "<td>".$result['Fullname']."</td>";
                echo "<td>".$result['Email']."</td>";
                echo "<td>".$result['Subject']."</td>";
                echo "<td>".$result['Content']."</td>";

                echo"<td><a href='comment_delete.php?ID=$ID'><button class='Update_Button'>تم الحل</button></a>";
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
