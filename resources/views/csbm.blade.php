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
                <a href="{{url('/')}}" class="   content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Chính sách vận chuyển</a>
                <a href="{{url('/dkgd')}}" class="content-hover content-list list-group-item list-group-item-action border-0 ">Điều khoản giao dịch</a>
                <a href="{{url('/pttt')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Phương thức thanh toán</a>
                <a href="{{url('/tggh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Thời gian giao hàng </a>
                <a href="{{url('/csbh')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo hành </a>
                <a href="{{url('/csbm')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">Chính sách bảo mật </a>
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
          <button type="button" class="content-hover btn title " data-toggle="modal" data-target="#rightModal">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <!--Phan noi dung cua trang Chính Sách Vận Chuyển-->
        <div class="static-detail">
            <h3 class="title">Chính sách bảo mật</h3>
            <div class="detail-static">
                <h3 style="text-align:justify"><strong>1. Mục đích và phạm vi thu thập</strong></h3>

                <p style="text-align:justify">- Việc thu thập dữ liệu chủ yếu trên website&nbsp;<a href="https://japana.vn">japana.vn</a>&nbsp;bao gồm: Email, điện thoại, tên đăng nhập, mật khẩu đăng nhập, địa chỉ khách hàng (thành viên). Đây là các thông tin mà <strong>Siêu Thị Nhật Bản Japana&nbsp;</strong>cần thành viên cung cấp bắt buộc khi đăng ký sử dụng dịch vụ và để <strong>Siêu Thị Nhật Bản Japana</strong>&nbsp;liên hệ xác nhận khi khách hàng đăng ký sử dụng dịch vụ trên website nhằm đảm bảo quyền lợi cho cho người tiêu dùng.</p>

                <p style="text-align:justify">- Trong quá trình giao dịch thanh toán tại website, chúng tôi chỉ lưu giữ thông tin chi tiết về đơn hàng đã thanh toán của thành viên, các thông tin về số tài khoản ngân hàng của thành viên sẽ không được lưu giữ.</p>

                <p style="text-align:justify">- Các thành viên sẽ tự chịu trách nhiệm về bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ dưới tên đăng ký, mật khẩu và hộp thư điện tử của mình. Ngoài ra, thành viên có trách nhiệm thông báo kịp thời cho webiste <a href="http://www.japana.vn" target="_top">www.japana.vn</a> &nbsp;về những hành vi sử dụng trái phép, lạm dụng, vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có biện pháp giải quyết phù hợp.</p>

                <h3 style="text-align:justify"><strong>2. Phạm vi sử dụng thông tin</strong></h3>

                <p style="text-align:justify">Công ty sử dụng thông tin thành viên cung cấp để:</p>

                <p style="text-align:justify">- Cung cấp các dịch vụ đến thành viên.</p>

                <p style="text-align:justify">- Gửi các thông báo về các hoạt động trao đổi thông tin giữa thành viên và website ;</p>

                <p style="text-align:justify">- Ngăn ngừa các hoạt động phá hủy tài khoản người dùng của thành viên hoặc các hoạt động giả mạo thành viên.</p>

                <p style="text-align:justify">- Liên lạc và giải quyết với thành viên trong những trường hợp đặc biệt.</p>

                <p style="text-align:justify">- Không sử dụng thông tin cá nhân của thành viên ngoài mục đích xác nhận và liên hệ có liên quan đến giao dịch tại <strong>Siêu Thị Nhật Bản Japana.</strong></p>

                <p style="text-align:justify">- Trong trường hợp có yêu cầu của pháp luật: Công ty có trách nhiệm hợp tác cung cấp thông tin cá nhân thành viên khi có yêu cầu từ cơ quan tư pháp bao gồm: Viện kiểm sát, tòa án, cơ quan công an điều tra liên quan đến hành vi vi phạm pháp luật nào đó của khách hàng. Ngoài ra, không ai có quyền xâm phạm vào thông tin cá nhân của thành viên.</p>

                <h3 style="text-align:justify"><strong>3. Thời gian lưu trữ thông tin</strong></h3>

                <p style="text-align:justify">Dữ liệu cá nhân của thành viên sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự thành viên đăng nhập và thực hiện hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân thành viên sẽ được bảo mật trên máy chủ của chúng tôi</p>

                <h3 style="text-align:justify"><strong>4. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân:</strong></h3>

                <p style="text-align:justify">- Công ty Cổ Phần Japana Việt Nam</p>

                <p style="text-align:justify">- Địa chỉ: 76 Nguyễn Háo Vĩnh, P. Tân Quý, Quận Tân Phú, TP.HCM</p>

                <p style="text-align:justify">- Hotline:&nbsp;<strong>(028)&nbsp;7108 8889</strong>&nbsp;- Email: info@japana.vn</p>

                <h3 style="text-align:justify"><strong>5. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình:</strong></h3>

                <p style="text-align:justify">- Thành viên có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ thông tin cá nhân của&nbsp;mình bằng cách đăng nhập vào tài khoản và chỉnh sửa thông tin cá nhân hoặc yêu cầu <strong>Siêu Thị Nhật Bản Japana</strong> thực hiện việc này.</p>

                <p style="text-align:justify">- Thành viên có quyền gửi khiếu nại về nội dung bảo mật thông tin đề nghị liên hệ Ban quản trị của chúng tôi. Khi tiếp nhận những phản hồi này, <strong style="text-align: justify;">Siêu Thị Nhật Bản Japana</strong>&nbsp;sẽ xác nhận lại thông tin, trường hợp đúng như phản ánh của thành viên tùy theo mức độ, chúng tôi sẽ có những biện pháp xử lý kịp thời.</p>

                <h3 style="text-align:justify"><strong>6. Cam kết bảo mật thông tin cá nhân khách hàng:</strong></h3>

                <p style="text-align:justify">- Thông tin cá nhân của thành viên trên Siêu Thị Nhật Bản&nbsp;được <strong>Japana</strong>&nbsp;cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân. Việc thu thập và sử dụng thông tin của mỗi thành viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có quy định khác.</p>

                <p style="text-align:justify">- Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ 3 nào về thông tin cá nhân của thành viên khi không có sự cho phép đồng ý từ thành viên.</p>

                <p style="text-align:justify">- Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân thành viên, <strong>Siêu Thị Nhật Bản Japana</strong>&nbsp;sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho thành viên được biết.</p>

                <p style="text-align:justify">- Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của thành viên bao gồm thông tin hóa đơn kế toán chứng từ số hóa</p>

                <p style="text-align:justify">- Ban quản lý <strong>Công ty Cổ Phần Japana Việt Nam</strong> yêu cầu các cá nhân khi đăng ký/mua hàng là Thành viên, phải cung cấp đầy đủ thông tin cá nhân có liên quan như: Họ và tên, địa chỉ liên lạc, email, điện thoại, số tài khoản, số thẻ thanh toán …., và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản lý Công ty Cổ Phần Japana Việt Nam&nbsp;không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến quyền lợi của thành viên đó nếu xét thấy tất cả thông tin cá nhân của thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.</p>
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


