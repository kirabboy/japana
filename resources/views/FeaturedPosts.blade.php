<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/FeaturedPosts.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="category-posts">
            <div class="container">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Bài Viết Nổi Bật</a></li>
                </ul>
            </div>
        </div>
        <!-- posts -->
        <div class="Featured">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-8">
                        <div class="posts">
                            <div class="posts__title">
                                <h3>Bài viết nổi bật</h3>
                            </div>
                            <div class="posts__content" id="post">
                                <!-- <div class="posts__content-item">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div class="img">
                                                <img src="./image-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-8">
                                            <div class="text">
                                                <a href="#">Mã vạch có thể kiểm tra được hàng thật, hàng giả - Đúng hay
                                                    sai?</a>
                                                <p>Thời gian gần đây, Siêu Thị Nhật Bản Japana nhận được rất nhiều tin
                                                    nhắn và điện thoại, hỏi rằng: “mã vạch sản phẩm có chính...</p>
                                                <span><i class="fa fa-eye" aria-hidden="true"></i>2402</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="posts__paping">
                                <ul>
                                    <li class="btn-prev"><img src="./image/icon/arrow-prev.png" alt=""></li>
                                    <div class="number-page" id="number-page">
                                        <!-- <li class="active"><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li> -->
                                    </div>
                                    <li class="btn-next"><img src="./image/icon/arrow-next.png" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-4">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="category">
                                    <div class="category__title">
                                        <h3>Danh mục</h3>
                                    </div>
                                    <div class="category__list">
                                        <ul>
                                            <li><i class="fa fa-yelp" aria-hidden="true"></i><a href="">Bài Viết Nổi Bật(63)</a></li>
                                            <li><i class="fa fa-yelp" aria-hidden="true"></i><a href="">Dinh Dưỡng Và Sức Khỏe(1029)</a></li>
                                            <li><i class="fa fa-yelp" aria-hidden="true"></i><a href="">Đẹp Hơn Mỗi Ngày(2205)</a></li>
                                            <li><i class="fa fa-yelp" aria-hidden="true"></i><a href="">Dành Cho Bé Yêu(48)</a></li>
                                            <li><i class="fa fa-yelp" aria-hidden="true"></i><a href="">Chuyện Phòng The(27)</a></li>
                                            <li><i class="fa fa-yelp" aria-hidden="true"></i><a href="">Tiện Ích CôngNghệ(147)</a></li>
                                            <li><i class="fa fa-yelp" aria-hidden="true"></i><a href="">Văn Hóa Nhật Bản(22)</a></li>
                                            <li><i class="fa fa-yelp" aria-hidden="true"></i><a href="">Tin Tức(49)</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="category__search">
                                        <div class="details">
                                            <input type="text" placeholder="Tìm kiếm tin tức">
                                            <img src="./image/icon/search.png" alt="">
                                        </div>
                                    </div>
                                    <div class="category__numberPhone">
                                        <div class="item">
                                            <div class="text">
                                                <p>hotline</p>
                                            </div>
                                            <div class="numberPhone">
                                                <div class="numberPhone-item">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <p>0975800600</p>
                                                </div>
                                                <div class="numberPhone-item">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <p>0975800600</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item switchboard">
                                            <div class="text">
                                                <p>Tổng đài</p>
                                            </div>
                                            <div class="numberPhone">
                                                <div class="numberPhone-item">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <p>0975800600</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="selling">
                                    <div class="selling__title">
                                        <h3>Sản phẩm bán chạy</h3>
                                    </div>
                                    <div class="selling__item">
                                        <img src="./image/selling-products-1.jpg" alt="">
                                        <div class="text">
                                            <a href="#">
                                                <p>Sữa rửa mặt trà xanh Shirochasou Green...</p>
                                            </a>
                                            <div class="icon-cart">
                                                <p class="price">170.000 đ</p>
                                                <img src="./image/icon/icon-cart-featuredpost.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selling__item">
                                        <img src="./image/selling-products-2.jpeg" alt="">
                                        <div class="text">
                                            <a href="#">Viên uống tăng chiều cao GH Creation...</a>
                                            <div class="icon-cart">
                                                <p class="price"><span>729.000 đ</span>170.000 đ</p>
                                                <img src="./image/icon/icon-cart-featuredpost.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selling__item">
                                        <img src="./image/selling-products-3.jpeg" alt="">
                                        <div class="text">
                                            <a href="#">Tảo xoắn Spirulina Japan Algae Nhật...</a>
                                            <div class="icon-cart">
                                                <p class="price">469.000 đ</p>
                                                <img src="./image/icon/icon-cart-featuredpost.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selling__item">
                                        <img src="./image/selling-products-4.jpg" alt="">
                                        <div class="text">
                                            <a href="#">Sữa tắm Kumano Hatomugi Moisturizing...</a>
                                            <div class="icon-cart">
                                                <p class="price"> <span>250.000 đ</span> 169.000 đ</p>
                                                <img src="./image/icon/icon-cart-featuredpost.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selling__item">
                                        <img src="./image/selling-products-5.jpg" alt="">
                                        <div class="text">
                                            <a href="#">Viên uống rau củ DHC Nhật Bản 240...</a>
                                            <div class="icon-cart">
                                                <p class="price"> <span>500.000 đ</span> 345.000 đ</p>
                                                <img src="./image/icon/icon-cart-featuredpost.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selling__item">
                                        <img src="./image/selling-products-6.jpeg" alt="">
                                        <div class="text">
                                            <a href="#">Sữa dưỡng thể sáng da Kumano Hatomugi...</a>
                                            <div class="icon-cart">
                                                <p class="price"> <span>180.000 đ</span> 129.000 đ</p>
                                                <img src="./image/icon/icon-cart-featuredpost.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="trademark">
                                    <div class="trademark__title">
                                        <h3>Thương hiệu</h3>
                                    </div>
                                    <div class="slider">
                                        <div class="slides">
                                            <div class="slide first">
                                                <div class="item">
                                                    <img src="./image/trademark-1.jpeg" alt="">
                                                    <img src="./image/trademark-2.jpeg" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="./image/trademark-3.jpeg" alt="">
                                                    <img src="./image/trademark-4.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="./js/jquery.js"></script>
    <script src="./js/FeaturedPosts.js"></script>


</body>

</html>
