<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

  <!--link cua font family roboto google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <!--LINK FILE CSS -->
  <link rel="stylesheet" href="public/css/japana.css">
</head>
<style>



/**/
</style>

<body>
  <section class="navigation shadow-bottom">
    <div class="container" >
      <div class="content-nav">
        <a href="#" class="tchu">Trang Chủ</a>
        <a href="# " class="cs">/C-MART & ĐỐI TÁC</a>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-4">
      <div class="row">
        <!--html của chuyện mục thông tin-->
        <div class="col-lg-4 col-md-5 sliderbar  ">
          <div class=" card the  w-75  ">
                <div class="list-group ">
                    <a href="#" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> C-MART Việt Nam</a>
                    <a href="#" class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
                    <a href="{{url('/')}}" class=" content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Giơi Thiệu</a>
                    <a href="{{url('/csdd')}}" class="content-hover content-list list-group-item list-group-item-action border-0 ">Chính Sách Định Danh & Quyền Lợi Khách Hàng</a>
                    <a href="{{url('/hddh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Hướng Dẫn Đặt Hàng</a>
                    <a href="{{url('/cstt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Thanh Toán</a>
                    <a href="{{url('/csgn')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Giao Nhận </a>
                    <a href="{{url('/csdt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Đổi Trả </a>
                    <a href="{{url('/csbh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Bảo Hành</a>
                    <a href="{{url('/qddk')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Quy Định Điều Khoản  </a>
                    <a href="{{url('/qlv')}}" class="content-hover content-list list-group-item list-group-item-action border-0">C-MART & Khách Hàng Đặt Biệt  </a>
                    <a href="{{url('/dt')}}" class="active-csv  content-hover content-list list-group-item list-group-item-action border-0">C-MART & Đối Tác </a>
                    <a href="{{url('/lh')}}" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Liên hệ</a>

                </div>
            </div>
        </div>

        
        <!--phan ket thuc cua chuyen muc-->
        <div class="col-lg-8  col-md-7 col-12  align-content-center">
        <div class="btn-content-hidden text-right">
          <!--nut button chuyen muc an-->
          <button type="button" class="content-hover btn an title " data-toggle="modal" data-target="#rightModal">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <!--Phan noi dung cua trang Chính Sách Vận Chuyển-->
        <div class="static-detail">
          <h3 class="title">C-MART & ĐỐI TÁC </h3>
          <div class="detail-static">
            <p style="text-alignt:justify">Giao dịch giữa C-Mart và Quý Đối Tác tuân thủ theo các giao kết chung giữa hai bên (gọi chung là "Hợp đồng") cùng các chính sách, quy định, hướng dẫn của C-Mart:
            </p>
            <ul>
                <li>Bước 1: Quý Đối Tác tiến hành giao kết Hợp đồng với C-Mart;
                </li>
                <li>Bước 2: Quý Đối Tác và C-Mart phối hợp hỗ trợ các phương tiện cần thiết để đối phương thực hiện Hợp đồng: thông tin có bản quyền (hình ảnh, nội dung, giấy tờ có liên quan…) về thương hiệu và sản phẩm,...
                </li>
                <li>Bước 3: C-Mart và Quý Đối Tác phối hợp giao nhận, thanh toán và thực hiện các điều khoản khác theo Hợp đồng;</li>
                <li>Bước 4: C-Mart và Quý Đối Tác phối hợp xử trí những vấn đề phát sinh (nếu có).</li>
            </ul>
            <p style="text-alignt:justify"><strong> Quyền lợi của Quý Đối Tác.
            </strong></p>
            <ul>
                <li>⦁	Được giới thiệu, quảng bá, phân phối thương hiệu và sản phẩm, mở rộng thị trường đến mọi vị trí địa lý, kết nối - chinh phục đến mọi đối tượng, tầng lớp trong xã hội một cách nhiệt tình, rộng rãi;</li>
                <li>⦁	C-Mart sẽ là đại diện làm cầu nối giữa Khách Hàng – Đối Tác trên các phương diện;
                     </li>
                <li> ⦁	Tham gia vào chuỗi thương mại được liên kết chặt chẽ, rộng khắp, chuyên nghiệp, lành mạnh, hiệu quả; góp phần xây dựng môi trường văn hoá tiêu dùng: văn minh - tuyệt vời, phổ thông - tiện lợi, giá trị tối ưu;
                </li>
                <li>⦁	Các quyền lợi khác theo các chính sách, quy định, hướng dẫn của C-Mart, theo Hợp đồng, theo Pháp luật.</li>


            </ul>
            <p style="text-alignt:justify"><strong>Trách nhiệm của Quý Đối Tác.
            </strong></p>
            <p style="  text-alignt:justify">⦁	Chịu mọi trách nhiệm về sản phẩm, về doanh nghiệp, và các thông tin do Quý Đối Tác cung cấp cho C-Mart, cùng các vấn đề liên quan trong mọi trường hợp;</p>
            <p style="text-alignt:justify">
                ⦁	Phối hợp với C-Mart hoàn thành thành công Hợp đồng;
                </p>
            <ul>
                <li>	Cho phép C-Mart quyền giới thiệu, quảng bá doanh nghiệp, sản phẩm của Quý Đối Tác.</li>
                <li>

