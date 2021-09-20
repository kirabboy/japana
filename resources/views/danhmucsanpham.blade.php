<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/danhmucsanpham.css') }}">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body>
    <!-- breadcrumbs -->
    <section id="breadcrumbs">
        <div class="page-title shop-page-title">
            <div class="page-title-inner container">
                <nav class="breadcrumbs">
                    <a href="#">Trang chủ</a>
                    <span class="divider">/</span>
                    <a href="#" class="active">Chăm Sóc Sức Khỏe</a>
                </nav>
            </div>
        </div>
    </section>

    <!-- main -->
    <section>
        <!-- Trang sản phẩm -->
        <div class="category-page container">
            <div class="row">
                <!-- bên trái -->
                <div class="shop-sidebar col-lg-3 col-md-12 col-sm-12">
                    <!-- danh mục -->
                    <aside class="widget danhmuc">
                        <h3 class="widget-title">Danh mục</h3>
                        <div class="widget-search">
                            <input type="text" class="form-control input_search" placeholder="Tìm kiếm...">
                            <button type="button">
                                <i class="search-icon"></i>
                            </button>
                        </div>
                        <div class="widget-product-categories scrollbar">
                            <label class="check-custom">
                                Chăm Sóc Hệ Tiêu Hóa
                                <span class="count-item"> (30)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Chăm Sóc Mắt
                                <span class="count-item"> (22)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Hỗ Trợ Não & Trí Nhớ
                                <span class="count-item"> (17)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Hỗ Trợ Xương Khớp
                                <span class="count-item"> (30)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Hỗ Trợ Điều Trị Tai Biến
                                <span class="count-item"> (10)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Hỗ Trợ Điều Trị Ung Thư
                                <span class="count-item"> (21)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Nấm Linh Chi
                                <span class="count-item"> (3)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Sức Khỏe & Sinh Lý Nam
                                <span class="count-item"> (29)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Sức Khỏe & Sinh Lý Nữ
                                <span class="count-item"> (18)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Tảo Xoắn
                                <span class="count-item"> (11)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Thải Độc Gan
                                <span class="count-item"> (34)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Vitamin Tổng Hợp
                                <span class="count-item"> (42)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Điều Trị Khác
                                <span class="count-item"> (36)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </aside>

                    <!-- lọc giá -->
                    <aside class="widget">
                        <h3 class="widget-title">GIÁ</h3>
                        <div class="widget-filter-price">
                            <div class="price-range-slider">
                                <div id="slider-range" class="range-bar"></div>
                            </div>
                        </div>
                        <div class="widget-price">
                            <div class="form-group trai">
                                <p class="title-range">Min</p>
                                <div class="box-input">
                                    <input type="text" class="form-control" id="amount1" disabled="">
                                    <span>đ</span>
                                </div>
                            </div>
                            <div class="form-group phai">
                                <p class="title-range">Max</p>
                                <div class="box-input">
                                    <input type="text" class="form-control" id="amount2" disabled="">
                                    <span>đ</span>
                                </div>
                            </div>
                        </div>
                        <button class="btn-price" type="button">Áp dụng</button>
                    </aside>

                    <!-- thương hiệu -->
                    <aside class="widget">
                        <h3 class="widget-title">Thương hiệu</h3>
                        <div class="widget-search">
                            <input type="text" class="form-control input_search" placeholder="Tìm kiếm...">
                            <button type="button">
                                <i class="search-icon"></i>
                            </button>
                        </div>
                        <div class="widget-product-categories scrollbar">
                            <label class="check-custom">
                                Ably
                                <span class="count-item"> (3)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                AFC
                                <span class="count-item"> (1)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                AFC Efushi Group
                                <span class="count-item"> (1)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Aojiru
                                <span class="count-item"> (1)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                API
                                <span class="count-item"> (1)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Asahi
                                <span class="count-item"> (3)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Ashirira
                                <span class="count-item"> (2)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                B3
                                <span class="count-item"> (1)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Beauty Mirai
                                <span class="count-item"> (1)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Beauty Rose Crystal
                                <span class="count-item"> (1)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Bella Fora
                                <span class="count-item"> (1)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Cosmic Pharmaceutical Inc
                                <span class="count-item"> (2)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-custom">
                                Daiichi Sankyo
                                <span class="count-item"> (36)</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </aside>
                </div>

                <!-- bên phải -->
                <div class="shop-container col-lg-9 col-md-12 col-sm-12">
                    <div class="filter-cate">
                        <ul>
                            <li>
                                <a href="#" class="active">Mặc định</a>
                            </li>
                            <li>
                                <a href="#" class="">Giá cao</a>
                            </li>
                            <li>
                                <a href="#" class="">Giá thấp</a>
                            </li>
                            <li>
                                <a href="#" class="">A-z</a>
                            </li>
                            <li>
                                <a href="#" class="">Sale</a>
                            </li>
                            <li>
                                <a href="#" class="filter-btn ">Lọc</a>
                            </li>
                        </ul>
                    </div>
                    <div class="products">
                        <div class="col col-6 col-md-4 col-lg-3">
                            <div class="product-box box">
                                <div class="box-image">
                                    <div class="image-cover">
                                        <a href="#">
                                            <img src="https://rbvietnam.com/wp-content/uploads/2019/06/8b0698ecb27e4e20176f.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-text">
                                    <div class="title-wrapper">
                                        <a href="#">
                                            <p class="product-title">Kem dưỡng mắt Daily Beauty Age Away
                                                Vitalizing Eye Cream</p>
                                        </a>
                                    </div>
                                    <div class="price-wrapper">
                                        <span class="price">
                                            <span class="amount">490,000₫</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/danhmucsanpham.js') }}"></script>
</body>

</html>