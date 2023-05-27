	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Thêm sản phẩm</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
        <div class="row-form">
            <div class="row-title text-center" style="margin-top:20px;">
                <h3>Thêm Sản Phẩm Mới</h3>
            </div>
            <div class="container">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Danh mục</label> <br>
                        <select name="iddm" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example" required>
                            <option>Chọn danh mục</option>
                            <?php 
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo'<option value="'.$ma_loai.'" >'.$ten_loai.'</option>';
                                }
                            ?>
                        </select>
                    </div> <br><br>
                    <div class="form-group">
                        <label for="pwd">Mã sản phẩm</label>
                        <input type="text" name="ma_hh" value="Auto Increment" id="" class=" form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tên sản phẩm</label>
                        <input type="search" name="tensp" id="" class=" form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giá</label>
                        <input type="text" name="giasp" id="" class=" form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giá giảm</label>
                        <input type="text" name="giaspnew" id="" class=" form-control">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Hình ảnh</label> <br>
                        <input type="file" name="hinh" id="" class="" multiple required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="5" class=" form-control" required></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Thêm Mới" name="themmoi" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Nhập Lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <a href="index.php?act=listsp"><input type="button" value="Danh Sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
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
    </div>

