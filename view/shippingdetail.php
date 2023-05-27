	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Chi tiết đơn hàng</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
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
                                    foreach($listchitietdh as $sp){
                                        extract($sp);
                                        if($id)
										$price_1 = $price_old;
								        if ($price_new > 0) $price_1 = $price_new;
                                        $tong = $so_luong * $price_1;
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
										$tien=($all - $giamgia) + 20;
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
		</div>
	</section>
	<!--================End Order Details Area =================-->