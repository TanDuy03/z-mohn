	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Cập nhật người dùng</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
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
						<img class="img-fluid" src="img/capnhat_tk.jpg" alt="">
						<div class="hover">
							<h4>Thông tin cá nhân của bạn cần chỉnh sửa?</h4>
							<p>Cập nhật thông tin cá nhân, họ tên, tên người dùng, địa chỉ, số điện thoại. Để thông tin giao hàng của bạn luôn chính xác 100%</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Cập nhật người dùng</h3>
                        <?php
                            $sql = "SELECT * FROM tai_khoan WHERE user = '".$_SESSION['user']."'";
                            extract(pdo_query_one($sql));
                        ?>
                        <form action="index.php?act=capnhat_tk" method="POST" enctype="multipart/form-data" class="row login_form requires-validation">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="fullname" placeholder="Họ tên" value="<?=$ho_ten?>">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="user" placeholder="Username" value="<?=$user?>">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="password" class="form-control" name="pass" placeholder="Mật khẩu" value="<?=$pass?>">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?=$email?>" disabled>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Địa chỉ" value="<?=$address?>">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="tel" placeholder="Số điện thoại" value="<?=$tel?>">
                                </div>
            <!-- <div class="d-flex justify-content-center">
                <input type="submit" value="Cập nhập" name="capnhap" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;margin-bottom:15px">
            </div> -->
                            
                                <div class="d-flex justify-content-center">
                                    <input type="hidden" name="ma_tk" value="<?=$ma_tk?>">
                                    <input type="hidden" name="role" value="<?=$role?>">
                                    <input type="submit" value="Cập nhật" name="capnhap" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;margin-bottom:15px">
                        </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
    