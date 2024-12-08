<html dir="rtl" lang="en">
  <head>
    <title>Interpreter Home Page</title>
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
		      if($_SESSION['Usertype']=="interpreter"){
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
            else header("location: login.php");
		    ?>
      </div>

      <div class="rectangle17">
        <div class="rectangle19">
        <?php 
		      $db_conn=mysqli_connect("localhost","root","","nesmaeuk") or die(mysqli_error($db_conn));
		      $check_interpreters=mysqli_query($db_conn,"select * from sessions where InterpreterEmail='$InterpreterEmail'") or die(mysqli_error($db_conn));
		  
		      if($_SESSION['Usertype']=="interpreter"){
	      ?>
          <center>
            <table class="Users_Table" border="5" cellspacing="5" cellpadding="5">
              <tr class='Users_Table_Row'>
              <th>رقم الجلسة</th>
              <th>اسم المستخدم</th>
              <th>بريد المستخدم</th>
              <th>تاريخ الجلسة</th>
              <th>توقيت الجلسة</th>
              <th>صورة المستخدم</th>
              <th>التحكم في الجلسة</th>
              <th>حالة الطلب</th>
              </tr>
              
        <?php
              while($result=mysqli_fetch_array($check_interpreters)){
                $SessionID=$result['ID'];
                $Path=$result['UserPath'];
                $Email=$result['InterpreterEmail'];
                $date=$result['Date'];
                $time=$result['Time'];
                $formattedTime = date("g:i a", strtotime($time));

                echo "<tr class= 'Users_Table' ><td>".$result['ID']."</td>";
                echo "<td>".$result['UserName']."</td>";
                echo "<td>".$result['UserEmail']."</td>";
                echo "<td>".$result['Date']."</td>";
                echo "<td>".$formattedTime."</td>";

                echo "<td><img src='".$result['UserPath']. "' alt='No Image' height='90px' width='95px'></td>";

                echo"<td><a href='request_accept.php?ID=$SessionID & Email=$Email'><button class='Update_Button'>قبول</button></a>";
                echo"<a href='request_reject.php?ID=$SessionID'><button class='Delete_Button'>رفض</button></a></td>";
                echo "<td>".$result['Status']."</td></tr>";
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
