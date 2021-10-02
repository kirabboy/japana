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
                <a href="#" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> C-MART Việt Nam</a>
                <a href="#" class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
                <a href="{{url('/')}}" class="  content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Giơi Thiệu</a>
                <a href="{{url('/csdd')}}" class="content-hover content-list list-group-item list-group-item-action border-0 ">Chính Sách Định Danh & Quyền Lợi Khách Hàng</a>
                <a href="{{url('/hddh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Hướng Dẫn Đặt Hàng</a>
                <a href="{{url('/cstt')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Thanh Toán</a>
                <a href="{{url('/csgn')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Giao Nhận </a>
                <a href="{{url('/csdt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Đổi Trả </a>
                <a href="{{url('/csbh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Bảo Hành</a>
                <a href="{{url('/qddk')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Quy Định Điều Khoản  </a>
                <a href="{{url('/qlv')}}" class="content-hover content-list list-group-item list-group-item-action border-0">C-MART & Khách Hàng Đặt Biệt  </a>
                <a href="{{url('/dt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">C-MART & Đối Tác </a>
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
          <h3 class="title">Chính sách giao - nhận </h3>
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
                <p style="text-alignt:justify"><strong>Chủ động tra cứu quá trình xử lý đơn hàng
</strong></p>
                <p style="text-alignt:justify"><strong>* Đối với các đơn hàng qua C-Store, C-Call, C-Zalo: </strong>C-Mart sẽ cung cấp Mã vận chuyển giúp Quý Khách Hàng có thể trực tiếp tra cứu quá trình vận chuyển đơn hàng. Đồng thời, C-Mart cũng sẽ cập nhật liên tục hành trình đơn hàng đến Quý Khách Hàng qua Zalo.
</p>

                <p style="text-alignt:justify"><strong>* Đối với các đơn hàng qua C-Facebook, C-A-Z:</strong> C-Mart sẽ cung cấp Mã vận chuyển giúp Quý Khách Hàng có thể trực tiếp tra cứu quá trình vận chuyển đơn hàng. Đồng thời, C-Mart cũng sẽ cập nhật liên tục hành trình đơn hàng đến Quý Khách Hàng qua chính Số điện thoại đặt hàng..</p>

                <p style="text-alignt:justify"><strong>* Đối với các đơn hàng qua Website cm.com.vn:</strong><br>
- Cách 1: Nhập Mã giao dịch vào công cụ <strong>Kiểm tra Đơn hàng</strong> trong mục Hỗ Trợ C-A-Z.<br>
- Cách 2: Truy cập <strong>Lịch sử Đơn hàng</strong> trong Hồ Sơ Khách Hàng, Quý Khách Hàng nhấn vào cột <strong>Trạng thái</strong> của đơn hàng cần tra cứu.
</p>

                <p style="text-alignt:justify">* Chú giải các trạng thái đơn hàng:<br>
                <strong>+ Đã Đặt Hàng</strong>Đơn hàng đã được đặt thành công<br>
                 <strong> + Đã Xác Nhận Thanh Toán</strong>: Đơn hàng đã hoàn tất trả trước như lựa chọn khi đặt hàng<br>

                    <strong>+ Đang Xử Lý</strong>: Đơn hàng đang được C-Mart xử lý ban đầu.<br>
                    <strong>+ Đang Vận Chuyển</strong>: Đơn hàng đã bàn giao cho Đơn vị vận chuyển<br>
                <strong> + Hoàn Thành</strong>: Đơn hàng đã được giao hàng thành công.<br>
                <strong>+ Đã hủy</strong>: Đơn hàng đã bị hủy.









                </p>
                <p style="text-alignt:justify"><strong>⦁	Chọn thời gian giao hàng, Bổ sung yêu cầu, Thay đổi thông tin giao nhận</strong></p>
                <ul>
                    <li>⦁	Cách 1: Điền vào mục Ghi chú khi đặt hàng.</li>
                    <li>⦁	Cách 2: Liên hệ đến kênh giao dịch chính thức của C-Mart, bằng Số điện thoại đặt hàng hoặc Số điện thoại nhận hàng, gửi yêu cầu kèm Mã giao dịch.</li>
                    <li>⦁	Cách 3: Bổ sung thêm yêu cầu khi Nhân viên Giao nhận liên hệ trước khi giao hàng.</li>
                </ul>
                <p style="text-alignt:justify">

                - Thời gian xét duyệt thao tác diễn ra trong tối đa 02 giờ làm việc (kể từ thời điểm C-Mart xác nhận yêu cầu), C-Mart sẽ phản hồi đến kênh thông tin đặt hàng và/hoặc kênh thông tin nhận hàng, và cập nhật hệ thống (nếu có).
