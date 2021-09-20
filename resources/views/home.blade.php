<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/boostrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <title>Document</title>
</head>

<body>


    @extends('footer')

    @section('content')

    <section class="home-pc">

        <div class="slider-pc">
            <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a class="img-pc" href="#" title="Chung tay đánh bay COVID">
                            <img src="https://japana.vn/uploads/block/2021/09/09/1631167634-1600x400.jpg" alt="Chung tay đánh bay COVID">
                        </a>
                        <a class="img-mobile" href="#" title="Chung tay đánh bay COVID">
                            <img alt="Chung tay đánh bay COVID" src="https://japana.vn/uploads/block/2021/09/09/1631167634-mb-ngoai.jpg">
                        </a>

                    </div>
                    <div class="carousel-item">

                        <a class="img-pc" href="#" title="Chung tay đánh bay COVID">
                            <img src="https://japana.vn/uploads/block/2021/08/23/1629713073-sil-pc-th.jpeg" alt="Chicago">
                        </a>
                        <a class="img-mobile" href="#" title="Chung tay đánh bay COVID">
                            <img alt="Thương Hiệu Tặng Quà 2 Triệu" src="https://japana.vn/uploads/block/2021/08/23/1629713073-sil-mb-th.jpeg">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#" class="img-pc">
                            <img src="https://japana.vn/uploads/block/2021/09/04/1630719824-1600x400-copy-2.jpg" alt="Chicago">
                        </a>
                        <a href="#" class="img-mobile">
                            <img alt="Top Bán Chạy Mua 2 Tặng 1" src="https://japana.vn/uploads/block/2021/09/04/1630719825-750x600.jpg">

                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#" class="img-pc">
                            <img src="https://japana.vn/uploads/block/2021/08/27/1630027301-1600x400.jpeg" alt="Chicago">
                        </a>
                        <a href="#" class="img-mobile">
                            <img alt="Vệ Sinh Nhà Cửa Chỉ Từ 29k" src="https://japana.vn/uploads/block/2021/08/27/1630027301-750x600.jpeg">
                        </a>


                    </div>
                    <div class="carousel-item">
                        <a href="#" class="img-pc">
                            <img src="https://japana.vn/uploads/block/2021/08/23/1629712796-1628577449-sidler-ngoai.jpeg" alt="Chicago">
                        </a>

                        <a href="#" class="img-mobile">
                            <img alt="Khỏe Đẹp Tại Nhà Sale 52%" src="https://japana.vn/uploads/block/2021/08/23/1629712796-1628657200-silder-ngoai-chinh.jpeg">

                        </a>

                    </div>
                    <div class="carousel-item">
                        <a href="#" class="img-pc">
                            <img src="https://japana.vn/uploads/block/2021/09/11/1631324911-pc-ngoai.jpg" alt="New York">
                        </a>
                        <a href="#" class="img-mobile">
                            <img alt="Mẹ và Bé Giảm 30%++" src="https://japana.vn/uploads/block/2021/09/11/1631324911-mb---ngoai.jpg">
                        </a>


                    </div>
                    <div class="carousel-item">
                        <a href="#" class="img-pc">

                            <img src="https://japana.vn/uploads/block/2021/08/25/1629854294-1600x400.jpeg" alt="Chicago">
                        </a>
                        <a href="#" class="img-mobile">

                            <img alt="Chăm Da Đẹp Dáng Giảm 50%" src="https://japana.vn/uploads/block/2021/08/25/1629854294-750x600.jpeg">
                        </a>

                    </div>
                </div>
                <ul class="carousel-indicators carousel-pc" style="" role="tablist">
                    <li data-target="#demo" data-slide-to="0" class="active"><a class="pager-item" title="Chung tay đánh bay COVID"> Chung tay đánh bay COVID </a></li>
                    <li class="" data-target="#demo" data-slide-to="1"><a class="pager-item" title="Thương Hiệu Tặng Quà 2 Triệu"> Thương Hiệu Tặng Quà 2 Triệu </a></li>
                    <li class="" data-target="#demo" data-slide-to="2"><a class="pager-item" title="Top Bán Chạy Mua 2 Tặng 1"> Top Bán Chạy Mua 2 Tặng 1 </a></li>
                    <li class="" data-target="#demo" data-slide-to="3" class=""><a class="pager-item" title="Vệ Sinh Nhà Cửa Chỉ Từ 29k"> Vệ Sinh Nhà Cửa Chỉ Từ 29k </a></li>
                    <li class="" data-target="#demo" data-slide-to="4"><a class="pager-item" title="Khỏe Đẹp Tại Nhà Sale 52%"> Khỏe Đẹp Tại Nhà Sale 52% </a></li>
                    <li class="" data-target="#demo" data-slide-to="5"><a class="pager-item" title="Mẹ và Bé Giảm 30%++"> Mẹ và Bé Giảm 30%++ </a></li>
                    <li class="" data-target="#demo" data-slide-to="6"><a class="pager-item" title="Chăm Da Đẹp Dáng Giảm 50%"> Chăm Da Đẹp Dáng Giảm 50% </a></li>
                </ul>
            </div>
        </div>
        <div class="product">
            <div class="container">
                <div class="sp1 row">
                    <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 ">
                        <a href="#" title="calbee">
                            <img src="https://japana.vn/uploads/block/2021/09/01/1630483171-580x220-copy.jpg" alt="calbee">
                        </a>
                    </div>
                    <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12  ">
                        <a href="#" title="clodewash">
                            <img src="https://japana.vn/uploads/block/2021/09/01/1630483172-580x220.jpg" alt="clodewash">
                        </a>

                    </div>

                </div>
                <div class="sp2 row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                        <a href="#" title="covid">
                            <img src="https://japana.vn/uploads/block/2021/09/01/1630483242-pc-copy.jpg" class="img" alt="covid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                        <a href="#" title="covid">
                            <img src="https://japana.vn/uploads/block/2021/09/01/1630483242-pc-copy.jpg" class="img" alt="covid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                        <a href="#" title="covid">
                            <img src="https://japana.vn/uploads/block/2021/09/01/1630483242-pc-copy.jpg" class="img" alt="covid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
                        <a href="#" title="covid">
                            <img src="https://japana.vn/uploads/block/2021/09/01/1630483242-pc-copy.jpg" class="img" alt="covid">
                        </a>
                    </div>
                </div>
                <div class="sp3 row">
                    <div class="col-12">
                        <a href="#" title="ĐH">
                            <img src="https://japana.vn/uploads/block/2021/08/23/1629712512-dhpc.jpeg" class="img" alt="ĐH">
                        </a>
                    </div>

                </div>
                <div class="sp3-mobile row">
                    <div class="cpl-12">
                        <a href="#" title="ĐH"><img src="https://japana.vn/uploads/block/2021/08/23/1629712512-dhmb.jpeg" alt="ĐH">
                        </a>
                    </div>
                </div>
                <div class="product-block">
                    <div class="banner row">
                        <div class="col-12">
                            <a href="#" class="box-big-img" title="Chắm sóc sức khỏe">
                                <img src="https://japana.vn/uploads/block/2021/08/23/1629681467-homepage-sk-pc.jpeg" alt="Chắm sóc sức khỏe">
                            </a>
                        </div>
                    </div>
                    <!--san pham on-pc -->
                    <div class="product-pc">
                        <div class="silder-product-1">
                            <div class="items">
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>
                    <!--on-mobile -->
                    <div class="product-mobile">
                        <div class="sp-mb row ">
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-block">
                    <div class="banner row">
                        <div class="col-12">
                            <a href="#" class="box-big-img" title="Chắm sóc sức khỏe">
                                <img src="https://japana.vn/uploads/block/2021/09/01/1630507304-pc-2.jpg" alt="collagen">
                            </a>
                        </div>
                    </div>
                    <!--san pham on-pc -->
                    <div class="product-pc">
                        <div class="silder-product-1">
                            <div class="items">
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>
                    <!--on-mobile -->
                    <div class="product-mobile">
                        <div class="sp-mb row ">
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-block">
                    <div class="banner row">
                        <div class="col-12">
                            <a href="#" class="box-big-img" title="Chắm sóc sức khỏe">
                                <img src="https://japana.vn/uploads/block/2021/08/23/1629684651-pc.jpeg" alt="trị nám">
                            </a>
                        </div>
                    </div>
                    <!--san pham on-pc -->
                    <div class="product-pc">
                        <div class="silder-product-1">
                            <div class="items">
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>
                    <!--on-mobile -->
                    <div class="product-mobile">
                        <div class="sp-mb row ">
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-block">
                    <div class="banner row">
                        <div class="col-12">
                            <a href="#" class="box-big-img" title="Chắm sóc sức khỏe">
                                <img src="https://japana.vn/uploads/block/2021/09/01/1630507483-home-page-tra.jpg" alt="Trà">
                            </a>
                        </div>
                    </div>
                    <!--san pham on-pc -->
                    <div class="product-pc">
                        <div class="silder-product-1">
                            <div class="items">
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>
                    <!--on-mobile -->
                    <div class="product-mobile">
                        <div class="sp-mb row ">
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-block">
                    <div class="banner row">
                        <div class="col-12">
                            <a href="#" class="box-big-img" title="Chắm sóc sức khỏe">
                                <img src="https://japana.vn/uploads/block/2021/08/23/1629680922-huongpc.jpeg" alt="trầm hương">
                            </a>
                        </div>
                    </div>
                    <!--san pham on-pc -->
                    <div class="product-pc">
                        <div class="silder-product-1">
                            <div class="items">
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>
                    <!--on-mobile -->
                    <div class="product-mobile">
                        <div class="sp-mb row ">
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-block">
                    <div class="banner row">
                        <div class="col-12">
                            <a href="#" class="box-big-img" title="Chắm sóc sức khỏe">
                                <img src="https://japana.vn/uploads/block/2021/09/01/1630507379-pc.jpg" alt="mẹ và bé">
                            </a>
                        </div>
                    </div>
                    <!--san pham on-pc -->
                    <div class="product-pc">
                        <div class="silder-product-1">
                            <div class="items">
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sp">
                                    <div class="box3item">
                                        <div class="box-img">
                                            <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                            </a>
                                            <div class="block-sale">
                                                <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                                <span class="sale">-40%</span>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">
                                                <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                    Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                            </h3>
                                            <ul class="box-price">
                                                <li class="price">
                                                    <span>1.260.000đ</span>
                                                </li>

                                                <li class="old-price">
                                                    <span>2.099.000 đ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>
                    <!--on-mobile -->
                    <div class="product-mobile">
                        <div class="sp-mb row ">
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sp col-6">
                                <div class="box3item">
                                    <div class="box-img">
                                        <a href="https://japana.vn/vien-uong-ho-tro-dieu-tri-ung-thu-fine-japan-fucoidan-30-vien-sp-11890" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                            <img src="https://japana.vn/uploads/product/2020/04/02/268x268-1585836448-coidan-30-vien-sieu-thi-nhat-ban-japana-0-(2).jpeg" alt="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên">
                                        </a>
                                        <div class="block-sale">
                                            <img alt="hình" src="https://japana.vn/uploads/promotion/2021/03/11/1615432601-icon-giam-gia-2-02.png">
                                            <span class="sale">-40%</span>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">
                                            <a href="#" title="Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan 30 viên" tabindex="0">
                                                Viên uống hỗ trợ điều trị ung thư Fine Japan Fucoidan... </a>
                                        </h3>
                                        <ul class="box-price">
                                            <li class="price">
                                                <span>1.260.000đ</span>
                                            </li>

                                            <li class="old-price">
                                                <span>2.099.000 đ</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brand">
                    <div class="brand-header">
                        <h2 class="title-client d-flex justify-content-between">Thương hiệu
                            <a href="https://japana.vn/thuong-hieu.jp" title="thương hiệu">Xem tất cả <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
                        </h2>
                    </div>
                    <div class="brand-body">
                        <div class="items-brand">
                            <div class="brand-item">
                                <a rel="nofollow" href="#" title="Nichiei Bussan" tabindex="-1" class="d-flex justify-content-center align-items-center">
                                    <img class="img" src="https://japana.vn/uploads/brand/1604394846-colo.jpg" alt="Colo Colo">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a rel="nofollow" href="#" title="Nichiei Bussan" tabindex="-1" class="d-flex justify-content-center align-items-center">
                                    <img class="img" src="https://japana.vn/uploads/brand/1604394846-colo.jpg" alt="Colo Colo">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a rel="nofollow" href="#" title="Nichiei Bussan" tabindex="-1" class="d-flex justify-content-center align-items-center">
                                    <img class="img" src="https://japana.vn/uploads/brand/1604394846-colo.jpg" alt="Colo Colo">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a rel="nofollow" href="#" title="Nichiei Bussan" tabindex="-1" class="d-flex justify-content-center align-items-center">
                                    <img class="img" src="https://japana.vn/uploads/brand/1604394846-colo.jpg" alt="Colo Colo">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a rel="nofollow" href="#" title="Nichiei Bussan" tabindex="-1" class="d-flex justify-content-center align-items-center">
                                    <img class="img" src="https://japana.vn/uploads/brand/1604394846-colo.jpg" alt="Colo Colo">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a rel="nofollow" href="#" title="Nichiei Bussan" tabindex="-1" class="d-flex justify-content-center align-items-center">
                                    <img class="img" src="https://japana.vn/uploads/brand/1604394846-colo.jpg" alt="Colo Colo">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a rel="nofollow" href="#" title="Nichiei Bussan" tabindex="-1" class="d-flex justify-content-center align-items-center">
                                    <img class="img" src="https://japana.vn/uploads/brand/1604394846-colo.jpg" alt="Colo Colo">
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="blogs">
                    <div class="blog-header">
                        <h2 class="title-client d-flex justify-content-between">Thông tin tiêu dùng
                            <a href="#" title="thương hiệu">Xem tất cả <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
                        </h2>
                    </div>
                    <div class="blog-body">
                        <!-- on-pc -->
                        <div class="items-blog">
                            <div class="blog-item d-flex flex-column">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item d-flex flex-column">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item d-flex flex-column">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item d-flex flex-column">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item d-flex flex-column">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item d-flex flex-column">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item d-flex flex-column">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- on-mobile-scroll -->
                        <div class="blogs-scroll">
                            <div class="blog-item-scroll">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-item-scroll">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-item-scroll">
                                <div class="box-img">
                                    <a href="https://japana.vn/infographic-6-thuoc-bo-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-news-1505.jp" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" class="anima-hvr" tabindex="0">
                                        <img src="https://japana.vn/uploads/news/670x445-1617091838-o-xuong-khop-cua-nhat-ban-chay-nhat-hien-nay-0.jpg" alt="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="time-tag">
                                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 02-02-2021 | 05:11</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="" title="[Infographic] 6 thuốc bổ xương khớp của Nhật bán chạy nhất hiện nay" tabindex="0">[Infographic] 6 thuốc bổ xương khớp của Nhật bán...</a>
                                    </h3>
                                    <div class="count-news">
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 1113</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        </div>

    </section>

    @endsection

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {

            $('.items').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 5
            });
            $('.items-brand').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1,


                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        speed: 1000,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                }]
            });
            $('.items-blog').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,



            });
        });
    </script>
