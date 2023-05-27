	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Danh sách danh mục</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <div class="container-fluid">
        <div class="row-title text-center" style="margin-top:20px;">
            <h3>Danh sách danh mục:</h3>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th style="width:360px;">Mã danh mục</th>
                        <th style="width:360px;">Tên danh mục</th>
                        <th style="width:360px;">Cài đặt</th>
                    </tr>
                </thead>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&ma_loai=".$ma_loai;
                        $xoadm="index.php?act=xoadm&ma_loai=".$ma_loai;
                        echo '
                        <tbody>
                            <tr>
                                <td>'.$ma_loai.'</td>
                                <td>'.$ten_loai.'</td>
                                <td><a href="'.$suadm.'"><input type="button" value="Sửa" ></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                            </tr>
                        </tbody>';
                    }
                ?>
            </table>
                <div class="d-flex justify-content-center">
                <a href="index.php?act=adddm"><input type="submit" value="Thêm mới" name="themmoi" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            </div>
        </div>
    </div>