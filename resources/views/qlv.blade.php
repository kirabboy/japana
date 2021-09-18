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
                <a href="{{url('/tggh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Thời gian giao hàng </a>
                <a href="{{url('/csbh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo hành </a>
                <a href="{{url('/csbm')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo mật </a>
                <a href="{{url('/csdt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách đổi trả và hoàn tiền </a>
                <a href="{{url('/hdmh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Hướng dẫn mua hàng  </a>
                <a href="{{url('/qlv')}}" class=" active-csv content-hover content-list list-group-item list-group-item-action border-0">Quyền lời VIP </a>
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
            <h3 class="title">Quyền lợi VIP</h3>
            <div class="detail-static">
                <p>Nhằm mang đến cho&nbsp;khách hàng thân thiết của Japana được mua hàng với&nbsp;những dịch vụ tốt nhất, chúng tôi đưa ra các Ưu Đãi&nbsp;tương ứng với cấp độ VIP&nbsp;như sau:</p>

<ul>
<li><strong>VIP&nbsp;Gold:</strong> Giảm 3% trên tất cả đơn hàng&nbsp;(điều kiện tổng số tiền đã mua là 10.000.000đ)</li>
<li><strong>VIP&nbsp;Platinum: </strong>Giảm 4%&nbsp; trên tất cả đơn hàng&nbsp;(điều kiện tổng số tiền đã mua là 30.000.000đ)</li>
<li><strong>VIP&nbsp;Diamond:</strong> Giảm 5% trên tất cả đơn hàng&nbsp;(điều kiện tổng số tiền đã mua là 50.000.000đ)</li>
</ul>

<p><em><strong>Chúng tôi xin chân thành cảm ơn sự ủng hộ và đồng hành của Quý khách hàng!</strong></em></p>
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
            <a href="#"                 class=" content-hover-border nav-item nav-link"> Japana Việt Nam</a>
            <a href="#"                 class="active-cs content-hover-border nav-item nav-link"> Chăm sóc khách hàng</a>
            <a href="{{url('/')}}"      class="  content-hover nav-item nav-link">Chính sách vận chuyển</a>
            <a href="{{url('/dkgd')}}"  class="content-hover nav-item nav-link">Điều khoản giao dịch</a>
            <a href="{{url('/pttt')}}"  class=" content-hover nav-item nav-link">Phương thức thanh toán</a>
            <a href="{{url('/tggh')}}"  class=" content-hover nav-item nav-link">Thời gian giao hàng </a>
            <a href="{{url('/csbh')}}"  class="  content-hover nav-item nav-link">Chính sách bảo hành </a>
            <a href="{{url('/csbm')}}"  class="  content-hover nav-item nav-link">Chính sách bảo mật </a>
            <a href="{{url('/csdt')}}"  class=" content-hover nav-item nav-link">Chính sách đổi trả và hoàn tiền </a>
            <a href="{{url('/hdmh')}}"  class="  content-hover nav-item nav-link">Hướng dẫn mua hàng  </a>
            <a href="{{url('/qlv')}}"   class=" active-csv  content-hover nav-item nav-link">Quyền lời VIP </a>
            <a href="{{url('/qdbh')}}"  class="  content-hover nav-item nav-link">Quy định bán hàng trên Website japana </a>
            <a href="{{url('/chtg')}}"  class="  content-hover nav-item nav-link">Câu hỏi thương gặp </a>
            <a href="#"  class="  content-hover-border nav-item nav-link"> Liên hệ</a>
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


