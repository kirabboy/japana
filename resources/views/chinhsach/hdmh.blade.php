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
        <a href="# " class="cs">/Hưỡng Dẫn Mua Hàng </a>
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
              <a href="#"                class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Japana Việt Nam</a>
              <a href="#"                class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
              <a href="{{route('policy.van-chuyen')}}"     class="content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Chính sách vận chuyển</a>
              <a href="{{route('policy.giao-dich')}}" class="content-hover content-list list-group-item list-group-item-action border-0 ">Điều khoản giao dịch</a>
              <a href="{{route('policy.thanh-toan')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Phương thức thanh toán</a>
              <a href="{{route('policy.giao-hang')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">Thời gian giao hàng </a>
              <a href="{{route('policy.bao-hanh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo hành </a>
              <a href="{{route('policy.bao-mat')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo mật </a>
              <a href="{{route('policy.doi-tra')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách đổi trả và hoàn tiền </a>
              <a href="{{route('policy.mua-hang')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Hướng dẫn mua hàng  </a>
              <a href="{{route('policy.quyen-loi')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Quyền lời VIP </a>
              <a href="{{route('policy.quy-dinh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Quy định bán hàng trên Website japana </a>
              <a href="{{route('policy.cau-hoi')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Câu hỏi thương gặp </a>
              <a href="" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Liên hệ</a>
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
            <h3 class="title">Hướng dẫn mua hàng</h3>
            <div class="detail-static">
                <p>Quý khách có thể đặt mua hàng trực tuyến tại&nbsp;website <a href="https://japana.vn">Japana.vn</a> thông qua các bước đơn giản sau</p>

                <h3><strong>1. Tìm kiếm sản phẩm:</strong></h3>

                <p>Qúy khách có thể tìm sản phẩm theo&nbsp;3 cách:&nbsp;</p>

                <p>a. Gõ tên sản phẩm vào thanh tìm kiếm</p>

                <p>b. Tìm theo danh mục</p>

                <p>c. Tìm theo các sản phẩm mới nhất, bán chạy hoặc danh mục phổ biến trên từng ngành hàng</p>

                <h3><strong>2. Thêm sản phẩm vào giỏ hàng:</strong></h3>

                <p>Khi đã tìm được sản phẩm mong muốn, quý khách vui lòng bấm vào hình hoặc tên sản phẩm để vào được trang thông tin chi tiết của sản phẩm, sau đó:</p>

                <p>a. Kiểm tra thông tin sản phẩm: giá, thông tin khuyến mãi.&nbsp;</p>

                <p>b. Chọn số lượng mong muốn.&nbsp;</p>

                <p>c. Thêm sản phẩm vào giỏ hàng.</p>

                <h3><strong>3. Kiểm tra giỏ hàng:</strong></h3>

                <p>Trong giỏ hàng thể hiện đầy đủ thông tin số lượng sản phẩm và tổng giá trị tiền hàng. Quý khách vui lòng kiểm tra đúng sản phẩm, số lượng và giá trị tiền hàng.&nbsp;</p>

                <p>Tại giỏ hàng, Quý khách có thể chọn mua thêm sản phẩm khác hoặc chọn huỷ một sản phẩm bất kỳ.</p>

                <h3><strong>4. Điền thông tin địa chỉ giao nhận hàng:</strong></h3>

                <p>Quý khách phải điền đầy đủ thông tin của người mua và nhận hàng, Chúng tôi&nbsp;cam kết sẽ giữ bí mật thông tin cá nhân của quý khách.</p>

                <p>Trên cơ sở thông tin quý khách cung cấp, <strong>Siêu Thị Nhật Bản Japana.vn</strong> sẽ tiến hành các thủ tục còn lại để giao hàng</p>

                <h3><strong>5. Phương thức thanh toán:</strong></h3>

                <p>Hiện tại&nbsp;<strong>Siêu Thị Nhật Bản Japana.vn</strong> có các&nbsp;hình thức thanh toán cho khách hàng lực chọn:</p>

                <p>- Thanh toán khi nhận hàng (COD) - Áp dụng toàn quốc.</p>

                <p>- Thanh toán trực tiếp tại Văn phòng đại diện Công ty CP Japana Việt Nam</p>

                <p>Nếu các thông tin trên đã chính xác, quý khách&nbsp;vui lòng&nbsp;bấm "Đặt&nbsp;Mua", hệ thống sẽ bắt đầu tiến hành tạo đơn hàng dựa trên các thông tin quý khách đã đăng ký.</p>

                <h3><strong>6. Kiểm tra và xác nhận đơn hàng:</strong></h3>

                <p>Quý khách có thể vào email của mình&nbsp;để nhận thư xác nhận đặt hàng</p>

                <h3><strong>7. Hoàn tất đơn hàng:</strong></h3>

                <p>Sau khi đơn hàng đã được xác nhận bằng email, bộ phận chăm sóc khách hàng của <strong>Siêu Thị Nhật Bản Japana.vn&nbsp;</strong>sẽ gọi điện trực tiếp cho quý khách hàng thông qua số điện thoại mà quý khách hàng đã cung cấp để xác nhận lại&nbsp;một lần nữa về đơn hàng.</p>
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
            <a href="{{url('/')}}"      class="  content-hover nav-item nav-link">Chính sách vận chuyển</a>
            <a href="{{url('/dkgd')}}"  class=" content-hover nav-item nav-link">Điều khoản giao dịch</a>
            <a href="{{url('/pttt')}}"  class=" content-hover nav-item nav-link">Phương thức thanh toán</a>
            <a href="{{url('/tggh')}}"  class=" content-hover nav-item nav-link">Thời gian giao hàng </a>
            <a href="{{url('/csbh')}}"  class="  content-hover nav-item nav-link">Chính sách bảo hành </a>
            <a href="{{url('/csbm')}}"  class="  content-hover nav-item nav-link">Chính sách bảo mật </a>
            <a href="{{url('/csdt')}}"  class=" content-hover nav-item nav-link">Chính sách đổi trả và hoàn tiền </a>
            <a href="{{url('/hdmh')}}"  class="active-csv content-hover nav-item nav-link">Hướng dẫn mua hàng  </a>
            <a href="{{url('/qlv')}}"   class="  content-hover nav-item nav-link">Quyền lời VIP </a>
            <a href="{{url('/qdbh')}}"  class="  content-hover nav-item nav-link">Quy định bán hàng trên Website japana </a>
            <a href="{{url('/chtg')}}"  class="  content-hover nav-item nav-link">Câu hỏi thương gặp </a>
            <a href="#"                 class="  content-hover-border nav-item nav-link"><i class="fas fa-info-circle"></i> Liên hệ</a>
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


