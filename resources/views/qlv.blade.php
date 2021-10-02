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
        <a href="# " class="cs">/C-Mart Và Khách Hàng Đặt Biệt</a>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-4">
      <div class="row">
        <!--html của chuyện mục thông tin-->
        <div class="col-lg-4 col-md-5 sliderbar  ">
          <div class="card the  w-75  ">
            <div class="list-group ">
                <a href="#" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> C-MART Việt Nam</a>
                <a href="#" class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
                <a href="{{url('/')}}" class="  content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Giơi Thiệu</a>
                <a href="{{url('/csdd')}}" class=" content-hover content-list list-group-item list-group-item-action border-0 ">Chính Sách Định Danh & Quyền Lợi Khách Hàng</a>
                <a href="{{url('/hddh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Hướng Dẫn Đặt Hàng</a>
                <a href="{{url('/cstt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Thanh Toán</a>
                <a href="{{url('/csgn')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Giao Nhận </a>
                <a href="{{url('/csdt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Đổi Trả </a>
                <a href="{{url('/csbh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Bảo Hành</a>
                <a href="{{url('/qddk')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Quy Định Điều Khoản  </a>
                <a href="{{url('/qlv')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">C-MART & Khách Hàng Đặt Biệt  </a>
                <a href="{{url('/dt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">C-MART & Đối Tác </a>
                <a href="{{url('/lh')}}" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Liên hệ</a>
            </div>
          </div>

        </div>
        <!--phan ket thuc cua chuyen muc-->
        <div class="col-lg-8  col-md-7 col-12  align-content-center">
        <div class="btn-content-hidden text-right">
          <!--nut button chuyen muc an-->
          <button type="button" class="content-hover btn an title m-2" data-toggle="modal" data-target="#rightModal">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <!--Phan noi dung cua trang Chính Sách Vận Chuyển-->
        <div class="static-detail">
            <h3 class="title">C-Mart và khách hàng đặt biệt</h3>
            <div class="detail-static">
                <p style="text-alignt:justify">
                     Bằng cách giao dịch với C-Mart, Quý Khách đã đồng ý điều khoản: Trước khi C-Mart xác nhận yêu cầu hủy thông tin liên lạc được Quý Khách đăng ký với C-Mart, thì mọi giao dịch, giao kết từ các kênh liên lạc trên đều được xem là giao kết Hợp đồng chính thức giữa C-Mart và Quý Khách. Trước thời điểm trên, C-Mart xin miễn trừ mọi trách nhiệm từ những vấn đề phát sinh ngoài ý muốn của Quý Khách qua các kênh liên lạc trên.
                </p>
                <p style="text-alignt:justify"> Giao dịch giữa C-Mart và Quý Khách Hàng Đặc Biệt tuân thủ theo các giao kết chung giữa hai bên (gọi chung là "Hợp đồng") cùng các chính sách, quy định, hướng dẫn của C-Mart:

                </p>
                <ul>
                    <li>
                        Bước 1: Quý Khách Hàng được nhận diện theo Chính sách Định danh Khách Hàng, tiến hành đăng ký Hồ Sơ Khách Hàng Đặc Biệt như hướng dẫn tại Hướng dẫn tạo mới HSKH Đặc biệt;
                    </li>
                    <li>Bước 2: Quý Khách Hàng tiến hành giao kết Hợp đồng với C-Mart;</li>
                    <li>Bước 3: C-Mart và Quý Khách Hàng phối hợp hỗ trợ các phương tiện cần thiết để đối phương thực hiện Hợp đồng: thông tin có bản quyền (hình ảnh, nội dung, giấy tờ có liên quan…) về thương hiệu và sản phẩm,...</li>
                    <li>Bước 4: C-Mart và Quý Khách Hàng phối hợp giao nhận, thanh toán, và thực hiện các điều khoản khác theo Hợp đồng;</li>
                    <li>Bước 5: C-Mart và Quý Khách Hàng phối hợp xử trí những vấn đề phát sinh (nếu có).</li>

                </ul>
                <p style="text-alignt:justify"> Quyền lợi của Quý Khách Hàng Đặc Biệt được quy định thỏa 02 mục:</p>
                <ul>
                    <li>⦁	Quyền lợi cơ bản của Khách Hàng;
                    </li>
                    <li>⦁	Khách Hàng Định Danh Thương Mại hoặc Khách Hàng Định Danh Cộng Tác Viên.</li>
                </ul>
                <p style="text-alignt:justify"> Trách nhiệm của Quý Khách Hàng Đặc Biệt được quy định thỏa 03 mục</p>
                <ul>
                    <li>⦁	Trách nhiệm của Khách Hàng ;
                    </li>
                    <li>⦁   Quy định Điều khoản & Điều kiện giao dịch;
                        </li>
                    <li>⦁	Các điều khoản khác theo Hợp đồng.</li>
                </ul>
                <p style="text-alignt:justify"> <strong>VẤN ĐỀ THƯỜNG GẶP » HỒ SƠ KHÁCH HÀNG ĐẶC BIỆT TẠI C-MART</strong></p>
                <p style="text-alignt:justify"><strong>Phí HSKH Đặc Biệt tại C-Mart = MIỄN PHÍ ? Thời gian ?   </strong>	          </p>
                <p style="text-alignt:justify">- HOÀN TOÀN MIỄN PHÍ. C-Mart hỗ trợ MIỄN PHÍ hoàn toàn các thao tác về Hồ Sơ Khách Hàng tại C-Mart, như tạo mới, chỉnh sửa, duy trì,…
                    <br>- Thời gian xét duyệt thao tác diễn ra trong tối đa 24 giờ làm việc (kể từ thời điểm C-Mart xác nhận yêu cầu).
                    </p>
                <p style="text-alignt:justify">
                <strong>Làm sao đây để biết bản thân đã có HSKH Đặc Biệt tại C-Mart hay chưa ?

                    </strong></p>
                <p style="text-alignt:justify">- Quý Khách Hàng truy cập vào Trang cá nhân, và kiểm tra mức Định danh Khách Hàng là: Khách Hàng Thương Mại hoặc Cộng Tác Viên.</p>
                <p style="text-alignt:justify"> Hướng dẫn tạo mới HSKH Đặc Biệt.<strong></strong></p>
                <ul>
                    <li>Bước 1: Quý Khách Hàng thực hiện theo hướng dẫn tại Hướng dẫn tạo mới Hồ Sơ Khách Hàng ;</li>
                    <li>
                        Bước 2: Sau khi đã đăng ký thành công Hồ Sơ Khách Hàng, Quý Khách Hàng vui lòng liên hệ đến kênh giao dịch chính thức của C-Mart, bằng kênh thông tin xác nhận giao dịch với C-Mart để được hỗ trợ ngay và luôn.
                        </li>
                </ul>
                <p style="text-alignt:justify"><strong>Hướng dẫn truy cập HSKH Đặc Biệt.</strong> </p>
                <p style="text-alignt:justify">
                    Quý Khách Hàng thực hiện tương tự theo hướng dẫn tại Hướng dẫn truy cập Hồ Sơ Khách Hàng.
                    </p>
                <p style="text-alignt:justify"><strong>
                    Hướng dẫn quản lý thông tin HSKH Đặc Biệt.
                    </strong></p>
                <p style="text-alignt:justify">Quý Khách Hàng thực hiện tương tự theo hướng dẫn tại Hướng dẫn quản lý Hồ Sơ Khách Hàng.</p>




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
            <a href="{{url('/')}}" class="  content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Giơi Thiệu</a>
            <a href="{{url('/csdd')}}" class=" content-hover content-list list-group-item list-group-item-action border-0 ">Chính Sách Định Danh & Quyền Lợi Khách Hàng</a>
            <a href="{{url('/hddh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Hướng Dẫn Đặt Hàng</a>
            <a href="{{url('/cstt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Thanh Toán</a>
            <a href="{{url('/csgn')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Giao Nhận </a>
            <a href="{{url('/csdt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Đổi Trả </a>
            <a href="{{url('/csbh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Bảo Hành</a>
            <a href="{{url('/qddk')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Quy Định Điều Khoản  </a>
            <a href="{{url('/qlv')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">C-MART & Khách Hàng Đặt Biệt  </a>
            <a href="{{url('/dt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">C-MART & Đối Tác </a>
            <a href="{{url('/lh')}}" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Liên hệ</a>
        </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn an content-hover" data-dismiss="modal"><i class="fas fa-times"></i></button>
        </div>
      </div>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>

</html>


