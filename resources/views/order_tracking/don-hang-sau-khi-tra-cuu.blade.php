<!doctype html>
<html lang="en">

<head>
    <title>Japana Việt Nam</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{URL::to('public/css/boostrap/bootstrap.min.css')}}" rel="stylesheet" type='text/css' />
    <!-- Main CSS -->
    <link href="{{URL::to('public/css/order_tracking/style.css')}}" rel="stylesheet" type='text/css' />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="check-order">
                    <ul>
                        <li class="active">
                            <a href="#" title="title">
                                <img src="{{URL::to('public/images/icon1.png')}}" alt="title" class="img-order">
                                <img src="{{URL::to('public/images/icon1a.png')}}" alt="title" class="hover-order">
                                Theo dõi đơn hàng
                            </a>
                        </li>
                        <li>
                            <a href="#" title="title">
                                <img src="{{URL::to('public/images/icon1.png')}}" alt="title" class="img-order">
                                <img src="{{URL::to('public/images/icon1a.png')}}" alt="title" class="hover-order">
                                Chăm sóc khách hàng
                            </a>
                            <ul>
                                <li><a href="{{URL::to('/chinh-sach-van-chuyen')}}" title="Chính sách vận chuyển">Chính
                                        sách vận chuyển</a></li>
                                <li><a href="{{URL::to('/dieu-khoan-giao-dich')}}" title="Điều khoản giao dịch">Điều
                                        khoản giao dịch</a></li>
                                <li><a href="{{URL::to('/phuong-thuc-thanh-toan')}}"
                                        title="Phương thức thanh toán">Phương thức thanh toán</a></li>
                                <li><a href="{{URL::to('/thoi-gian-giao-hang')}}" title="Thời gian giao hàng">Thời gian
                                        giao hàng</a></li>
                                <li><a href="{{URL::to('/chinh-sach-bao-hanh')}}" title="Chính sách bảo hành">Chính sách
                                        bảo hành</a></li>
                                <li><a href="{{URL::to('/chinh-sach-bao-mat')}}" title="Chính sách bảo mật">Chính sách
                                        bảo mật</a></li>
                                <li><a href="{{URL::to('/chinh-sach-doi-tra-va-hoan-tien')}}"
                                        title="Chính sách đổi trả và hoàn tiền">Chính sách đổi trả và hoàn tiền</a></li>
                                <li><a href="{{URL::to('/huong-dan-mua-hang')}}" title="Hướng dẫn mua hàng">Hướng dẫn
                                        mua hàng</a></li>
                                <li><a href="{{URL::to('/quyen-loi-vip')}}" title="Quyền lợi VIP">Quyền lợi VIP</a></li>
                                <li><a href="{{URL::to('/quy-dinh-ban-hang-tren-website-japana')}}"
                                        title="Quy định bán hàng trên Website Japana">Quy định bán hàng trên Website
                                        Japana</a></li>
                                <li><a href="{{URL::to('/cau-hoi-thuong-gap')}}" title="Câu hỏi thường gặp">Câu hỏi
                                        thường gặp</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                <main class="checkorder content">
                    <h3 class="title">THÔNG TIN ĐƠN HÀNG</h3>
                    <form action="" method="get">
                        <div class="write-order form-group">
                            <input value="chEMwk" type="text" name="code" class="form-control ipt-order"
                                placeholder="Nhập mã đơn hàng">
                            <button type="submit" class="btn-check">Tra cứu</button>
                        </div>
                    </form>
                    <div class="box-order">
                        <div class="top-order">
                            <p><span>Mã đơn hàng:</span> chEMwk</p>
                            <p><span>Tình trạng đơn hàng:</span> <span class="action-order">
                                    <b style="color:#15b02a">Mới đặt</b> </span></p>
                        </div>

                        <div class="middle-order">
                            <ol class="progress">
                                <li class=" 
                            ">
                                    <p>
                                        Mới đặt <span>2021-09-22 09:53:58</span>
                                    </p>
                                </li>
                                <li class="pause-complete 
                            ">
                                    <p>
                                        Đã xác nhận <span></span>
                                    </p>
                                </li>
                                <li class="pause-complete 
                            ">
                                    <p>
                                        Đang xử lý <span></span>
                                    </p>
                                </li>
                                <li class="pause-complete 
                            ">
                                    <p>
                                        Đang giao hàng <span></span>
                                    </p>
                                </li>
                                <li class="pause-complete 
                            ">
                                    <p>
                                        Giao hàng thành công <span></span>
                                    </p>
                                </li>
                            </ol>
                        </div>

                        <div class="box-infocart list-order">
                            <h3 class="title">Thông tin đơn hàng:</h3>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th style="width: 373px; border">Tên sản phẩm</th>
                                        <th style="width: 84px;">Số lượng</th>
                                        <th style="width: 143px;">Thành tiền</th>
                                    </tr>


                                </tbody>
                            </table>
                            <div class="box-allprice box-price-order">
                                <p>Tạm tính:<span> 0 đ</span></p>
                                <p>Phí vận chuyển:<span> + 20.000 đ</span></p>
                                <p class="last-price">Tổng cộng: <span>175.000 đ</span></p>
                            </div>
                        </div>


                    </div>
                </main>
            </div>
        </div>




    </div>
</body>

</html>