<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Z-Mohn</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo_Z.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item visited"><a class="nav-link" href="index.php">Trang chủ</a></li>
							
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Cửa hàng</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="index.php?act=category">Sản phẩm</a></li>
								<!--	<li class="nav-item"><a class="nav-link" href="index.php?act=single-product">Product Details</a></li>-->
									<li class="nav-item"><a class="nav-link" href="index.php?act=checkout">Thanh toán</a></li>
									<li class="nav-item"><a class="nav-link" href="index.php?act=cart">Giỏ hàng</a></li>
									<?php
										if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
											
											echo'<li class="nav-item"><a class="nav-link" href="index.php?act=shippingbill">Đơn hàng đang giao</a></li>';
											echo'<li class="nav-item"><a class="nav-link" href="index.php?act=historybill">Lịch sử mua hàng</a></li>';
										}
									?>
										
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="index.php?act=blog">Blog</a></li>
							<!-- <li class="nav-item submenu dropdown">
								<a href="index.php?act=blog" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								 <ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="index.php?act=blog">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="index.php?act=single-blog">Blog Details</a></li>
								</ul> 
							</li> -->
							<li class="nav-item submenu dropdown">
								<?php
										if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
											echo '<a href="index.php?act=suatk&user='.$_SESSION['user'].'" class="nav-link"><span style="color:red;font-weight:800;"> '.$_SESSION['user'].'</span></a>';
											echo'<li class="nav-item"><a href="index.php?act=thoat" class="nav-link"><span>Đăng xuất</span></a></li>';
										}else{
									?>
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Thành viên</a>
								<ul class="dropdown-menu">
											<li class="nav-item"><a class="nav-link" href="index.php?act=login">Đăng nhập</a></li>
											<li class="nav-item"><a class="nav-link" href="index.php?act=signup">Đăng ký</a></li>	
										
								</ul>
							</li> <?php } ?>
							<li class="nav-item"><a class="nav-link" href="index.php?act=contact">Liên hệ</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<?php
								if(isset($_SESSION['giohang'])&& count($_SESSION['giohang'],1)>0){
									$dem = count($_SESSION['giohang']);
									echo '
										<li class="nav-link"><a href="index.php?act=cart" class="cart"><span class="ti-bag"></span></a>
											<span class="badge text-secondary rounded-circle" style="padding-bottom: 2px;">'.$dem.'</span>
										</li>
									
									';
								}else{
									echo '
										<li class="nav-link"><a href="index.php?act=cart" class="cart"><span class="ti-bag"></span></a>
											<span class="badge text-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
										</li>
									';	
									}
								
							?>
							<li class="nav-link">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
