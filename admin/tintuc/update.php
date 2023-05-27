	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Cập nhật Blog</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
        <div class="row-form">
            <div class="row-title text-center" style="margin-top:20px;">
                <h3>Cập nhật Blog</h3>
            </div>
            <div class="container">
                <?php 
                    if(is_array($tintuc)){
                        extract($tintuc);
                        // var_dump($tintuc);
                    }
                ?>
                <form action="index.php?act=updatett" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pwd">Tên Blog</label>
                        <input type="text" name="name" id="" class=" form-control" value="<?php echo $tintuc[0]['name']?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Hình ảnh</label><br>
                        <input type="file" name="hinh" id="" class="" value="">
                        <?php echo $tintuc[0]['img']?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="10" class=" form-control" value=""><?php echo $tintuc[0]['mota']?></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label for="pwd">Ngày đăng</label>
                        <input type="date" name="ngaydang" id="" class=" form-control" value="<?php echo $tintuc[0]['ngaydang']?>">
                    </div> -->
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="id" value="<?php echo $tintuc[0]['id']?>">
                        <input type="submit" value="Cập nhật" name="capnhap" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <a href="index.php?act=addtt"><input type="button" value="Thêm mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
                        <a href="index.php?act=listtt"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
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