</body>
<style>
    .count-news span {

        font-weight: 400;
        font-size: 13px;
        color: #666;
    }

    .count-news {
        padding: 12px 0 21px;
    }

    .item .detail .title a {
        font-size: 14px;
        font-weight: 400;
        color: #333942;
        transition: all .5s;
        display: block;

    }

    .time-tag {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .active .title {
        margin-bottom: 18px;
    }

    .blog-item .detail {
        padding: 0 20px;
    }

    .blog-item {
        display: inline-block;
        margin: 5px 10px;
        border: 1px solid #e3e3e3;
    }

    .time-tag span {
        color: #999;
        font-size: 12px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        margin-right: 10px;
    }

    .brand-item img {
        width: 100%
    }

    .brand-item:hover img {
        width: 80%;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
    }


    .brand,
    .blogs {
        background-color: #fff;
        margin-bottom: 20px
    }

    a {

        color: #727272;
    }

    .brand-header,
    .blog-header {
        background: #fff;
        border-bottom: 1px solid #F0F3F7;
        padding: 10px 10px 10px;

    }

    .product-block,
    .banner {
        margin-bottom: 10px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
    }

    .product-mobile {
        display: none;
    }

    .slick-prev:hover,
    .slick-next:hover {
        -webkit-box-shadow: 0 0 1px 2px rgb(0 0 0 / 10%);
        box-shadow: 0 0 1px 2px rgb(0 0 0 / 10%);
        -webkit-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        background-color: #ced4da !important;
    }

    .slick-prev:before,
    .slick-next:before :hover {
        color: blue !important
    }

    .slick-prev:before,
    .slick-next:before {
        color: red !important;
    }

    .slick-prev,
    .slick-next {
        border-radius: 100%;
        top: 40% !important;
    }

    .items {
        background-color: #fff;

    }

    .box3item {
        padding: 10px;
    }

    .sp:hover {

        box-shadow: -2px 1px 7px -1px rgb(221 228 238 / 75%);
    }

    .block-sale span {

        font-size: 13px;
        font-weight: 500;
        color: #fff;
        position: absolute;
        top: 7px;
        right: 10px;
        width: 50px;
        height: 50px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .box-img,
    .box-img a {
        display: inline-block;
        position: relative;
        margin-top: 10px;
        margin-bottom: 0;
    }

    .box-img a img {
        width: 100%;
    }

    .block-sale {
        position: absolute;
        top: -25px;
        right: 0;
        height: 60px;
        width: 60px;
        padding: 8px;
        padding-bottom: 0;
        text-align: right;
        padding-left: 0;
    }

    .block-sale img,
    .block-sale2 img {
        height: auto;
        width: 100%;
    }

    .detail .title a {
        font-family: Roboto, sans-serif;
        font-weight: 400;
        font-size: 13px;
        color: #333;
        line-height: 1.5;
    }

    .detail .box-price {
        display: inline-block;
        line-height: 2;
        margin-top: 0;
    }

    .detail .box-price li.price {
        font-size: 16px t;
        color: #BB0029;
        margin-top: 8px;
    }

    .detail .box-price li.old-price {
        font-size: 14px;

        color: #aab5c3;
        margin-top: 0px;
        text-decoration: line-through;
        text-align: left;
    }

    .slick-slide {
        margin: 10px
    }

    .product .row div a img:hover {
        -webkit-box-shadow: 0 0 17px 2px rgb(0 0 0 / 30%);
        box-shadow: 0 0 17px 2px rgb(0 0 0 / 30%);
        -webkit-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .product {
        margin: 20px 0;
    }

    .sp1 {
        margin-bottom: 30px;
    }

    .sp2 {
        margin-bottom: 20px;
    }

    .product .row div a img {
        width: 100%
    }


    .product .row div {
        padding-left: 7px;
        padding-right: 7px;
    }

    .sp3-mobile {
        display: none;
    }

    .box3item:before {
        content: "";
        position: absolute;
        top: 59%;
        left: 95%;
        width: 10%;
        height: 38%;
        background: white;
    }

    .title-client {
        color: #000;
        font-size: 18px;

        font-weight: 500;
        text-transform: uppercase;
    }
    .blogs-scroll{
        display: none;
    }

    @media (max-width: 1024px) {
        .items-blog {
            display: none !important;

        }
.blogs-scroll .detail a{ font-size:18px !important

}
        .blogs-scroll {
            display: block;
            width: 100%;
            margin: 0 auto;
            position: relative;

            overflow: auto;
            overflow-y: hidden;
            margin: 0 auto;
            white-space: nowrap;
            padding: 7px 15px;
           
        }

        .blog-item-scroll {
            display: inline-table;
            width: 245px;

            margin: 0 17px;
        }


        .brand-header h2,
        .blog-header h2 {
            margin-bottom: 0;
            font-weight: 400;
            font-size: 4.5vw;
        }

        .brand-item img {
            border: 0.5px solid #cbcbcb;
        }

        .slick-prev,
        .slick-next {
            display: none !important
        }

        .box3item {

            border-right: 1px solid #DEE5EE;
        }

        .detail .title a,
        .detail .box-price li.price {
            font-size: 3.5vw;
        }





        .detail .box-price li.old-price {
            font-size: 3vw;


        }

       .product-mobile .box-img {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .box3item .detail {
            text-align: center
        }

        .block-sale span {


            top: 5px;
            right: 5px;
        }

        .product-pc {
            display: none;
        }

        .product-mobile {
            display: block;
            background-color: #fff;
        }

        .sp3 {
            display: none;
        }

        .sp3-mobile {
            display: block;
        }

        .sp1 div a img {
            width: 100%
        }

        .carousel-indicators li {

            line-height: 0;
            width: 15px;
            height: 15px;
            padding: 3px;
            cursor: pointer;
            color: transparent;
            background: rgba(45, 20, 7, .5);
            outline: none;
            border-radius: 100%;
            border: 0;
            margin: 0 7px;
        }

        .img-pc {
            display: none;
        }

        /* .slider-pc {
            display: none;
        }

        .slider-mobile {
            display: block
        } */
        .img-mobile {
            display: block
        }
    }

    .slider-mobile {
        display: none;
    }

    @media all and (min-width: 1025px) {
        .img-mobile {
            display: none
        }

        .slider-mobile {
            display: none;
        }

        .carousel-pc {
            position: relative;
            right: 0;
            bottom: -12px;
            left: 0;
            z-index: 15;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;

            padding-left: 0;
            margin-right: 0;
            margin-left: 0;
            list-style: none;
            width: 100%;
            height: auto;
            flex-wrap: wrap;
            border-bottom: 1px solid #e3e3e3;
        }

        .pager-item {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: #999 !important;
            display: inline-block;
            width: 100%;
            border-right: 2px solid #999;
            padding: 0 26px;
            margin: 10px 0;
        }

        .carousel-pc li {
            position: relative;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: auto;
            height: 30%;
            margin-right: 0px;
            margin-left: 0px;
            text-indent: 0;
            background-color: transparent;
        }

        .carousel-pc .active {
            border-bottom: 2px solid #bb0029;
        }

        .carousel-indicators li::before,
        .carousel-indicators li::after {

            content: none;
        }

        .carousel-indicators .active {
            background-color: transparent !important;
        }
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-duration: 2s;
        transition-property: opacity;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        opacity: 0;
    }

    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
        transform: translateX(0);
        transform: translate3d(0, 0, 0);
    }




    .carousel-inner {
        width: 100%;
    }


    .carousel-item img {
        width: 100%
    }
</style>

</html>