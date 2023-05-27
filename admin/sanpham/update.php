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
                    if(is_array($sanpham)){
                        extract($sanpham);
                        // var_dump($sanpham);
                    }
                    // $ha="../upload/".$img;
                    // if (is_file($ha)) {
                    //    $hinh="<img src='".$ha."' height='150' width='45%'>";
                    // }else{
                    //     $hinh="Không tìm thấy hình";
                    // }
                ?>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <select name="iddm" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
                            <option selected value="0">Chọn danh mục</option>
                            <?php 
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    if($iddm==$id) echo'<option value="'.$id.'" selected>'.$ten_loai.'</option>';
                                    else echo'<option value="'.$id.'" >'.$ten_loai.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tên sản phẩm</label>
                        <input type="text" name="tensp" id="" class=" form-control" value="<?php echo $sanpham[0]['name']?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giá</label>
                        <input type="text" name="giasp" id="" class=" form-control" value="<?php echo $sanpham[0]['price_old']?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giá giảm</label>
                        <input type="text" name="giaspnew" id="" class=" form-control" value="<?php echo $sanpham[0]['price_new']?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Hình ảnh</label><br>
                        <input type="file" name="hinh" id="" class="" value="">
                        <?php echo $sanpham[0]['img']?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Trạng thái</label><br>
                        <label><input name="trang_thai" type="radio" <?php if ($sanpham[0]['trang_thai'] == 0) echo 'checked'; ?> value="0">Hết hàng</label>
                        <label><input name="trang_thai" type="radio" <?php if ($sanpham[0]['trang_thai'] == 1) echo 'checked'; ?> value="1">Còn hàng</label>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="10" class=" form-control" value=""><?php echo $sanpham[0]['mota']?></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="id" value="<?php echo $sanpham[0]['id']?>">
                        <input type="submit" value="Cập nhật" name="capnhap" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Cài đặt" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
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