<br>- C-Mart chưa hỗ trợ thay đổi Thông tin Đặt hàng, Thông tin Nhận hàng nằm ngoài tuyến đường. Quý Khách Hàng vui lòng hủy đơn hàng để tạo lại đơn mới.
<br>- Yêu cầu chọn thời gian giao hàng: C-Mart sẽ cố gắng đạt được thỏa thuận với Đơn vị vận chuyển. Do Đơn vị vận chuyển là đối tác độc lập, và luôn trong trạng thái khẩn trương giao hàng đến Quý Khách Hàng, nên sẽ khó tránh khỏi những sơ suất trong một số thời điểm. Xin hãy giữ liên lạc như giữ kết nối yêu thương.

                </p>

                <p style="text-alignt:justify"><strong>Thao tác khi nhận hàng</strong></p>
                <ul>
                    <li>Người Nhận Hàng vui lòng chứng minh nhân thân để nhận hàng, đồng thời kiểm tra danh tính của Nhân viên Giao nhận;</li>

                    <li>Vui lòng kiểm tra cẩn thận hàng hóa khi nhận hàng để đảm bảo quyền lợi:
</li>
                    <li>
                        <ul>
                            <li>⦁	Kiểm tra ngoại quan, niêm phong, đóng gói,... → bảo đảm sản phẩm nguyên bản, không bị tráo đổi hay thất thoát;
</li>
                            <li>⦁	Vui lòng kiểm tra Số lượng và Chất lượng sản phẩm theo Chính sách Đổi - Trả;</li>
                            <li>
⦁	Phối hợp với Nhân viên Giao nhận cùng <strong>đồng kiểm đơn hàng</strong>. Bắt buộc quay video kiện hàng có chữ ký NVGN làm điều kiện bảo đảm quyền lợi Khách Hàng về sau.
</li>




                        </ul>
                    </li>

                    <li>Thực hiện theo Chính sách Đổi - Trả (nếu có);</li>
                    <li>Kiểm tra cẩn thận trước khi tiến hành thanh toán: các thông tin, phương thức thanh toán, công cụ thanh toán;</li>
                    <li>Thực hiện thanh toán theo nhu cầu đã lựa chọn của Quý Khách Hàng, phù hợp Chính sách Thanh toán của C-Mart:</li>
                    <li>
                        <ul>
                            <li>⦁	Cơ chế thanh toán bằng Tiền mặt;</li>
                            <li>⦁	Cơ chế thanh toán bằng Tiền Tích Lũy;</li>
                            <li>⦁	Cơ chế thanh toán bằng Thẻ Thanh Toán C-Card;
</li>
                            <li>⦁	Cơ chế thanh toán bằng Voucher/Coupon;</li>
                            <li>⦁	Cơ chế thanh toán bằng Thẻ ngân hàng, QR Pay;</li>

                        </ul>
                    </li>
                    <li>
Vui lòng lưu giữ hóa đơn chứng từ chứng minh giao dịch nhằm đảm bảo quyền lợi Khách Hàng về sau.</li>


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
            <a href="#" class="content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> C-MART Việt Nam</a>
            <a href="#" class="active-cs content-hover-border list-group-item list-group-item-action "><i class="fas fa-info-circle"></i> Chăm sóc khách hàng</a>
            <a href="{{url('/')}}" class="  content-hover  list-group-item list-group-item-action  border-bottom-0 border-right-0 border-left-0">Giơi Thiệu</a>
            <a href="{{url('/csdd')}}" class="content-hover content-list list-group-item list-group-item-action border-0 ">Chính Sách Định Danh & Quyền Lợi Khách Hàng</a>
            <a href="{{url('/hddh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Hướng Dẫn Đặt Hàng</a>
            <a href="{{url('/cstt')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Thanh Toán</a>
            <a href="{{url('/csgn')}}" class="active-csv content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Giao Nhận </a>
            <a href="{{url('/csdt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Đổi Trả </a>
            <a href="{{url('/csbh')}}" class=" content-hover content-list list-group-item list-group-item-action border-0">Chính Sách Bảo Hành</a>
            <a href="{{url('/qddk')}}" class="content-hover content-list list-group-item list-group-item-action border-0">Quy Định Điều Khoản  </a>
            <a href="{{url('/qlv')}}" class="content-hover content-list list-group-item list-group-item-action border-0">C-MART & Khách Hàng Đặt Biệt  </a>
            <a href="{{url('/dt')}}" class="content-hover content-list list-group-item list-group-item-action border-0">C-MART & Đối Tác </a>
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


