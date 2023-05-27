	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Product Type</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
        <div class="row-form">
            <div class="row-title text-center" style="margin-top:20px;">
                <h3>Thêm ảnh mới</h3>
            </div>
            <div class="container">
                <form action="index.php?act=addimg" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Sản phẩm</label> <br>
                        <select name="ma_hh" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example" required>
                            <option selected>Chọn sản phẩm</option>
                            <?php 
                                $listsanpham = loadall_sanpham($kyw="",$iddm=0);
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    echo'<option value="'.$id.'" >'.$name.'</option>';
                                }
                            ?>
                        </select>
                    </div> <br><br>
                        <label for="pwd">Hình</label> <br>
                        <input type="file" name="hinh[]" id="" class="" multiple required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Thêm mới" name="themmoi" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Đặt lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    </div>
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo '<h2 style="font-size:15px; color:red;text-align:center;" >'.$thongbao.'</h2>';
                    ?>
                </form>
            </div>
        </div>
    </div>