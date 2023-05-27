	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Đăng nhập</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Đăng nhập</a>
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
							<h4>Lần đầu tiên bạn vào trang web?</h4>
							<p>Bạn có thể sở hữu ngay một tài khoản thành viên, rất nhiều ưu đãi dành cho bạn!</p>
							<a class="primary-btn" href="index.php?act=signup">Đăng kí ngay</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Đăng nhập</h3>
						
						
						<?php

							if(isset($_SESSION['user'])){
								extract($_SESSION['user']);
								// var_dump($user);}
						?>
						<?php

							}else{


						?>
						<form class="row login_form requires-validation" action="index.php?act=login" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="user" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
								<div class="invalid-feedback">Không được để trống!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
								<div class="invalid-feedback">Không được để trống!</div>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account form-check">
                                    <div class="col-md-12 form-group">
									    <input type="checkbox" id="invalidCheck"  class="form-check-input">
									    <label for="f-option2" class="form-check-label">Nhớ mật khẩu</label>
                                        <div class="invalid-feedback">Vui lòng xác nhận rằng tất cả dữ liệu đã nhập đều chính xác!</div>
                                    </div>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="submit" value="Đăng nhập" class="primary-btn" name="dangnhap" id="submit"></input>
								<a href="index.php?act=quenmk">Quên mật khẩu?</a>
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
						<?php }?>
						<h2 class="thongbao" style="color: red;font-size:15px;"> 
							<?php
								if(isset($thongbao)&&($thongbao!="")){
								echo $thongbao;
								}
							?>
							<?php
								if(isset($_GET['error'])==true){
									echo '<p>Sai mật khẩu</p>';
								}
							?>
						</h2>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
