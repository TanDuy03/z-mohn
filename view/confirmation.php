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

				$sql1 = "SELECT count(ma_dh) as sdh FROM don_hang WHERE trang_thai_gh = 0 AND ma_tk = ".$ma_tk;
				$kq = pdo_query_one($sql1);
				extract($kq);
				if ($sdh == 0) {
					echo '<h3 class="title_confirmation">Bạn chưa có đơn hàng nào.</h3>';
				} else {
					$listdh_by_matk = loaddhshipping_by_matk($ma_tk);
					extract($listdh_by_matk);
					$list_ctdh = loadone_chitietdh($ma_dh);

					
			?>
			<h3 class="title_confirmation">Cảm ơn! Các đơn hàng của bạn đang được xử lý.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						
						<h4>Thông tin đặt hàng</h4>
						<ul class="list">
							<li><a href="#"><span>Mã đơn hàng </span>: <?=$ma_dh?> </a></li>
							<li><a href="#"><span>Họ tên </span>: <?=$nguoi_nhan?> </a></li>
							<li><a href="#"><span>Email</span>: <?=$email?> </a></li>
							<li><a href="#"><span>Số điện thoại</span>: <?=$sdt_nhan?></a></li>
							<li><a href="#"><span>Địa chỉ</span>: <?=$dia_chi_nhan?> </a></li>
							<li><a href="#"><span>Phương thức thanh toán</span>: <?=($payment==0)? "Thanh toán khi nhận hàng":"Thanh toán online"?> </a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Thông tin chi tiết</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Sản phẩm</th>
								<th scope="col">Size</th>
								<th scope="col">Giá</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Tổng giá sản phẩm</th>
							</tr>
						</thead>
						<tbody>
                            <?php 
                            	ob_start();
                            ?>
                            <?php
                                    $all = 0;
									$giamgia = 0;
                                    foreach($list_ctdh as $sp){
                                        extract($sp);
                                        if($id)
										$price_1 = $price_old;
								        if ($price_new > 0) $price_1 = $price_new;
                                        $tong = $so_luong * $price_1;
                                        $ttien = 0;
                                        $ttien += $tong;
                                        $all +=$ttien;
										if ($ma_gg == '') {
											$giamgia = 0;
										} else {
											$listbill_mgg = loadbill_mgg();
											foreach ($listbill_mgg as $gg) {
												$giamgia = $gg['giatri'];
											}
										}
										$tien=($all - $giamgia) + 20;
                                        $del="index.php?act=delcart&idsp=".$id;
                                        $upd="index.php?act=cart&id=".$id;
                                        $up="index.php?act=cartupdate&id=".$id;
                                        $sphct="index.php?act=sanphamct&idsp=".$id;
                                        echo '
                                            <form action="index.php?act=cartupdate" method="post">
                                            <tr>
                                                <td>
                                                    <div class="media" >
                                                        <div class="d-flex">
                                                            <a href="'.$sphct.'">
                                                                <img src="upload/'.$img.'" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p>"'.$name.'"</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5>'.$size.'</h5>
                                                </td>
                                                <td>
													<h5>'.number_format($price_1, 0, '.', '.').'.000 ₫</h5>
                                                </td>
                                                <td>
                                                    <div class="product_count">
                                                        <label for="ma_hh">
														<h5>'.$so_luong.'</h5>
                                                            </label>
                                                        </div>
                                                        <input type="hidden" name="id" id="ma_hh" value="'.$id.'">
                                                    <div class="product_count">
                                                        <a href="'.$upd.'">
                                                            
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5>'.number_format($ttien, 0, '.', '.').'.000 ₫</h5>
                                                </td>
                                                
                                            </tr>
                                        ';  
                                    } 
                                ?>
                                    <tr class="bottom_button">
                                        <td>
									
                                        </td>
                                
                                        <td>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Tổng tiền sản phẩm</h5>
                                    </td>
                                    <?php 
                                        echo '
                                        <td>
                                            <h7>'.number_format($all, 0, '.', '.').'.000 ₫</h7>
                                        </td>
                                        
                                        ';
                                
                                ?>
								<style>
									.media img{
										width: 120px;
										height: 130px;
									}
								</style>
                            </tr>
							<tr>
								<td>
									<h4>Giảm giá</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>
										<?php
										echo number_format($giamgia, 0, '.', '.').'.000 ₫';
										?>
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Phí vận chuyển</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Phí: 20.000 đ</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Thành tiền</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>
										<?php
										echo number_format($tien, 0, '.', '.').'.000 ₫';
										?>
									</p>
								</td>
							</tr>
                            
                                
                            </tr>
                        </tbody>
						
						
					</table>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>
	<!--================End Order Details Area =================-->