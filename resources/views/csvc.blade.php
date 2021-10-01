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
        <a href="# " class="cs">/Chính Sách Giao - Nhận</a>
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
                <a href="#" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Japana Việt Nam</a>
                <a href="#" class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
                <a href="{{url('/')}}" class="active-csv   content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Chính sách giao nhận</a>
                <a href="{{url('/dkgd')}}" class="content-hover content-list list-group-item list-group-item-action border-0 ">Điều khoản giao dịch</a>
                <a href="{{url('/pttt')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Phương thức thanh toán</a>
                <a href="{{url('/tggh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Thời gian giao hàng </a>
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
          <button type="button" class="content-hover btn an title " data-toggle="modal" data-target="#rightModal">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <!--Phan noi dung cua trang Chính Sách Vận Chuyển-->
        <div class="static-detail">
          <h3 class="title">Chính sách vận chuyển </h3>
          <div class="detail-static">
                <p style="text-align:justify">Bằng cách giao dịch với C-Mart, Quý Khách đã đồng ý điều khoản: Trước khi C-Mart xác nhận yêu cầu hủy thông tin liên lạc được Quý Khách đăng ký với C-Mart, thì mọi giao dịch, giao kết từ các kênh liên lạc trên đều được xem là giao kết Hợp đồng chính thức giữa C-Mart và Quý Khách. Trước thời điểm trên, C-Mart xin miễn trừ mọi trách nhiệm từ những vấn đề phát sinh ngoài ý muốn của Quý Khách qua các kênh liên lạc trên.
                    </p>
                <p style="text-align:justify">	Với các nhóm hàng có sẵn tại C-Store, Quý Khách Hàng có thể tiến hành phương thức Mua nhanh – Bán nhanh (Trải nghiệm tại chỗ – Thanh toán ngay tại C-Store), mà vẫn được đảm bảo đầy đủ các chính sách và quyền lợi. Trong tương lai, C-Store sẽ bổ sung đa dạng các nguồn hàng để Khách cần – Khách đến – Khách có đem về.
                </p>
                <p style="text-align:justify">	C-Mart với 02 đơn vị vận chuyển là C-Ship (nếu địa chỉ nhận hàng tại TP.HCM) và Vietnam Post (nếu địa chỉ nhận hàng khác TP.HCM) sẽ cung cấp đa dạng các phương thức giao nhận, hỗ trợ Quý Khách Hàng lựa chọn phương thức giao nhận phù hợp nguyện vọng, tiện lợi và nhanh chóng:</p>
                <ul>
                    <li>Giao hàng đến địa điểm yêu cầu: Địa điểm nhận hàng là vị trí cụ thể theo nhu cầu của Quý Khách Hàng;</li>
                    <li>Dùng thông tin nhận hàng giống thông tin đặt hàng;</li>
                    <li>Dùng thông tin nhận hàng trước đây;</li>
                    <li>Nhận hàng tại Cửa hàng (C-Store hoặc Cửa hàng phân phối): Quý Khách Hàng sẽ đến trực tiếp C-Store hoặc Cửa hàng phân phối đã lựa chọn để nhận hàng /sử dụng dịch vụ. Quý Khách Hàng vui lòng ghi chú thời gian nhận hàng cụ thể;</li>
                    <li>Giao hàng đến địa điểm bên trung gian khác (chành xe, kho bãi…): Quý Khách Hàng vui lòng ghi chú địa điểm nhận hàng cụ thể, và các thông tin cần thiết khác. </li>
                    <li><strong>Quý Khách Hàng lưu ý C-Mart xin phép miễn trừ hoàn toàn trách nhiệm khi Quý Khách Hàng lựa chọn hình thức nhận hàng này.
                    </strong></li>

                </ul>
                <p style="text-align:justify"><strong>VẤN ĐỀ THƯỜNG GẶP » GIAO NHẬN CÙNG C-MART</strong></p>
                <ul>
                    <li><strong>Phí giao hàng:</strong> Thông tin sẽ được thể hiện cụ thể khi đặt hàng trên website. Hoặc Quý Khách Hàng sẽ được thông báo trong quá trình đặt hàng.
                    </li>
                    <li>
                       <strong>Thời gian giao hàng:</strong> Quý Khách Hàng tra cứu nội dung trong Trang giới thiệu sản phẩm.

                    </li>
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
            <a href="#"                 class=" content-hover-border nav-item nav-link"><i class="fas fa-info-circle"></i> Japana Việt Nam</a>
            <a href="#"                 class="active-cs content-hover-border nav-item nav-link"><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
            <a href="{{url('/')}}"      class=" active-csv content-hover nav-item nav-link">Chính sách giao nhận</a>
            <a href="{{url('/dkgd')}}"  class=" content-hover nav-item nav-link">Điều khoản giao dịch</a>
            <a href="{{url('/pttt')}}"  class=" content-hover nav-item nav-link">Phương thức thanh toán</a>
            <a href="{{url('/tggh')}}"  class=" content-hover nav-item nav-link">Thời gian giao hàng </a>
            <a href="{{url('/csbh')}}"  class="  content-hover nav-item nav-link">Chính sách bảo hành </a>
            <a href="{{url('/csbm')}}"  class="  content-hover nav-item nav-link">Chính sách bảo mật </a>
            <a href="{{url('/csdt')}}"  class=" content-hover nav-item nav-link">Chính sách đổi trả và hoàn tiền </a>
            <a href="{{url('/hdmh')}}"  class="  content-hover nav-item nav-link">Hướng dẫn mua hàng  </a>
            <a href="{{url('/qlv')}}"  class="  content-hover nav-item nav-link">Quyền lời VIP </a>
            <a href="{{url('/qdbh')}}"  class="  content-hover nav-item nav-link">Quy định bán hàng trên Website japana </a>
            <a href="{{url('/chtg')}}"  class="  content-hover nav-item nav-link">Câu hỏi thương gặp </a>
            <a href="#"  class="  content-hover-border nav-item nav-link"><i class="fas fa-info-circle"></i> Liên hệ</a>
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


