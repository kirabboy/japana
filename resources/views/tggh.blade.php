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
        <a href="# " class="cs">/Chính Sách Vận Chuyển</a>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-4">
      <div class="row">
        <!--html của chuyện mục thông tin-->
        <div class="col-lg-4 col-md-5 sliderbar  ">
          <div class="card  w-75  ">
            <div class="list-group ">
              <a href="#" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Japana Việt Nam</a>
              <a href="#" class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
              <a href="{{url('/')}}" class="content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Chính sách vận chuyển</a>
              <a href="{{url('/dkgd')}}" class=" content-hover content-list list-group-item list-group-item-action border-0 ">Điều khoản giao dịch</a>
              <a href="{{url('/pttt')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Phương thức thanh toán</a>
              <a href="{{url('/tggh')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">Thời gian giao hàng </a>
              <a href="{{url('/csbh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo hành </a>
              <a href="{{url('/csbm')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo mật </a>
              <a href="{{url('/csdt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách đổi trả và hoàn tiền </a>
              <a href="{{url('/hdmh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Hướng dẫn mua hàng  </a>
              <a href="{{url('/qlv')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Quyền lời VIP </a>
              <a href="{{url('/qdbh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Quy định bán hàng trên Website japana </a>
              <a href="{{url('/chtg')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Câu hỏi thương gặp </a>
              <a href="{{url('/lh')}}" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Liên hệ</a>
            </div>
          </div>

        </div>
        <!--phan ket thuc cua chuyen muc-->
        <div class="col-lg-8  col-md-7 col-12  align-content-center">
        <div class="btn-content-hidden text-right">
          <!--nut button chuyen muc an-->
          <button type="button" class="content-hover btn title m-2" data-toggle="modal" data-target="#rightModal">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <!--Phan noi dung cua trang Chính Sách Vận Chuyển-->
        <div class="static-detail">
            <h3 class="title">Thời gian giao hàng</h3>
            <div class="detail-static">
                <p style="text-align:justify">Thời gian giao hàng được tính bắt đầu kể từ khi Siêu Thị Nhật Bản Japana&nbsp;xác nhận đơn hàng thành công. Quý khách có thể tham khảo tại bảng thời gian giao hàng của Japana bên dưới:</p>

                <h3 style="text-align:justify"><strong>Khi các mặt hàng có tại Việt Nam:</strong></h3>

                <h4 style="text-align:justify"><img class="card-img" style="width:100%"  alt="THỜI GIAN GIAO HÀNG" src="https://japana.vn/uploads/detail/2019/06/images/1.jpeg" ></h4>

                <h3 style="text-align:justify"><strong>Khi các sản phẩm của Japana đang ở Nhật Bản:</strong></h3>

                <h4 style="text-align:justify"><img alt="THỜI GIAN GIAO HÀNG" class="card-img" style="width:100%"  src="https://japana.vn/uploads/detail/2019/06/images/2.jpeg"
                <h3 style="text-align: justify;"><strong>Vì sao các sản phẩm của&nbsp;Siêu Thị Nhật Bản Japana&nbsp;đang ở Nhật Bản?</strong></h3>

                <p style="text-align:justify"><strong><a href="https://japana.vn" style="line-height: 20.8px;">Japana.vn</a></strong>&nbsp;là website bán hàng Nhật Bản trực tuyến, các sản phẩm được đăng tải trên website Japana do Văn Phòng đại diện của công ty&nbsp;Japana Việt nam tại Nhật Bản và/hoặc do các nhà cung cấp&nbsp;nhập khẩu trực tiếp từ Nhật Bản&nbsp;về Việt Nam. Tuy nhiên, vì là ngành hàng tiêu dùng có nhiều sản phẩm, nên có một số sản phẩm&nbsp;theo quy định hiện hành của Japana,&nbsp;sau khi Quý khách hàng đặt mua chúng tôi mới nhập về, vì vậy thời gian giao hàng lâu hơn hàng đã có tại Việt Nam khoản 10 ngày. Trong thời gian tới chúng tôi sẽ cố gắng khắc phục vấn đề này.</p>

                <p style="text-align:justify">Các trường hợp sau đây nằm ngoài phạm vị cam kết của Japana về việc không giao hàng đúng hẹn:</p>

                <ul>
                <li style="text-align: justify;">Quý khách không cung cấp chính xác, đầy đủ địa chỉ giao hàng và thông tin liên lạc trong quá trình đặt hàng (phần "Thông tin Giao hàng").</li>
                <li style="text-align: justify;"><strong>Siêu Thị Nhật Bản Japana</strong> nhiều lần liên hệ quý khách qua điện thoại, email nhưng không nhận được phản hồi</li>
                <li style="text-align: justify;">Thời gian giao đến địa chỉ giao hàng đã được ấn định trước với quý khách nhưng quý khách không sẵn sàng để nhận hàng.</li>
                <li style="text-align: justify;"><strong>Siêu Thị Nhật Bản Japana</strong>&nbsp;đã giao hàng đúng hẹn theo "Thông tin Giao hàng" nhưng quý khách để nhân viên giao hàng&nbsp;chờ quá 10 phút để nhận hàng và mọi nỗ lực của Japana nhằm liên hệ với quý khách đều không thành công.</li>
                <li style="text-align: justify;">Những trường hợp bất khả kháng như thiên tai (bao gồm động đất, gió xoáy, tai nạn giao thông,...), hoặc trường hợp gián đoạn mạng lưới giao thông trên quy mô toàn quốc hay quy mô địa phương và những trục trặc cơ học xảy ra cho các phương tiện vận chuyển hay máy móc.</li>
                </ul>
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
            <a href="#"  class=" content-hover nav-item nav-link"> Japana Việt Nam</a>
            <a href="#"  class="active-csv content-hover nav-item nav-link"> Chăm sóc khách hàng</a>
            <a href="#"  class=" content-hover nav-item nav-link">Chính sách vận chuyển</a>
            <a href="#"  class=" content-hover nav-item nav-link">Điều khoản giao dịch</a>
            <a href="#"  class=" content-hover nav-item nav-link">Phương thức thanh toán</a>
            <a href="#"  class=" content-hover nav-item nav-link">Thời gian giao hàng </a>
            <a href="#"  class=" content-hover nav-item nav-link">Chính sách bảo hành </a>
            <a href="#"  class=" content-hover nav-item nav-link">Chính sách đổi trả và hoàn tiền </a>
            <a href="#"  class="  content-hover nav-item nav-link">Hướng dẫn mua hàng  </a>
            <a href="#"  class="  content-hover nav-item nav-link">Quyền lời VIP </a>
            <a href="#"  class="  content-hover nav-item nav-link">Quy định bán hàng trên Website japana </a>
            <a href="#"  class="  content-hover nav-item nav-link">Câu hỏi thương gặp </a>
            <a href="#"  class="  content-hover nav-item nav-link"> Liên hệ</a>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn  content-hover" data-dismiss="modal"><i class="fas fa-times"></i></button>
        </div>
      </div>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>

</html>


