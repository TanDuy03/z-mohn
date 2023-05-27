	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Thống kê</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Thống kê</h3>
    </div>
    <div class="table-responsive-sm">
        <!-- <div class="d-flex ">
            <input type="submit" value="Select All" name="" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
            <a href="index.php?act=addtk"><input type="submit" value="Thêm mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            <input type="submit" value="Chỉnh sửa" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
        </div> -->
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
            </thead>
            <?php
                foreach ($listtk as $tk) {
                    extract($tk);
                    // $xoatk="index.php?act=xoatk&id=".$id;
                    // $suatk="index.php?act=suatk&id=".$id;
                    echo '
                    <tbody>
                        <tr>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.number_format($maxprice, 0, '.', '.').'.000 ₫</td>
                            <td>'.number_format($minprice, 0, '.', '.').'.000 ₫</td>
                            <td>'.number_format($avgprice, 0, '.', '.').'.000 ₫</td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>
<!--  -->

