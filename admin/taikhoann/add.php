	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Đăng ký</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Thêm tài khoản mới</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
    <div class="col d-flex justify-content-center">
					<div class="login_form_inner" style="width:60%;">
						<h3>Tạo tài khoản</h3>
						<form class="row login_form" action="index.php?act=addtk" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="fullname" placeholder="Họ tên" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Họ tên'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="user" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="pass" placeholder="Mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="tel" placeholder="Số điện thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số điện thoại'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="address" placeholder="Địa chỉ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ'" required>
							</div>
							<!-- <div class="col-md-12 form-group">
								<input type="reset" class="form-control" id="name" name="name" placeholder="Confirm" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm'">
							</div> -->
							<div class="col-md-12 form-group d-flex">
								<div class="creat_account">
									<input type="radio" name="role" value="1">
									<label for="f-option2">Admin</label>
								</div>
								<div class="creat_account" style="margin-left:40px;">
									<input type="radio" name="role" value="2" checked>
									<label for="f-option2">Nhân viên</label>
								</div>
							</div>
							<!--  -->
							<div class="col-md-12 form-group">
								<input type="submit" value="Thêm mới" class="primary-btn" name="themtk"></input>
								<!-- <a href="#">Forgot Password?</a> -->
							</div>
						</form>
						<h2 class="thongbao" style="color: red;font-size:15px;"> 
							<?php
								if(isset($thongbao)&&($thongbao!="")){
									echo $thongbao;
								}
							?>
						</h2>
					</div>
				</div>
	<!--================End Login Box Area =================-->
