	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Xác nhận</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Xác nhận</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<?php
				$sql = "SELECT ma_tk FROM tai_khoan WHERE user = '".$_SESSION['user']."'";
				extract(pdo_query_one($sql));

				$sql1 = "SELECT count(ma_dh) as sdh FROM don_hang WHERE trang_thai_gh = 1 AND ma_tk = ".$ma_tk;
				$kq = pdo_query_one($sql1);
				extract($kq);
				if ($sdh == 0) {
					echo '<h3 class="title_confirmation">Bạn không có đơn hàng nào đã giao.</h3>';
				} else {
					$listdh_by_matk = loaddhshipped_by_matk($ma_tk);
			?>
			<h3 class="title_confirmation">Các đơn hàng đã giao của bạn.</h3>
			<div class="row order_d_inner">
                    <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th style="width:360px;">Mã đơn hàng</th>
                        <th style="width:360px;">Mã giảm giá</th>
                        <th style="width:360px;">Khách hàng</th>
                        <th style="width:360px;">Địa chỉ</th>
                        <th style="width:360px;">Số điện thoại</th>
                        <th style="width:360px;">Phương thức thanh toán</th>
                        <th style="width:360px;">Trạng thái đơn hàng</th>
                        <th style="width:360px;">Trạng thái giao hàng</th>
                        <th style="width:360px;">Ngày đặt hàng</th>
                        <th style="width:360px;">Thao tác</th>
                    </tr>
                </thead>
                <?php
                    $giamgia = 0;
                    foreach ($listdh_by_matk as $bill) {
                        extract($bill);
                        if ($ma_gg == '') {
                            $giamgia = 0;
                        } else {
                            $bill_mgg = loaddetailbill_mgg($ma_dh);
                            foreach ($bill_mgg as $gg) {
                                $giamgia = $gg['giatri'];
                            }
                        }
                        $chitiet_dh="index.php?act=listshippeddetail&ma_dh=".$ma_dh;
                        echo '
                        <tbody>
                            <tr>
                                <td>'.$ma_dh.'</td>
                                <td>'.$ma_gg.' (Giảm '.$giamgia.'K)</td>
                                <td>'.$nguoi_nhan.'</td>
                                <td>'.$dia_chi_nhan.'</td>
                                <td>'.$sdt_nhan.'</td>
                                <td>'.(($payment==0)? "Thanh toán khi nhận hàng":"Thanh toán bằng thẻ").'</td>
                                <td>'.(($trang_thai_tt==0)? "Chưa thanh toán":"Đã thanh toán").'</td>
                                <td>'.(($trang_thai_gh==0)? "Chưa giao hàng":"Đã giao hàng").'</td>
                                <td>'.$ngay_dat.'</td>
                                <td><a href="'.$chitiet_dh.'"><input type="button" value="Chi tiết"></a></td>
                            </tr>
                        </tbody>';
                    }
                ?> 
            </table>
			</div>
			<?php } ?>
		</div>
	</section>
	<!--================End Order Details Area =================-->