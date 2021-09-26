<!doctype html>
<html lang="en">

<head>
    <title>Japana Việt Nam</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{URL::to('public/css/boostrap/bootstrap.min.css')}}" rel="stylesheet" type='text/css' />
    <!-- Main CSS -->
    <link href="{{URL::to('public/css/order_tracking/style.css')}}" rel="stylesheet" type='text/css' />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link href="{{URL::to('public/fontawesome-5.15.4/css/all.min.css')}}" rel="stylesheet" type='text/css' />




<body>
    <div class="container">
        <div class="form-box-1" id="size-form-1">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login();">Đăng Nhập</button>
                <button type="button" class="toggle-btn" onclick="register();">Đăng ký</button>
            </div>

            <form id="login" class="input-group">
                <div class="box-input form-group">
                    <div class="icon-form">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" placeholder="Email hoặc số điện thoại" class="form-control ipt-text">
                </div>
                <div class="box-input form-group">
                    <div class="icon-form">
                        <i class="fa fa-lock"></i>
                    </div>
                    <input type="password" placeholder="Mật khẩu" class="form-control ipt-text">
                </div>

                <button type="submit" class="btn-red">Đăng nhập</button>
                <div class="box-check login-popup">
                    <label class="check-custom">Ghi nhớ tài khoản
                        <a href="#" title="Quên mật khẩu?" data-toggle="modal"
                            class="forgot-pass" onclick="forgotpassword()">Quên mật khẩu?</a>
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </form>


            <form id="register" class="input-group">
                <div class="box-input form-group">
                    <div class="icon-form">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" placeholder="Họ và tên" class="form-control ipt-text">
                </div>

                <div class="box-input form-group">
                    <div class="icon-form">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <input type="email" placeholder="Email" class="form-control ipt-text">
                </div>
                <div class="box-input form-group">
                    <div class="icon-form">
                        <i class="fa fa-phone"></i>
                    </div>
                    <input type="tel" placeholder="Số điện thoại" class="form-control ipt-text">
                </div>

                <div class="box-input form-group">
                    <div class="icon-form">
                        <i class="fa fa-lock"></i>
                    </div>
                    <input type="password" placeholder="Mật khẩu" class="form-control ipt-text">
                </div>
                <div class="box-input form-group">
                    <div class="icon-form">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
                    <input type="password" placeholder="Xác nhận mật khẩu" class="form-control ipt-text">
                </div>


                <div class="box-check">
                    <label class="check-custom">Bạn đã đọc và đồng ý với điều khoản sử dụng, mua bán và bảo
                        mật của <a href="#" title="japana">Japana.vn</a>
                        <input type="checkbox" id="check-rule" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="box-check2">
                    <label class="check-custom">Đăng ký nhận khuyến mãi từ chúng tôi
                        <input type="checkbox" id="check-promo" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <button type="submit" class="btn-red">Tạo
                    tài khoản</button>
            </form>
        </div>



        <div class="form-box-2" id="size-form-2">
            <form id="forgot-password" class="input-group">
                <p class="title-log text-center">Lấy lại mật khẩu</p>
                <form>
                    <p class="intro-log">
                        Vui lòng nhập địa chỉ email của bạn vào ô bên dưới. Bạn sẽ nhận được một liên kết để thiết lập
                        lại mật khẩu.
                    </p>
                    <div class="box-input form-group">
                        <div class="icon-form">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="email" placeholder="Nhập email của bạn" class="form-control ipt-text">
                    </div>

                    <button type="button" class="btn-red">Lấy lại mật khẩu</button>
                    <a href="#Login" class="link-return" onclick="backtohome()"><i class="fa fa-angle-double-left"></i> Quay lại trang đăng
                        nhập</a>
                </form>
            </form>

        </div>
    </div>
    <script>
    var LG = document.getElementById("login")
    var RG = document.getElementById("register")
    var FP = document.getElementById("forgot-password")
    var BTN = document.getElementById("btn")
    var SF1 = document.getElementById("size-form-1")
    var SF2 = document.getElementById("size-form-2")
    

    function register() {
        LG.style.left = "-550px";
        RG.style.left = "50px";     
        SF1.style.height = "600px"
    }

    function login() {
        LG.style.left = "50px";
        RG.style.left = "550px";
        SF1.style.height = "400px";
        
    }
    function forgotpassword(){
        SF1.style.top="-550px";
        SF2.style.top="-450px"
        SF2.style.opacity = "100%"
    }
    function backtohome() {
        SF1.style.top="50px";
        SF2.style.top="50px"
        SF2.style.opacity = "0"
    }
    </script>
</body>

</html>