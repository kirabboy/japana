<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/thanhtoan.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link href="https://japana.vn/assets/frontend/assets/images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="https://japana.vn/" rel="canonical">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://japana.vn/assets/frontend/assets/images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="https://japana.vn/assets/frontend/assets/css/select2.min.css" rel="stylesheet"> <!-- <meta name="google-site-verification" content="UdE5nNyjcvQdIcW4dez9fUO4CG0zVMkbTErLVnR1hbw" /> -->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-sm-12 col-12">
                <div class="card-left">
                    <div class="card-information">
                        <div class="card-information-header">
                            <h3>THÔNG TIN GIAO HÀNG</h3>
                        </div>
                        <hr>
                        <div class="card-information-body">
                            <div class="col-xl-6 ">
                                <div class="form-group">
                                    <label for="">Tên:</label>
                                    <input type="text" class="form-control " placeholder="Bạn chưa nhập họ tên">
                                </div>
                                <div class="form-group">
                                    <label for="">Tỉnh/ Thành phố:</label>
                                    <input type="text" class="form-control" placeholder="Chọn tỉnh, thành phố">
                                </div>
                                <div class="form-group">
                                    <label for="">Phường/ Xã:</label>
                                    <input type="text" class="form-control" placeholder="Chọn phường, xã">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" placeholder="Nhập email">
                                </div>
                            </div>
                            <div class="col-xl-6 ">
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" class="form-control" placeholder="Bạn chưa nhập số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="">Quận/ Huyện</label>
                                    <input type="text" class="form-control" placeholder="Chọn quận, huyện">
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" class="form-control" placeholder="Ban chưa nhập địa chỉ">
                                </div>
                                <div class="form-group">
                                    <label for="">Ghi chú</label>
                                    <input type="text" class="form-control" placeholder="Nhập ghi chú đơn hàng">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="phuongthuc-thanhtoan">
                        <div class="phuongthuc-thanhtoan-card-header">
                            <h3>THANH TOÁN</h3>
                        </div>
                        <hr>
                        <div class="phuongthuc-thanhtoan-card-body">
                            <div class="thanhtoankhigiaohang">
                                <input type="radio" name="optradio"> <span>Chuyển khoản qua ngân hàng</span>
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="thanhtoantructuyen">
                                <input type="radio" name="optradio"> <span>Chuyển khoản qua ngân hàng</span>
                                <img src="{{asset('assets/image/vnpay.png')}}">
                            </div>
                            <div class="chuyenkhoan">
                                <input type="radio" name="optradio"> <span>Chuyển khoản qua ngân hàng</span>
                                <div class="tk-nganhang">
                                    <p>Doanh nghiệp: Công ty cổ phần</p>
                                    <p>TK ngân hàng: Công ty cổ phần</p>
                                    <p>Chi nhánh: Công ty cổ phần</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-12 col-12">
                <div class="card-left">
                    <div class="makhuyenmai">
                        <div class="makhuyenmai-header">
                            <h3>Mã khuyến mãi</h3>
                        </div>
                        <div class="makhuyenmai-body">
                            <input type="text" class="makhuyenmai-body-input" placeholder="Nhập mã...">
                            <button class="btn btn-primary">Áp dụng</button>
                        </div>
                    </div>
                    <div class="donhang">
                        <div class="donhang-header">
                            <h3>ĐƠN HÀNG</h3> <span>(3 SẢN PHẨM)</span>
                        </div>
                        <div class="donhang-body">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>SL</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="title">Viên uống bổ mắt Omega-3 Orihiro 180 viên</td>
                                        <td>1</td>
                                        <td>379.000 đ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title">Tảo lục hoàng gia Chlorella Royal DX Nhật Bản 1550 viên</td>
                                        <td>1</td>
                                        <td>579.000 đ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title">Viên uống bổ sung Vitamin C DHC 120 viên</td>
                                        <td>1</td>
                                        <td>145.000 đ
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="donhang-footer">
                            <div class="card-right">
                                <div class="card-body">
                                    <p class="tamtinh"> <span class="tamtinh-title">Tạm tính:</span> <span class="tamtinh-price">3.314.000đ</span> </p>
                                    <hr>
                                    <p class="total"> <span>Tổng cộng:</span> <span class="total-price">3.314.000đ</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn-dathang">Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="{{asset('assets/js/main.js')}}">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>