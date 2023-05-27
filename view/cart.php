    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Giỏ hàng</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Giỏ</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
 
    <!--================Cart Area =================-->
    
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <?php
                    if(count($_SESSION['giohang']) == 0){
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
                <?php 
                    } else{
                ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Size giày</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tổng</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            // var_dump($cart);
                            // var_dump($_SESSION['giohang']);
                            ob_start();
                            ?>
                            <?php
                                    $all =0;
                                    foreach($cart as $sp){
                                        extract($sp);
								        if ($price_new > 0) $price_1 = $price_new;
                                        else $price_1 = $price_old;
                                        $tong = $so_luong * $price_1;
                                        $ttien = 0;
                                        $ttien += $tong;
                                        $all +=$ttien;
                                        $del="index.php?act=delcart&idsp=".$ma_hh."&size=".$size;
                                        $upd="index.php?act=cart&id=".$ma_hh;
                                        $up="index.php?act=cartupdate&id=".$ma_hh."&size=".$size;
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
                                                            <input type="number" min=0; max=999; step = 1; name="soluong" id="sl" value="'.$so_luong.'" title="Quantity:So Luong"class="input-text qty">
                                                            </label>
                                                        </div>
                                                        <input type="hidden" name="id" id="ma_hh" value="'.$ma_hh.'">
                                                        <input type="hidden" name="size" id="ma_hh" value="'.$size.'">
                                                    <div class="product_count">
                                                        <a href="'.$upd.'">
                                                            
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5>'.number_format($ttien, 0, '.', '.').'.000 ₫</h5>
                                                </td>
                                                <td>
                                                    <h5><a href="'.$del.'">XÓA</a></h5>
                                                </td>
                                            </tr>
                                        ';  
                                    } 
                                ?>
                                <tr class="bottom_button">
                                    </form>
                                    </td>
                                
                                    <td>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Thành tiền</h5>
                                    </td>
                                    <?php 
                                        echo '
                                        <td>
                                            <h5>'.number_format($all, 0, '.', '.').'.000 ₫</h5>
                                        </td>
                                        
                                        ';
                                
                                ?>
                            </tr>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <!-- <a class="gray_btn" href="#">Tiếp tục mua hàng</a> -->
                                        <a class="primary-btn" href="index.php?act=checkout">Tiến hành thanh toán</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
<style>
    .media img{
        width: 120px;
        height: 130px;
    }
</style>
<?php }?>
