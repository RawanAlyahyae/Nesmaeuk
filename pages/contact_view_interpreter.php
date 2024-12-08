<html dir="rtl" lang="en">
  <head>
    <title>Contact Us</title>
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

	  <div class="rectangle1">
	    <div class="rectangle12">
		  <center>			
			<form name="frmContact" method="post" class="" action="" enctype="multipart/form-data" onsubmit="return validateContactForm()">
			  <br><br><br><span class="label1">تواصل معنا الآن...</span><br><br><br><br><br>
			  <div class="input-row">
			    <table>
                  <tr>
                    <td><b style="color:black">اسم المستخدم</b></td>
                    <td><input type="text" name="Fullname" id="Fullname" required /></td>
                  </tr>
                    
                  <tr>
                    <td><br><b style="color:black">البريد الإلكتروني</b></td>
                    <td><br><input type="text" name="Email" id="Email" required /></td>
                  </tr>

				  <tr>
                    <td><br><b style="color:black">الموضوع</b></td>
                    <td><br><input type="text" name="subject" id="subject" required /></td>
                  </tr>
                      
                  <tr>
                    <td><br><b style="color:black">وصف المشكلة</b></td>
                    <td><br><textarea name="content" id="content" cols="30" rows="5" required></textarea></td>
                  </tr>
                </table>	 
							
			  <div class="btn-submit1">
				<input type="submit" name="send" class="btn-submit" value="إرسال"/>
			    <div id="statusMessage"> 
		<?php
				  if (! empty($message)) {
		?>
				    <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
		<?php
				  }
		?>
		        </div>
			  </div>
		    </form>
		  </center>
		  <img class="nesmaeukImg_contact" src="../img/image.jpg"/>
		</div>
	  
		<div class="rectangle22">  
		  <footer>
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
	</div>
		
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	  <script type="text/javascript">
	  function validateContactForm() {
		var valid = true;
		
		$(".info").html("");
		$(".input-field").css('border', '#e66262 1px solid');

		var Fullname = $("#Fullname").val();
		var Email = $("#Email").val();
		var subject = $("#subject").val();
		var content = $("#content").val();
				
		if (Fullname == "") {
		  $("#Fullname-info").html("فارغ!");
		  $("#Fullname").css('border', '#e66262 1px solid');
		  valid = false;
		}

		if (userEmail == "") {
		  $("#Email-info").html("فارغ!");
		  $("#Email").css('border', '#e66262 1px solid');
		  valid = false;
		}

		if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
		{
		  $("#Email-info").html("عنوان البريد الإلكتروني غير صالح!");
		  $("#Email").css('border', '#e66262 1px solid');
		  valid = false;
		}

		if (subject == "") {
		  $("#subject-info").html("فارغ!");
		  $("#subject").css('border', '#e66262 1px solid');
		  valid = false;
		}

		if (content == "") {
		  $("#userMessage-info").html("فارغ!");
		  $("#content").css('border', '#e66262 1px solid');
		  valid = false;
		}

		return valid;
	  }
	</script>
  </body>
</html>