	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Sản phẩm</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Danh sách sản phẩm</h3>
    </div>
    <div class="table-responsive-sm">
        <form action="index.php?act=listsp" method="post">
            <select name="iddm" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
                <option selected value="0">Chọn danh mục</option>
                <?php 
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo'<option value="'.$ma_loai.'" >'.$ten_loai.'</option>';
                    }
                ?>
            </select>
            <div class="form-group">
                <input type="text" name="kyw" class="" placeholder="Tìm..." style="border: 1px solid gray;border-radius:5px;outline:none;padding-left:5px;">
                <input type="submit" name="listgo" value="Go" style="border:1px solid gray;border-radius:5px;">
            </div>
        </form>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th style="max-width:80px">Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Giá giảm</th>
                    <th style="width:400px">Mô tả</th>
                    <th>View</th>
                    <th style="width:150px">Cài đặt</th>
                </tr>
            </thead>
            <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $imgsp="index.php?act=listimg&id=".$id;
                    $ha="../upload/".$img;
                    if (is_file($ha)) {
                       $hinh="<img src='".$ha."' height='150' width='45%'>";
                    }else{
                        $hinh="Không tìm thấy hình";
                    }
                    echo '
                    <tbody>
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td class="text-center">'.$hinh.'</td>
                            <td>'.number_format($price_old, 0, '.', '.').'.000 ₫</td>
                            <td>'.number_format($price_new, 0, '.', '.').'.000 ₫</td>
                            <td>'.$mota.'</td>
                            <td>'.$luotxem.'</td>
                            <td class="text-center">
                                <a href="'.$imgsp.'"><input type="button" value="Hình ảnh" style="width:120px;margin:5px; border:none;"></a>
                            </td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>