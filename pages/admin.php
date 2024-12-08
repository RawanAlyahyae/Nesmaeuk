<html dir="rtl" lang="en">
  <head>
    <title>Admin Page</title>
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

      <div class="rectangle9">
      <center>
        <div class="rectangle14"> 
          <?php
            if($_SESSION['Usertype']=="admin")
            {
              $db_conn=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($db_conn));

              $check_users = "SELECT * from users where (ID > 0) && Usertype='user'";
              $result = mysqli_query($db_conn,$check_users);
              $count = mysqli_num_rows($result);
            
              if($count>0){	
                echo "<br><h1 class='admin_no'>عدد المستخدمين</h1>";
                echo "<h1 class='admin_no1'>$count</h1>";
              }
          ?>
        </div>

              <div class="rectangle15">
          <?php               
                $check_sessions = "SELECT * from sessions where (ID > 0)";
                $result = mysqli_query($db_conn,$check_sessions);
                $count = mysqli_num_rows($result);

                if($count>0){	
                  echo "<br><h1 class='admin_no'>عدد الجلسات</h1>";
                  echo "<h1 class='admin_no1'>$count</h1>";
                }
          ?>           
              </div>
             
              <div class="rectangle16"> 
          <?php
                $check_comments = "SELECT * from comments where (ID > 0)";
                $result = mysqli_query($db_conn,$check_comments);
                $count = mysqli_num_rows($result);
              
                if($count>0){	
                  echo "<br><h1 class='admin_no'>عدد التعليقات</h1>";
                  echo "<h1 class='admin_no1'>$count</h1>";
                }
          ?>
              </div> 

              <div class="rectangle20"> 
          <?php
                $check_interpreters = "SELECT * from interpreters where (ID > 0)";
                $result = mysqli_query($db_conn,$check_interpreters);
                $count = mysqli_num_rows($result);
              
                if($count>0){	
                  echo "<br><h1 class='admin_no'>عدد المترجمين</h1>";
                  echo "<h1 class='admin_no1'>$count</h1>";
                }
          ?>
              </div>
          <?php 
            }
              else
                header ("location: login.php");
          ?>
      </center>
      </div>
        
      <div class="rectangle11">  
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
