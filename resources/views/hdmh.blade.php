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
        <a href="# " class="cs">/Hưỡng Dẫn Đặt Hàng </a>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-4">
      <div class="row">
        <!--html của chuyện mục thông tin-->
        <div class="col-lg-4 col-md-5 sliderbar  ">
          <div class="card the w-75  ">
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
              <a href="{{url('/hdmh')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">Hướng dẫn mua hàng  </a>
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
          <button type="button" class="content-hover btn an  title m-2" data-toggle="modal" data-target="#rightModal">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <!--Phan noi dung cua trang Chính Sách Vận Chuyển-->
        <div class="static-detail">
            <h3 class="title">Hướng dẫn đặt hàng </h3>
            <div class="detail-static">
                <p style="text-alignt:justify">Bằng cách giao dịch với C-Mart, Quý Khách đã đồng ý điều khoản: Trước khi C-Mart xác nhận yêu cầu hủy thông tin liên lạc được Quý Khách đăng ký với C-Mart, thì mọi giao dịch, giao kết từ các kênh liên lạc trên đều được xem là giao kết Hợp đồng chính thức giữa C-Mart và Quý Khách. Trước thời điểm trên, C-Mart xin miễn trừ mọi trách nhiệm từ những vấn đề phát sinh ngoài ý muốn của Quý Khách qua các kênh liên lạc trên.</p>

                <p style="text-alignt:justify">❖	Quý Khách Hàng có thể lựa chọn đặt hàng tại C-Mart theo các hình thức:</p>
                <ul>
                  <li>1)	Đặt hàng trực tuyến qua Cửa hàng trực tuyến cm.com.vn (Link đến liên kết): dành cho Khách Hàng Thân Thiết, Khách Hàng V.I.P, Cộng Tác Viên;</li>
                  <li>2)	Đặt hàng trực tuyến qua Kênh Chăm sóc Khách Hàng Trực tuyến C-A-Z dành cho Khách Hàng Chưa Định Danh;</li>
                  <li>3)	Đặt hàng trực tiếp tại C-Store: dành cho Khách Hàng Thương Mại;</li>
                  <li>4)	Đặt hàng qua C-Call 0899302323 (Link đến ứng dụng ĐT): dành cho Khách Hàng Thương Mại;</li>
                  <li>5)	Đặt hàng trực tuyến qua Mạng xã hội C-Facebook (Box chứa liên kết): dành cho Khách Hàng Chưa Định Danh;</li>
                  <li>6)	Đặt hàng trực tuyến qua Mạng xã hội C-Zalo (Box chứa liên kết): dành cho Khách Hàng  Thương Mại, Khách Hàng C-Ship</li>
                
                </ul>
                <p><strong>I. HƯỚNG DẪN ĐẶT HÀNG TRỰC TUYẾN QUA CỬA HÀNG TRỰC TUYẾN CM.COM.VN (Link đến liên kết)</strong></p>
                <div class="text-center">
                  <p>😀 Người Đặt Hàng bắt buộc phải là chủ nhân Hồ Sơ Khách Hàng đang giao dịch 😀 <br>
                  😀 Dành cho Khách Hàng Thân Thiết, Khách Hàng V.I.P, Cộng Tác Viên 😀</p>
                </div>
                <p style="text-alignt:justify"><strong>1. Tìm Kiếm Sản Phẩm.</strong></p>
                <p style="text-alignt:justify">Cách 1: Tham quan, mua sắm theo ý thích trong Danh mục sản phẩm;</p>
                <p style="text-alignt:justify">Cách 2: Nhập Tên sản phẩm hoặc Mã sản phẩm cần tìm vào thanh công cụ Tìm kiếm ở trên cùng màn hình;</p>
                <p style="text-alignt:justify">Cách 3: Liên hệ các kênh giao dịch chính thức của C-Mart để yêu cầu hỗ trợ.</p>

                <p style="text-alignt:justify"><strong>2. Tìm Hiểu Sản Phẩm:</strong> Nhấn vào Hình ảnh hoặc Tên sản phẩm cần tìm hiểu. </p>

                <p style="text-alignt:justify"><strong>3. Đặt Mua Sản Phẩm.</strong></p>

                <p style="text-alignt:justify">Bước 1: <strong>Chọn đặc điểm, chủng loại sản phẩm</strong> như kích thước, màu sắc, mẫu mã… (nếu có) ;</p>

                <p style="text-alignt:justify">Bước 2: <strong>Chọn số lượng</strong> sản phẩm;</p>

                <p style="text-alignt:justify">Bước 3: <strong>Nhấn Thêm vào giỏ hàng</strong> để chọn sản phẩm.</p>


                <p style="text-alignt:justify"><strong>4. Kiểm Tra Giỏ Hàng:</strong> Trong Giỏ hàng vừa hiện ra trên cửa sổ màn hình mới:</p>
                
                <ul>
                  <li>●	Thay đổi số lượng	: Nhập điều chỉnh ở mục Số lượng, rồi nhấn <strong>Cập nhật .</strong></li>
                  <li>●	Trả lại sản phẩm về gian hàng	: <strong>Ấn Trả .</strong></li>
                  <li>●	Quay lại tiếp tục mua sắm siêu tiết kiệm	: <strong>Ấn Tiếp tục chọn hàng .</strong></li>
                  <li>●	Hoàn tất mua sắm và thực hiện thanh toán	: <strong>Ấn Đặt hàng .</strong></li>
                </ul>
                
                <p style="text-alignt:justify"><strong>5. Định danh Khách Hàng - Đặt hàng:</strong> Trong trang Định danh Khách Hàng vừa hiện ra trên cửa sổ màn hình mới:</p>
                <p style="text-alignt:justify"><strong>Trường Hợp 1: Quý Khách Hàng đã có Hồ Sơ Khách Hàng tại C-Mart.</strong></p>
                <ul>
                  <li>Bước 1: Nhấn <strong>Tôi đã có Hồ Sơ Khách Hàng. Thật nhiều quyền lợi !! Hãy như tôi !! </strong>để truy cập Hồ Sơ Khách Hàng;</li>
                  <li>Bước 2: Sau khi truy cập HSKH, tại cửa sổ màn hình mới hiện ra, cung cấp thông tin nhận hàng theo 01 trong 04 cách:</li>
                  <li>
                    <ul>
                      <li>Đánh dấu vào ô <strong>Thông tin nhận hàng giống thông tin đặt hàng</strong> để chọn thông tin nhận hàng là thông tin đặt hàng;</li>
                      <li>Đánh dấu vào ô <strong>Dùng thông tin nhận hàng trước đây</strong> để chọn các thông tin nhận hàng đã lưu trong HSKH;</li>
                      <li>Đánh dấu vào ô Nhận hàng tại Cửa hàng để chọn <strong>nhận hàng tại C-Store</strong> hoặc Cửa hàng phân phối,  và nhập Tên + Địa chỉ Cửa hàng;</li>
                      <li>Hoặc <strong>nhập các thông tin nhận hàng mới</strong> theo trình tự.</li>
                      

                    </ul>
                  </li>
                  <li>Xin Quý Khách Hàng tin tưởng rằng C-Mart xem việc bảo mật thông tin là điều vô cùng nghiêm túc, và chúng tôi thực hiện vô cùng nghiêm ngặt. Các thông tin chỉ dùng để hướng đến sự chuyên nghiệp, tiện lợi hơn trong phục vụ Khách Hàng.</li>
                  <li>Bước 3: Chọn Đơn vị vận chuyển (C-Ship nếu địa chỉ nhận hàng tại TP.HCM, hoặc Vietnam Post nếu địa chỉ nhận hàng khác TP.HCM), Ghi chú cho đơn hàng (nếu có), Thông tin xuất hóa đơn GTGT (nếu có);</li>
                  <li>Bước 4: Nếu cần chỉnh sửa giỏ hàng, nhấn <strong>Quay lại Giỏ hàng.</strong> Nếu không cần thay đổi, nhấn<strong>Tiếp tục Thanh toán;</strong></li>
                  <li>Bước 5: Chọn Phương thức thanh toán, Xem lại đơn hàng và xác nhận đồng ý với 04 chính sách, quy định giao dịch:</li>
                  <li>
                    <ul>
                      <li>Đánh dấu vào ô <strong>Tôi đã đọc và đồng ý với Chính sách Giao - Nhận;</strong></li>
                      <li>Đánh dấu vào ô <strong>Tôi đã đọc và đồng ý với Chính sách Đổi - Trả;</strong></li>
                      <li>Đánh dấu vào ô <strong>Tôi đã đọc và đồng ý với Chính sách Bảo hành;</strong></li>
                      <li>Đánh dấu vào ô <strong>Tôi đã đọc và đồng ý với Quy định Điều khoản & Điều kiện giao dịch.</strong></li>
                    </ul>
                  </li>
                  <li>Bước 6: Nếu cần chỉnh sửa thông tin, nhấn <strong>Quay lại Trang trước</strong>. Nếu không cần thay đổi, nhấn <strong>Thanh toán</strong> và thực hiện theo trình tự.</li>
                  <li>Bước 7: Hoàn tất đặt hàng sẽ xuất hiện <strong>Thông báo Xác nhận đặt hàng thành công.</strong></li>

                </ul>




                <p style="text-alignt:justify"></p>
                <p style="text-alignt:justify"></p>
                <p style="text-alignt:justify"></p>






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


