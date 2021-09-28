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
        <a href="# " class="cs">/Chính Sách Bảo Hành</a>
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
              <a href="#" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Japana Việt Nam</a>
              <a href="#" class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
              <a href="{{url('/')}}" class="content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Chính sách vận chuyển</a>
              <a href="{{url('/dkgd')}}" class=" content-hover content-list list-group-item list-group-item-action border-0 ">Điều khoản giao dịch</a>
              <a href="{{url('/pttt')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Phương thức thanh toán</a>
              <a href="{{url('/tggh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Thời gian giao hàng </a>
              <a href="{{url('/csbh')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo hành </a>
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
          <button type="button" class="content-hover btn an title m-2" data-toggle="modal" data-target="#rightModal">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <!--Phan noi dung cua trang Chính Sách Vận Chuyển-->
        <div class="static-detail">
            <h3 class="title">Chính sách bảo hành</h3>
            <div class="detail-static">
                <p style="text-align:justify"><strong>I. ĐIỀU KIỆN BẢO HÀNH:</strong></p>

                <p style="text-align:justify">1. Sản phẩm được bảo hành miễn phí nếu sản phẩm đó hội đủ các điều kiện sau:</p>

                <p style="text-align:justify">- Sản phẩm bị lỗi kỹ thuật do nhà sản xuất</p>

                <p style="text-align:justify">- Còn trong thời hạn bảo hành</p>

                <p style="text-align:justify">- Còn giữ hóa đơn mua hàng Siêu Thị Nhật Bản JAPANA</p>

                <p style="text-align:justify">- Phiếu bảo hành phải còn nguyên vẹn, không chấp vá, bôi xóa, sửa chữa.</p>

                <p style="text-align:justify">- Phiếu bảo hành đầy đủ thông tin: kiểu máy, số seri, ngày sản xuất, tên khách hàng sử dụng, địa chỉ, ngày mua (đối với các sản phẩm không áp dụng Bảo hành điện tử)</p>

                <p style="text-align:justify">- Tem bảo hành (và tem niêm phong) của nhà sản xuất trên sản phẩm còn nguyên vẹn.</p>

                <p style="text-align:justify">2. Những trường hợp không được bảo hành hoặc phát sinh phí bảo hành:</p>

                <p style="text-align:justify">- Vi phạm một trong những điều kiện bảo hành miễn phí ở mục 1.<br>
                - Số series, model sản phẩm không khớp với Phiếu bảo hành.<br>
                - Khách hàng tự ý can thiệp sửa chữa sản phẩm hoặc sửa chữa tại những trung tâm bảo hành không được sự ủy nhiệm của Hãng.<br>
                - Sản phẩm bị hư hỏng do lỗi người sử dụng, và lỗi hư không nằm trong phạm vi bảo hành của nhà sản xuất</p>

                <p style="text-align:justify"><strong>II. THỜI HẠN BẢO HÀNH:</strong></p>

                <p style="text-align:justify">Thời hạn bảo hành được tính kể từ ngày mua hàng hoặc kể từ ngày sản xuất tùy thuộc từng loại sản phẩm được quy định rõ trên phiếu bảo hành. Đối với sản phẩm bảo hành điện tử, thời hạn bảo hành được tính từ thời điểm kích hoạt bảo hành điện tử.</p>

                <p style="text-align:justify"><strong>III. TRUNG TÂM BẢO HÀNH:</strong></p>

                <p style="text-align:justify">Thông tin của trung tâm bảo hành sẽ được ghi trong phiếu bảo hành kèm theo sản phẩm. Quý khách vui lòng liên hệ trực tiếp với trung tâm bảo hành có trên phiếu bảo hành.</p>

                <p style="text-align:justify">Trong trường hợp sản phẩm được phân phối trực tiếp từ các Đại lý, quý khách vui lòng trực tiếp liên hệ với đại lý đó để được hỗ trợ bảo hành trong thời gian nhanh nhất. Mọi thông tin của đại lý được ghi trên phiếu biên nhận giao hàng được đính kèm trong thùng hàng.</p>

                <p style="text-align:justify">Nếu quý khách gặp khó khăn trong việc liên hệ trung tâm bảo hành, xin quý khách vui lòng liên hệ bộ phận Chăm sóc khách hàng theo tổng đài&nbsp;<strong>(028)&nbsp;7108 8889</strong></p>

                <p style="text-align:justify">Trong trường hợp quý khách ở quá xa trung tâm bảo hành hoặc gặp các vấn đề bất tiện không thể đến trung tâm bảo hành trực tiếp, quý khách có thể gửi sản phẩm về Japana.vn, chúng tôi sẽ hỗ trợ gửi sản phẩm đi bảo hành giúp quý khách..</p>
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
            <a href="{{url('/')}}"      class=" content-hover nav-item nav-link">Chính sách vận chuyển</a>
            <a href="{{url('/dkgd')}}"  class=" content-hover nav-item nav-link">Điều khoản giao dịch</a>
            <a href="{{url('/pttt')}}"  class=" content-hover nav-item nav-link">Phương thức thanh toán</a>
            <a href="{{url('/tggh')}}"  class=" content-hover nav-item nav-link">Thời gian giao hàng </a>
            <a href="{{url('/csbh')}}"  class=" active-csv content-hover nav-item nav-link">Chính sách bảo hành </a>
            <a href="{{url('/csbm')}}"  class=" content-hover nav-item nav-link">Chính sách bảo mật</a>
            <a href="{{url('/csdt')}}"  class=" content-hover nav-item nav-link">Chính sách đổi trả và hoàn tiền </a>
            <a href="{{url('/hdmh')}}"  class="  content-hover nav-item nav-link">Hướng dẫn mua hàng  </a>
            <a href="{{url('/qlv')}}"  class="  content-hover nav-item nav-link">Quyền lời VIP </a>
            <a href="{{url('/qdbh')}}"  class="  content-hover nav-item nav-link">Quy định bán hàng trên Website japana </a>
            <a href="{{url('/chtg')}}"  class="  content-hover nav-item nav-link">Câu hỏi thương gặp </a>
            <a href="#"                 class="  content-hover-border nav-item nav-link"><i class="fas fa-info-circle"></i> Liên hệ</a>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn an   content-hover" data-dismiss="modal"><i class="fas fa-times"></i></button>
        </div>
      </div>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>

</html>


