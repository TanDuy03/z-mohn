<?php
     $loi="";
    if(isset($_POST['nutguiyeucau'])==true){
      $email = $_POST['email'];
      $conn = new PDO("mysql:host=localhost;dbname=shoes26_store;charset=utf8","root","");
      $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="SELECT * FROM tai_khoan WHERE email = ?";
      $stmt = $conn ->prepare($sql);
      $stmt -> execute ([$email]);
      //echo $count = $stmt -> rowCount();
      if($count==0){
        $loi = "Email bạn chưa đăng ký thành viên nhé!";
      } else{
        $matkhaumoi= substr(md5(rand(0,999999)) , 0,8);
        $sql="UPDATE tai_khoan set pass = ? where email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$matkhaumoi,$email]);
        //echo "Đã cập nhập";
        GuiMatKhauMoi($email,$matkhaumoi);
      }
    };
  ?>
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Đăng nhập</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Quên mật khẩu</a>
                </nav>
            </div>
        </div>
		</div>
</section>  
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img" style="width:100%;">
						<img class="img-fluid" src="img/quen_mk.png" alt="">
						<div class="hover">
							<h4>Bạn quên mật khẩu?</h4>
							<p>Điền email để chúng mình gửi lại mật khẩu mới cho bạn nhé!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Quên mật khẩu</h3>
            <form class="row login_form requires-validation"  method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
                <input type="email" placeholder="Email" class="form-control" name="email" value="<?php if(isset($email)==true) echo $email?>" required> <br>
								<div class="invalid-feedback">Không được để trống!</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="nutgui" class="primary-btn" name="nutguiyeucau">Gửi</button>	
							</div>
              <h2 class="thongbao" style="color: red;font-size:15px;"> 
                <?php
                    if($loi != ""){ ?>
                    <?= $loi?>
                <?php } ?>
              </h2>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>  
 
  <?php
    function GuiMatKhauMoi($email,$pass){
      require "PHPMailer-master/PHPMailer-master/src/PHPMailer.php"; 
      require "PHPMailer-master/PHPMailer-master/src/SMTP.php"; 
      require 'PHPMailer-master/PHPMailer-master/src/Exception.php'; 
      $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
      try {
          $mail->SMTPDebug = 0; //0,1,2: chế độ debug
          $mail->isSMTP();  
          $mail->CharSet  = "utf-8";
          $mail->Host = 'smtp.gmail.com';  //SMTP servers
          $mail->SMTPAuth = true; // Enable authentication
          $mail->Username = 'thuanhvps24572@fpt.edu.vn'; // SMTP username
          $mail->Password = 'hycuxcixiyvlyvnz';   // SMTP password
          $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
          $mail->Port = 465;  // port to connect to                
          $mail->setFrom('thuanhvps24572@fpt.edu.vn', 'Thuận' ); 
          $mail->addAddress($email); 
          $mail->isHTML(true);  // Set email format to HTML
          $mail->Subject = 'Thư coi lại pass';
          $noidungthu = "Mật khẩu của bạn là {$pass}"; 
          $mail->Body = $noidungthu;
          $mail->smtpConnect( array(
              "ssl" => array(
                  "verify_peer" => false,
                  "verify_peer_name" => false,
                  "allow_self_signed" => true
              )
          ));
          $mail->send();
          echo 'Đã gửi mail xong';
          return true;
      } catch (Exception $e) {
          echo 'Error: ', $mail->ErrorInfo;
          return false;
      }
    }  
  ?>
  <script>alert('Gửi mail thành công');
      window.location=quenmk.php;
  </script>