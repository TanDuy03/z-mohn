	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Mã Giảm Giá</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Thêm Mã Giảm Giá</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
    <div class="row-form">
        <div class="row-title text-center" style="margin-top:20px;">
            <h3>Thêm mã giảm giá mới</h3>
        </div>
        <div class="container">
                <form action="index.php?act=addmgg" method="post">
                    <div class="form-group">
                        <label for="email">Mã giảm</label>
                        <input placeholder="Random" type="text" name="ma_gg" id="" disabled class=" form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ngày bắt đầu</label>
                        <input type="date" name="ngay_bd" id="" class=" form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ngày Kết Thúc</label>
                        <input type="date" name="ngay_kt" id="" class=" form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giá trị</label>
                        <input type="text" name="giatri" id="" class=" form-control" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Thêm mới" name="themma" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Đặt lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <a href="index.php?act=dsmgg"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
                    </div>
                    <!-- <input type="submit" value="Thêm mới" name="themmoi" class="btn btn-default border-0 " style="margin-bottom:15px; width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    <input type="reset" value="Nhập lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    <a href="index.php?act=lisdm"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a> -->
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo '<h2 style="font-size:15px; color:red;text-align:center;" >'.$thongbao.'</h2>';
                    ?>
                </form>
        </div>
	</div>
	<!--================End Login Box Area =================-->
