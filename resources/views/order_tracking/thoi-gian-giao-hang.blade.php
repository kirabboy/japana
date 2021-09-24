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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <aside class="sidebar sidebar-primary check-order ">
            <ul>
                <li>
                    <a href="#" title="Japana Việt Nam">
                        <img src="{{URL::to('public/images/icon2.png')}}" alt="Japana Việt Nam" class="img-order">
                        <img src="{{URL::to('public/images/icon2a.png')}}" alt="Japana Việt Nam"
                            class="hover-order">Japana Việt Nam
                    </a>
                </li>
                <li class="active">
                    <a href="#" title="Chăm sóc khách hàng">
                        <img src="{{URL::to('public/images/icon2.png')}}" alt="Chăm sóc khách hàng" class="img-order">
                        <img src="{{URL::to('public/images/icon2a.png')}}" alt="Chăm sóc khách hàng"
                            class="hover-order">Chăm sóc khách hàng
                    </a>
                    <ul>
                        <li><a href="{{URL::to('/chinh-sach-van-chuyen')}}" title="Chính sách vận chuyển">Chính sách vận
                                chuyển</a></li>
                        <li><a href="{{URL::to('/dieu-khoan-giao-dich')}}" title="Điều khoản giao dịch">Điều khoản giao
                                dịch</a></li>
                        <li><a href="{{URL::to('/phuong-thuc-thanh-toan')}}" title="Phương thức thanh toán">Phương thức
                                thanh toán</a></li>
                        <li class="active"><a href="{{URL::to('/thoi-gian-giao-hang')}}" title="Thời gian giao hàng">Thời gian giao
                                hàng</a></li>
                        <li><a href="{{URL::to('/chinh-sach-bao-hanh')}}" title="Chính sách bảo hành">Chính sách bảo
                                hành</a></li>
                        <li><a href="{{URL::to('/chinh-sach-bao-mat')}}" title="Chính sách bảo mật">Chính sách bảo
                                mật</a></li>
                        <li><a href="{{URL::to('/chinh-sach-doi-tra-va-hoan-tien')}}"
                                title="Chính sách đổi trả và hoàn tiền">Chính sách đổi trả và hoàn tiền</a></li>
                        <li><a href="{{URL::to('/huong-dan-mua-hang')}}" title="Hướng dẫn mua hàng">Hướng dẫn mua
                                hàng</a></li>
                        <li><a href="{{URL::to('/quyen-loi-vip')}}" title="Quyền lợi VIP">Quyền lợi VIP</a></li>
                        <li><a href="{{URL::to('/quy-dinh-ban-hang-tren-website-japana')}}"
                                title="Quy định bán hàng trên Website Japana">Quy định bán hàng trên Website Japana</a>
                        </li>
                        <li><a href="{{URL::to('/cau-hoi-thuong-gap')}}" title="Câu hỏi thường gặp">Câu hỏi thường
                                gặp</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{URL::to('/lien-he')}}" title="Liên hệ">
                        <img src="{{URL::to('public/images/icon2.png')}}" alt="Liên hệ" class="img-order">
                        <img src="{{URL::to('public/images/icon2a.png')}}" alt="Liên hệ" class="hover-order">Liên hệ
                    </a>
                </li>
            </ul>
        </aside>

        <div class="static-detail">
            <h3 class="title">Thời gian giao hàng</h3>
            <div class="detail-static">
                <p style="text-align:justify">Thời gian giao hàng được tính bắt đầu kể từ khi Siêu Thị Nhật Bản
                    Japana&nbsp;xác nhận đơn hàng thành công. Quý khách có thể tham khảo tại bảng thời gian giao hàng
                    của Japana bên dưới:</p>

                <h3 style="text-align:justify"><strong>Khi các mặt hàng có tại Việt Nam:</strong></h3>

                <h4 style="text-align:justify"><img alt="THỜI GIAN GIAO HÀNG"
                        src="{{URL::to('public/images/mathangtaivietnam.jpeg')}}" style="height:242px; width:800px">
                </h4>

                <h3 style="text-align:justify"><strong>Khi các sản phẩm của Japana đang ở Nhật Bản:</strong></h3>

                <h4 style="text-align:justify"><img alt="THỜI GIAN GIAO HÀNG"
                        src="{{URL::to('public/images/mathangtainhatbang.jpeg')}}" style="height:238px; width:800px">
                </h4>

                <h3 style="text-align: justify;"><strong>Vì sao các sản phẩm của&nbsp;Siêu Thị Nhật Bản Japana&nbsp;đang
                        ở Nhật Bản?</strong></h3>

                <p style="text-align:justify"><strong><a href="https://japana.vn"
                            style="line-height: 20.8px;">Japana.vn</a></strong>&nbsp;là website bán hàng Nhật Bản trực
                    tuyến, các sản phẩm được đăng tải trên website Japana do Văn Phòng đại diện của công ty&nbsp;Japana
                    Việt nam tại Nhật Bản và/hoặc do các nhà cung cấp&nbsp;nhập khẩu trực tiếp từ Nhật Bản&nbsp;về Việt
                    Nam. Tuy nhiên, vì là ngành hàng tiêu dùng có nhiều sản phẩm, nên có một số sản phẩm&nbsp;theo quy
                    định hiện hành của Japana,&nbsp;sau khi Quý khách hàng đặt mua chúng tôi mới nhập về, vì vậy thời
                    gian giao hàng lâu hơn hàng đã có tại Việt Nam khoản 10 ngày. Trong thời gian tới chúng tôi sẽ cố
                    gắng khắc phục vấn đề này.</p>

                <p style="text-align:justify">Các trường hợp sau đây nằm ngoài phạm vị cam kết của Japana về việc không
                    giao hàng đúng hẹn:</p>

                <ul>
                    <li style="text-align: justify;">Quý khách không cung cấp chính xác, đầy đủ địa chỉ giao hàng và
                        thông tin liên lạc trong quá trình đặt hàng (phần "Thông tin Giao hàng").</li>
                    <li style="text-align: justify;"><strong>Siêu Thị Nhật Bản Japana</strong> nhiều lần liên hệ quý
                        khách qua điện thoại, email nhưng không nhận được phản hồi</li>
                    <li style="text-align: justify;">Thời gian giao đến địa chỉ giao hàng đã được ấn định trước với quý
                        khách nhưng quý khách không sẵn sàng để nhận hàng.</li>
                    <li style="text-align: justify;"><strong>Siêu Thị Nhật Bản Japana</strong>&nbsp;đã giao hàng đúng
                        hẹn theo "Thông tin Giao hàng" nhưng quý khách để nhân viên giao hàng&nbsp;chờ quá 10 phút để
                        nhận hàng và mọi nỗ lực của Japana nhằm liên hệ với quý khách đều không thành công.</li>
                    <li style="text-align: justify;">Những trường hợp bất khả kháng như thiên tai (bao gồm động đất, gió
                        xoáy, tai nạn giao thông,...), hoặc trường hợp gián đoạn mạng lưới giao thông trên quy mô toàn
                        quốc hay quy mô địa phương và những trục trặc cơ học xảy ra cho các phương tiện vận chuyển hay
                        máy móc.</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>