	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Đăng ký</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Đăng ký</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img" style="width:100%;">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>Bạn đã có tài khoản thành viên?</h4>
							<p>Đăng nhập để sử dụng những ưu đãi tuyệt vời dành cho bạn nào</p>
							<a class="primary-btn" href="index.php?act=login">Đăng nhập ngay</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Tạo tài khoản thành viên</h3>
						<
						<form class="row login_form requires-validation" action="index.php?act=signup" method="post" id="contactForm" novalidate="novalidate" >
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email" placeholder="Nhập Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Email'" required>
								<!-- <div class="valid-feedback">Email field is valid!</div> -->
								<div class="invalid-feedback">Không được để trống Email!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="fullname" placeholder="Họ tên" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Họ tên'" required>
								<!-- <div class="valid-feedback">Username field is valid!</div> -->
								<div class="invalid-feedback">Không được để trống họ tên!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="user" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
								<!-- <div class="valid-feedback">Username field is valid!</div> -->
								<div class="invalid-feedback">Không được để trống username!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="pass" placeholder="Mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'" required>
								<!-- <div class="valid-feedback">Password field is valid!</div> -->
								<div class="invalid-feedback">Không được để trống mật khẩu!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="tel" placeholder="Số điện thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số điện thoại'" required minlength="5">
								<!-- <div class="valid-feedback">Phone</div> -->
								<div class="invalid-feedback">Không được để trống số điện thoại!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="address" placeholder="Địa chỉ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ'" required>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account form-check">
									<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
									<label class="form-check-label">Tôi đồng ý với các điều khoản sử dụng</label>
									<div class="invalid-feedback">Vui lòng xác nhận rằng tất cả dữ liệu đã nhập đều chính xác!</div>
									<!-- <input type="checkbox" id="f-option2" name="selector" class="form-check-input">
									<label for="f-option2" class="form-check-label">I agree to the terms of use</label> -->
								</div>
							</div>
							<div class="col-md-12 form-group form-check">
								<input type="submit" value="Đăng ký" class="primary-btn" name="dangky" id="submit"></input>
								<div class="invalid-feedback">Vui lòng xác nhận rằng tất cả dữ liệu đã nhập đều chính xác!</div>
							</div>
						</form>
						<!-- Kiểm tra tính hợp lệ -->
						<script>
							(function () {
							'use strict'
							const forms = document.querySelectorAll('.requires-validation')
							Array.from(forms)
							.forEach(function (form) {
								form.addEventListener('submit', function (event) {
								if (!form.checkValidity()) {
									event.preventDefault()
									event.stopPropagation()
								}

								form.classList.add('was-validated')
								}, false)
							})
							})()
						</script>
						<!--  -->
						<h2 class="thongbao" style="color: red;font-size:15px;"> 
							<?php
								if(isset($thongbao)&&($thongbao!="")){
									echo $thongbao;
								}
							?>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->