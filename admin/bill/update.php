	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Cập nhật sản phẩm</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
        <div class="row-form">
            <div class="row-title text-center" style="margin-top:20px;">
                <h3>Cập nhật sản phẩm</h3>
            </div>
            <div class="container">
                <?php 
                    if(is_array($bill)){
                        extract($bill);
                        // var_dump($sanpham);
                    }
                    // $ha="../upload/".$img;
                    // if (is_file($ha)) {
                    //    $hinh="<img src='".$ha."' height='150' width='45%'>";
                    // }else{
                    //     $hinh="Không tìm thấy hình";
                    // }
                ?>
                <form action="index.php?act=updatedh" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pwd">Mã đơn hàng</label>
                        <input type="text" name="ma_dh" id="" class=" form-control" value="<?php echo $bill[0]['ma_dh']?>">
                    </div>
                    <div class="form-group">
                        <label>Trạng thái thanh toán</label>
                        <label><input name="trang_thai_tt" type="radio" <?php if ($bill[0]['trang_thai_tt'] == 0) echo 'checked'; ?> <?=($bill[0]['trang_thai_tt']==0)? "":"disabled"?> value="0">Chưa thanh toán</label>
                        <label><input name="trang_thai_tt" type="radio" <?php if ($bill[0]['trang_thai_tt'] == 1) echo 'checked'; ?> value="1">Đã thanh toán</label>
                        <!-- <input type="submit" name="addgiohang" value="<?=$sanpham[0]['trang_thai']? " Đặt hàng":"Hết hàng"?>" <?=$sanpham[0]['trang_thai']? "":"disabled"?>> -->
                    </div>
                    <div class="form-group">
                        <label>Trạng thái giao hàng</label>
                        <label><input name="trang_thai_gh" type="radio" <?php if ($bill[0]['trang_thai_gh'] == 0) echo 'checked'; ?> <?=($bill[0]['trang_thai_gh']==0)? "":"disabled"?> value="0">Chưa giao hàng</label>
                        <label><input name="trang_thai_gh" type="radio" <?php if ($bill[0]['trang_thai_gh'] == 1) echo 'checked'; ?> value="1">Đã giao hàng</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="id" value="<?php echo $bill[0]['ma_dh']?>">
                        <input type="submit" value="Cập nhật" name="capnhap" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Nhập lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <a href="index.php?act=donhanglist"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
                    </div>
                    <!-- <input type="submit" value="Thêm mới" name="themmoi" class="btn btn-default border-0 " style="margin-bottom:15px; width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    <input type="reset" value="Nhập lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    <a href="index.php?act=lisdm"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a> -->
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>