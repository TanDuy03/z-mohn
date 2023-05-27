	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Chi tiết đơn hàng</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Chi tiết đơn hàng</h3>
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
                    <th>Mã đơn hàng</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Size</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <?php
                $all = 0;
                $giamgia = 0;
                foreach ($listchitietdh as $bill) {
                    extract($bill);
                    $price_1 = $price_old;
					if ($price_new > 0) $price_1 = $price_new;
                    $ttien = 0;
                    $ttien += $tong;
                    $all += $ttien;
                    if ($ma_gg == '') {
                        $giamgia = 0;
                    } else {
                        foreach ($bill_mgg as $gg) {
                            $giamgia = $gg['giatri'];
                        }
                    }
                    $tien = ($all - $giamgia) + 20;
                    echo '
                    <tbody>
                        <tr>
                            <td>'.$ma_dh.'</td>
                            <td>'.$name.'</td>
                            <td>'.$so_luong.'</td>
                            <td>'.number_format($price_1, 0, '.', '.').'.000 ₫</td>
                            <td>'.$size.'</td>
                            <td>'.number_format($tong,0,'.','.').'.000 ₫</td>
                        </tr>
                    </tbody>';
                }
            ?>
            <thead class="thead-light">
                <tr>
                    <th colspan="5" style="text-align: right">Giảm giá</th>
                    <?php
                        $giamgia = 0;
                        if ($ma_gg == '') {
                            $giamgia = 0;
                        } else {
                            foreach ($bill_mgg as $gg) {
                                $giamgia = $gg['giatri'];
                            }
                        }
                        echo '<td>'.number_format($giamgia,0,'.','.').'.000 ₫</td>';
                    ?>
                </tr>
                <tr>
                    <th colspan="5" style="text-align: right">Tổng tiền</th>
                    <?php
                        echo '<td>'.number_format($tien,0,'.','.').'.000 ₫</td>';
                    ?>
                </tr>
            </thead>
        </table>
    </div>
</div>
<!--  -->

