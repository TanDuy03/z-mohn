    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Thanh toán</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Thanh toán</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <?php
                if (!isset($_SESSION['user'])) {
                    echo '<h4 class="text-danger"><a href="index.php?act=login">Đăng nhập</a> để thanh toán</h4>';
                } else if (count($_SESSION['giohang']) == 0) {
                    echo'
                    <div class="notice info"><p> Không có sản phẩm nào trong giỏ hàng <a href="index.php?act=category">Xem sản phẩm</a>.</p></div>
                    ';
            ?>
            <style>
                body {                        
                    font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif;
                    color: #34495e;
                    -webkit-font-smoothing: antialiased;
                    line-height: 1.6em;
                }
                p {
                    margin: 0;
                }
                .notice {
                    position: relative;
                    margin: 1em;
                    background: #F9F9F9;
                    padding: 1em 1em 1em 2em;
                    border-left: 4px solid #DDD;
                    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.125);
                }
                .notice:before {
                    position: absolute;
                    top: 50%;
                    margin-top: -17px;
                    left: -17px;
                    background-color: #DDD;
                    color: #FFF;
                    width: 30px;
                    height: 30px;
                    border-radius: 100%;
                    text-align: center;
                    line-height: 30px;
                    font-weight: bold;
                    font-family: Georgia;
                    text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
                }
                .info {
                    border-color: red;
                }
                .info:before {
                    content: "X";
                    background-color:red;
                }
            </style>
            <?php } else {
                    $sql = "SELECT * FROM tai_khoan WHERE user = '".$_SESSION['user']."'";
                    extract(pdo_query_one($sql));      
            ?>
            
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Thông tin giao hàng</h3>
                        <form class="row contact_form" action="index.php?act=confirmation" method="post" novalidate="novalidate">
                            <input placeholder="ID" type="text" class="form-control" id="first" name="ma_tk" value="<?=$ma_tk?>" style="display:none;">
                            <div class="col-md-6 form-group p_star">
                                <label>Họ tên</label>
                                <input placeholder="Họ tên" type="text" class="form-control" id="first" name="nguoi_nhan" value="<?=$ho_ten?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Số điện thoại</label>
                                <input placeholder="Số điện thoại" type="text" class="form-control" id="number" name="sdt_nhan" value="<?=$tel?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Email</label>
                                <input placeholder="Địa chỉ Email" type="text" class="form-control" id="email" name="email" value="<?=$email?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Địa chỉ nhận hàng</label>
                                <input placeholder="Địa chỉ nhận hàng" type="text" class="form-control" id="email" name="dia_chi_nhan" value="<?=$address?>">
                            </div>
                           
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Ghi chú"></textarea>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <select name="mgg" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
                                    <option value="NULL" selected>Chọn mã giảm giá</option>
                                    <?php 
                                        foreach ($mgg as $gg) {
                                            extract($gg);
                                            echo'<option value="'.$ma_gg.'" >'.$ma_gg.' (giảm '.$giatri.'K)</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                    </div>
                    <script>
                        function myFunction(ma) {
                            document.getElementById("magiam").value = document.getElementById("giamgia").value;
                        }
                    </script>
                    <!-- <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Hóa đơn của bạn</h2> -->
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
                                    foreach($cart as $sp){
                                        extract($sp);
                                        if($ma_hh)
                                        $price_1 = $price_old;
								        if ($price_new > 0) $price_1 = $price_new;
                                        $tong = $so_luong * $price_1;
                                        $ttien = 0;
                                        $ttien += $tong;
                                        $all +=$ttien;
                                        $tien=$all+20;
                                        $del="index.php?act=delcart&idsp=".$ma_hh;
                                        $upd="index.php?act=cart&id=".$ma_hh;
                                        $up="index.php?act=cartupdate&id=".$ma_hh;
                                        $sphct="index.php?act=sanphamct&idsp=".$ma_hh;
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
                                                        <input type="hidden" name="id" id="ma_hh" value="'.$ma_hh.'">
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
                                        echo'
                                        <input style="display:none;" type="text" class="form-control" id="email" name="ma_hh[]" value="'.$ma_hh.'">
                                        <input style="display:none;" type="text" class="form-control" id="email" name="size[]" value="'.$size.'">
                                        <input style="display:none;" type="text" class="form-control" id="email" name="so_luong[]" value="'.$so_luong.'">';
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
									<h4>Phí vận chuyển</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Phí: 20.000 ₫</p>
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
                           
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector" required>
                                    <label for="f-option5">Xác nhận đúng thông tin</label>
                                    <div class="check"></div>
                                </div>
                                
                            </div>
                            <tr>
                        
                


<div class="acordeon">
    <div class="acordeon__item">
        <input type="radio" name="payment" id="item1" value="2">
        <div class="radio-content-input">
            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=4">
            <label for="item1" class="acordeon__titulo">Thanh toán khi nhận hàng</label>
        </div>
    </div>


    <div class="acordeon__item1">
        
        <input type="radio" name="payment" id="item2" value="1">
        <div class="radio-content-input">
            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=4">
            <label for="item2" class="acordeon__titulo">Thanh toán online</label>
        </div>
        
        

        <p class="acordeon__contenido">
           TÀI KHOẢN CỦA SHOP : Ngân hàng Vietcombank <img src="img/qr.jpg." alt=""style="width: 80px;
        height: 100px;">
          <br>Số tài khoản: 9862123203<br> Tên tài khoản: Nguyễn Tuấn Kiệt <br>Nội dung chuyển khoản bạn vui lòng điền theo CÚ PHÁP như sau: MÃ ĐƠN HÀNG + SĐT + TÊN Cảm ơn bạn.
        </p>



    </div>
</div>
                            <!-- <label><input type="radio" name="payment" value="0">  Thanh toán khi nhận hàng </label> <br>
                            <label><input type="radio" name="payment" value="1">  Thanh toán bằng thẻ </label> <br>
                            <div class="check"></div> -->
                        
                    </tr>
                           
                            <!-- <a class="primary-btn" href="#">Thanh toán</a> -->
                            <div class="creat_account"><br><br><br><br><br><br><br><br>
                             <input type="checkbox" id="f-option4" name="selector" required>
                                <label for="f-option4">Tôi đã đọc và chấp nhận </label>
                                <a href="#">điều kiện & điều khoản</a>
                            </div>
                        <input type="submit"  name="confirmation"  class="primary-btn" value="Đặt Hàng">
                        </div>
                        
                       
                    </div>
                </div>
                </form>
            </div>
            <?php } ?>
        </div>

    </section>

   
    <!--================End Checkout Area =================-->
 
        