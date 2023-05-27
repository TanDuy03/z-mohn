    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Blog</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Blog 1</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/product/banner-blog1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Thể thao</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Cùng nhau tận hưởng cuộc sống</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/product/blog8.webp" alt="post" style="height: 185px;">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Cá tính</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Tự do thể hiện cái chất riêng của bản thân</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/product/blog6.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Phong cách</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Tự tin thể hiện cá tính</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <?php
                        
                        foreach($ttnew as $ttuc){
							extract($ttuc);
							$hinh=$img_path.$img;
							echo '
                            
                            <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Thể thao,</a>
                                        <a class="active" href="#">Khuyến mãi,</a>
                                        <a href="#">Tin tức,</a>
                                        <a href="#">Giày</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Admin<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">'.$ngaydang.'<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="'.$hinh.'" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>'.$name.'</h2>
                                        </a>
                                        <p>'.$mota.'</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        ';
                        }
                        
                        ?>
                        <!-- <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2018<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-1.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Astronomy Binoculars A Great Alternative</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="white_bg_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article> -->
                        <!--  -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/logo_Z.png" alt="">
                            <h4>Z-MOHN</h4>
                            <p>Cửa hàng giày chính hãng</p>
                            <div class="social_icon">
                                <a href="https://www.facebook.com/JiChoiSeok" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://twitter.com/ng_tanduy" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://github.com/TanDuy03" target="_blank"><i class="fa-brands fa-github"></i></a>
                                <a href="https://www.instagram.com/cuxe2612/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <p>Được thành lập vào năm 2022 bởi nhóm 2, Z-MHON là chuỗi cửa hàng thể thao với đa dạng sản phẩm. Chính sách bảo hành, đổi trả linh hoạt cùng với các chương trình khuyến mãi sẽ giúp bạn mua sắm dễ dàng hơn bao giờ hết. Với đội ngũ nhân viên tận tình, am hiểu về sản phẩm, Z-MHON hân hạnh được phục vụ quý khách.</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Bài viết phổ biến</h3>
                            <div class="media post_item blogImg">
                            <img src="img/product/blog9.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Bảng size giày Nike AF1 cực kỳ chi tiết và chuẩn 100%</h3>
                                    </a>
                                    <p>02 giờ trước</p>
                                </div>
                            </div>
                            <div class="media post_item blogImg">
                                <img src="img/product/blog10.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Thâm hụt calo là gì? Cách tính thâm hụt calo và thực đơn giảm cân hiệu quả</h3>
                                    </a>
                                    <p>02 giờ trước</p>
                                </div>
                            </div>
                            <div class="media post_item blogImg">
                            <img src="img/product/blog11.jpg" alt="post">                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Halloween giảm quần áo và giày dép thả ga lên đến 50%, mua ngay!</h3>
                                    </a>
                                    <p>03 giờ trước</p>
                                </div>
                            </div>
                            <div class="media post_item blogImg">
                            <img src="img/product/blog12.jpg" alt="post"> 
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Tuần lễ thương hiệu Nike Giày dép giảm sốc 35% đến 50%, xem ngay!</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Danh mục bài viết</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Khuyến mãi</p>
                                        <p>4</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Phong cách sống</p>
                                        <p>1</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Thời trang</p>
                                        <p>3</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Mẹo vặt</p>
                                        <p>1</p>
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Bản tin</h4>
                            <p>
                                Sau PUMA và Adidas, Nike được cho là hãng thể thao có nhiều khuyến mãi lớn trong dịp Tết sắp đến.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div> 
                            </div>
                            <div class="btnPost">
                                <button>Đăng ký</button>
                            </div>
                            <p class="text-bottom">Bạn có thể <a href="#" style="color:red;text-decoration:underline;"> hủy đăng ký </a> bất kì lúc nào</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Thể loại</h4>
                            <ul class="list">
                                
                                <li><a href="#">Thời trang</a></li>
                                <li><a href="#">Khuyến mãi</a></li>
                                <li><a href="#">Phong cách sống</a></li>
                                <li><a href="#">Nike</a></li>
                                <li><a href="#">Sức khỏe</a></li>
                                <li><a href="#">PUMA</a></li>
                                <li><a href="#">Vans</a></li>
                                <li><a href="#">Adidas</a></li>
                                
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <style>
        .blog_post img{
            width:540px;
            height:292px;
        }
        .blogImg img{
            width:100px;
            height:60px;
        }
        .btnPost button{
            width:100px;
            height:35px;
            outline:none;
            border:none;
            background-color: #ffba00;
            color: #ffffff;
            margin:5px;
        }
    </style>
