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
        <a href="# " class="cs">/Chính Sách Bảo Mật</a>
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
                <a href="{{url('/')}}" class="   content-hover  list-group-item list-group -item-action  border-bottom-0 border-right-0 border-left-0">Chính sách vận chuyển</a>
                <a href="{{url('/dkgd')}}" class="content-hover content-list list-group-item list-group-item-action border-0 ">Điều khoản giao dịch</a>
                <a href="{{url('/pttt')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Phương thức thanh toán</a>
                <a href="{{url('/tggh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Thời gian giao hàng </a>
                <a href="{{url('/csbh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo hành </a>
                <a href="{{url('/csbm')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">Giới Thiệu</a>
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
            <h3 class="title">C-MART TỰ GIỚI THIỆU </h3>
            <div class="detail-static">
              
              <p style="text-alignt:justify">Bằng cách giao dịch với C-Mart, Quý Khách đã đồng ý điều khoản: Trước khi C-Mart xác nhận yêu cầu hủy thông tin liên lạc được Quý Khách đăng ký với C-Mart, thì mọi giao dịch, giao kết từ các kênh liên lạc trên đều được xem là giao kết Hợp đồng chính thức giữa C-Mart và Quý Khách. Trước thời điểm trên, C-Mart xin miễn trừ mọi trách nhiệm từ những vấn đề phát sinh ngoài ý muốn của Quý Khách qua các kênh liên lạc trên.</p>                
              <h3 style="text-alignt:center">
              VỀ C-MART
              </h3>
              <div class="card-img text-center">
                <img src="public/img/Picture1.png" style="width:75%">
              </div> 
              <p style="text-alignt:justify">C-Mart hoạt động có định hướng theo mô hình Nhà phân phối tổng hợp - "Tất cả trong Một". Vì thế, C-Mart dưới nhiều hình thức luôn mở rộng đa dạng các ngành hàng, từ các sản phẩm hàng hóa đến các sản phẩm dịch vụ, từ các sản phẩm có giá trị lớn như bất động sản, phương tiện giao thông,… đến các sản phẩm thiết yếu trong cuộc sống hàng ngày như thực phẩm, nhu yếu phẩm,… vượt trội cả về chủng loại lẫn mẫu mã.</p>
              <p style="text-alignt:justify">C-Mart hoạt động với các mô hình:</p>
              <ul>
                <li>Cửa hàng trực tuyến cm.com.vn (link chứa liên kết) là website thương mại điện tử của C-Mart;</li>
                <li>C-Store chính thức tại 730/32/6 đường Lạc Long Quân, Phường 9, Quận Tân Bình, TP.HCM (Link đến bản đồ);</li>
                <li>Kênh Chăm sóc Khách Hàng Trực tuyến C-A-Z của C-Mart;</li>
                <li>Các Kênh Mạng xã hội C-Facebook, C-Zalo chính thức: (Box Zalo chứa liên kết) - (Box Facebook chứa liên kết);</li>
                <li>Kênh Điện thoại C-Call chính thức: 0899.30.2323 (Link đến ứng dụng ĐT)</li>
              </ul>
              <h3 class="text-center "><strong>TẦM NHÌN</strong></h3>
              <p style="text-alignt:justify">❖	C-Mart ra đời với tầm nhìn tạo nên mô hình Nhà phân phối tổng hợp - "Tất cả trong một" của Người Việt - tiến tới trạng thái phát triển bền vững.</p>
              <p style="text-alignt:justify">❖	Thời kì đầu ra mắt với hàng loạt những khó khăn, thách thức, nhưng C-Mart đã - đang - sẽ vẫn đặt mục tiêu trở thành kênh thương mại phục vụ mọi khía cạnh cuộc sống, chinh phục mọi tầng lớp trong xã hội, phủ sóng đến mọi vị trí địa lý, đáp ứng kịp nhu cầu của thời đại.</p>
              <h3 class="text-center "><strong>SỨ MỆNH</strong></h3>
              <p style="text-alignt:justify">❖	Sứ mệnh của C-Mart là phủ sóng thương mại điện tử đến mọi vị trí địa lý, kết nối với mọi đối tượng Khách Hàng, từ nhóm Khách Hàng ít quan tâm đến công nghệ nhất (nhóm Khách Hàng lao động phổ thông, người lớn tuổi…).</p>
              <p style="text-alignt:justify">❖	Ngoài ra, C-Mart còn chú trọng liên kết với các chủ thể kinh doanh khác để từng bước thực hiện tầm nhìn, hoàn thành sứ mệnh của mình, trên tinh thần trung thành với những giá trị cốt lõi. Trong đó, C-Mart đặc biệt liên kết với các Nhà cung cấp, các Nhà sản xuất để hiệp đồng thực hiện các chiến lược mở rộng thị trường, kết nối - chinh phục mọi tầng lớp, đối tượng Khách Hàng. </p>
              <p style="text-alignt:justify">❖	Trên cơ sở đó, C-Mart hướng đến môi trường văn hoá tiêu dùng: văn minh - tuyệt vời, phổ thông - tiện lợi, giá trị tối ưu ; góp phần tạo nên một môi trường kinh doanh phát triển lành mạnh, hiệu quả.</p>
              <p style="text-alignt:justify">❖	Từ đây, C-Mart hy vọng sẽ góp phần thúc đẩy sự phát triển của thương mại điện tử nói riêng, và ngành thương mại tại Việt Nam nói chung, góp phần tạo ra động lực mạnh mẽ vào công cuộc chung phát triển nền kinh tế đất nước, góp phần vào sự thịnh vượng chung của xã hội.</p>
              <p style="text-alignt:justify">🙌 Người tiêu dùng có thể tin tưởng rằng: C-Mart dưới nhiều hình thức luôn cố gắng mở rộng phạm vi phục vụ, đem đến tất cả những gì bạn cần, và đem đến sự phục vụ tốt hơn những gì bạn mong.</p>


              <h3 class="text-center "><strong>GIÁ TRỊ CỐT LÕI</strong></h3>
              <p style="text-alignt:justify">❖	C-Mart xác định luôn trung thành với những giá trị cốt lõi của mình, để luôn là sự lựa chọn và tin tưởng của Quý Khách Hàng và Quý Đối Tác. Hệ thống giá trị cốt lõi cơ bản của C-Mart được hình thành dựa trên các giá trị:</p>
              <ul>
                <li>●	Trách nhiệm với cộng đồng, với xã hội;</li>
                <li>●	Chuyên nghiệp, Uy tín, Trung thực, An toàn, Cẩn thận, Nhiệt tình, Chu đáo, Tạo sự kết nối thoải mái, hào hứng và tuyệt vời hơn bao giờ hết;</li>
                <li>●	Phạm vi phục vụ đa dạng, chất lượng, hướng đến mô hình "Tất cả trong Một", tạo một không gian mua sắm tiện lợi, nhanh chóng;</li>
                <li>●	Giá cả tiết kiệm tối ưu nhờ sự cân bằng giữa mục tiêu lợi nhuận và mục tiêu nâng cao chất lượng sống của Quý Khách Hàng, cũng như thực hiện tầm nhìn, sứ mệnh và hệ thống giá trị cốt lõi của C-Mart;</li>
                <li>●	Hệ thống các chính sách, chuỗi các sự kiện, chương trình ưu đãi - khuyến mãi được tổ chức thường xuyên, rộng rãi.</li>
              
              
              </ul>
            
            
            
            
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


