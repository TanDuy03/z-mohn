	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Comments</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Nhận xét của khách hàng</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex "></div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Tên hàng hóa</th>
                    <th>Tên tài khoản</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th style="width:200px;">Cài đặt</th>
                </tr>
            </thead>
            <?php
                foreach ($listbl as $bl) {
                    extract($bl);
                    $xoabl="index.php?act=xoabl&id=".$id;
                    $suabl="index.php?act=suabl&id=".$id;
                    echo '
                    <tbody>
                        <tr>
                            <td>'.$name.'</td>
                            <td>'.$user.'</td>
                            <td>'.$noi_dung.'</td>
                            <td>'.$ngay_bl.'</td>
                            <td style="text-align:center;"><a href="'.$suabl.'"><input type="button" value="Sửa" style="width:120px; margin:5px; border:none;" ></a> <a href="'.$xoabl.'"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a></td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>