Quý Đối Tác cần bồi thường thiệt hại cho C-Mart nếu Quý Đối Tác vi phạm giao kết Hợp đồng, các chính sách, quy định, hướng dẫn của C-Mart.

                </li>
            </ul>
            <p style="text-alignt:justify">
                    Cung cấp, cập nhật nhanh chóng, chính xác và đầy đủ các thông tin cần thiết;
            </p>

            <ul>
                    <li>⦁	Tạo điều kiện cho C-Mart xác thực thông tin Đối Tác và các sản phẩm cung cấp.
                    </li>
                    <li>⦁	Cung cấp các thông tin bản quyền và các phương tiện để C- Mart hoàn thành thành công Hợp đồng.</li>
                    <li>⦁	Bằng cách giao dịch với C-Mart, Quý Đối Tác đã đồng ý điều khoản: Trước khi C-Mart xác nhận yêu cầu hủy các kênh kết nối được Quý Đối Tác đăng ký với C-Mart, thì mọi giao dịch, giao kết từ các kênh này đều được xem là giao kết Hợp đồng chính thức giữa C-Mart và Quý Đối Tác. Trước thời điểm trên, C-Mart xin miễn trừ mọi trách nhiệm từ những vấn đề phát sinh ngoài ý muốn của Quý Đối Tác qua các kênh kết nối trên.</li>


            </ul>
            <p style="text-alignt:justify">⦁	Phối hợp với C-Mart xử trí những vấn đề phát sinh giữa C-Mart và Quý Đối Tác (nếu có);</p>
            <ul>
                <li>⦁	Tự bảo mật, chịu hoàn toàn trách nhiệm, thường xuyên theo dõi các thông tin tài khoản, thông tin giao dịch, thông tin thông báo đến kênh kết nối được Quý Đối Tác đăng ký với C-Mart.</li>

                <li>⦁	Ngay khi phát hiện các dấu hiệu bất thường, Quý Đối Tác cần thông báo ngay và luôn với C-Mart và các chủ thể có liên quan để phối hợp xử lý kịp thời.
                </li>


            </ul>
            <p style="text-alignt:justify">⦁	Phối hợp với C-Mart ngăn chặn những hành vi vi phạm các chính sách, quy định, hướng dẫn của C-Mart, gây ảnh hưởng đến C-Mart và/hoặc các chủ thể liên quan;
                ⦁	Các trách nhiệm khác theo Trách nhiệm của Khách Hàng, Quy định Điều khoản & Điều kiện giao dịch, các chính sách, quy định, hướng dẫn của C-Mart, theo Hợp đồng, theo Pháp luật.
                 </p>














        </div>
        </div>

        </div>
      </div>
    </div>
  </section>












  <!--Phần Slider Của Chuyên Mục THông Tin -->

  <div class="modal right fade" id="rightModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="nav flex-column">
            <a href="#" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> C-MART Việt Nam</a>
                <a href="#" class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
                <a href="{{url('/')}}" class=" content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Giơi Thiệu</a>
                <a href="{{url('/csdd')}}" class="content-hover content-list list-group-item list-group-item-action border-0 ">Chính Sách Định Danh & Quyền Lợi Khách Hàng</a>
                <a href="{{url('/hddh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Hướng Dẫn Đặt Hàng</a>
                <a href="{{url('/cstt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Thanh Toán</a>
                <a href="{{url('/csgn')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Giao Nhận </a>
                <a href="{{url('/csdt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Đổi Trả </a>
                <a href="{{url('/csbh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Bảo Hành</a>
                <a href="{{url('/qddk')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Quy Định Điều Khoản  </a>
                <a href="{{url('/qlv')}}" class="content-hover content-list list-group-item list-group-item-action border-0">C-MART & Khách Hàng Đặt Biệt  </a>
                <a href="{{url('/dt')}}" class="active-csv  content-hover content-list list-group-item list-group-item-action border-0">C-MART & Đối Tác </a>
                <a href="{{url('/lh')}}" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Liên hệ</a>
            </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn an  content-hover" data-dismiss="modal"><i class="fas fa-times"></i></button>
        </div>
      </div>
    </div>
  </div>








  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>

</html>


