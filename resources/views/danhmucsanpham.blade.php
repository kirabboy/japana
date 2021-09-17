<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/danhmucsanpham.css') }}">
    <script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 100, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ) .val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>
</head>

<body>
<p>
    Price Range:<p id="amount"></p>
  </p>

  <div id="slider-range"></div>

  <form method="post" action="get_items.php">
    <input type="hidden" id="amount1">
    <input type="hidden" id="amount2">
    <input type="submit" name="submit_range" value="Submit">
  </form>
    <!-- breadcrumbs -->
    <section>
        <div class="page-title shop-page-title">
            <div class="page-title-inner container">
                <nav class="breadcrumbs">
                    <a href="#">Trang chủ</a>
                    <span class="divider">/</span>
                    <a href="#" class="active">Chăm Sóc Sức Khỏe</a>
                </nav>
            </div>
        </div>
    </section>

    <!-- main -->
    <section>
        <div class="category-page container">
            <!-- bên trái -->
            <div class="shop-sidebar ">
                <!-- danh mục -->
                <aside class="widget">
                    <h3 class="widget-title">Danh mục</h3>
                    <div class="widget-search">
                        <input type="text" class="form-control input_search" placeholder="Tìm kiếm...">
                        <button type="button">
                            <i class="search-icon"></i>
                        </button>
                    </div>
                    <div class="widget-product-categories scrollbar">
                        <label class="check-custom">
                            Chăm Sóc Hệ Tiêu Hóa
                            <span class="count-item"> (30)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Chăm Sóc Mắt
                            <span class="count-item"> (22)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hỗ Trợ Não & Trí Nhớ
                            <span class="count-item"> (17)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hỗ Trợ Xương Khớp
                            <span class="count-item"> (30)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hỗ Trợ Điều Trị Tai Biến
                            <span class="count-item"> (10)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hỗ Trợ Điều Trị Ung Thư
                            <span class="count-item"> (21)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Nấm Linh Chi
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Sức Khỏe & Sinh Lý Nam
                            <span class="count-item"> (29)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Sức Khỏe & Sinh Lý Nữ
                            <span class="count-item"> (18)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Tảo Xoắn
                            <span class="count-item"> (11)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Thải Độc Gan
                            <span class="count-item"> (34)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Vitamin Tổng Hợp
                            <span class="count-item"> (42)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Điều Trị Khác
                            <span class="count-item"> (36)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </aside>

                <!-- lọc giá -->
                <aside class="widget">
                    <h3 class="widget-title">Danh mục</h3>
                    <div class="widget-filter-price">
                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">Price range:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                    </div>
                </aside>

                <!-- thương hiệu -->
                <aside class="widget">
                    <h3 class="widget-title">Thương hiệu</h3>
                    <div class="widget-search">
                        <input type="text" class="form-control input_search" placeholder="Tìm kiếm...">
                        <button type="button">
                            <i class="search-icon"></i>
                        </button>
                    </div>
                    <div class="widget-product-categories scrollbar">
                        <label class="check-custom">
                            Ably
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            AFC
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            AFC Efushi Group
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Aojiru
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            API
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Asahi
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Ashirira
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            B3
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Beauty Mirai
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Beauty Rose Crystal
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Bella Fora
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Cosmic Pharmaceutical Inc
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Daiichi Sankyo
                            <span class="count-item"> (36)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            DHC
                            <span class="count-item"> (24)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            DIC
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            FANCL
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Fine Japan
                            <span class="count-item"> (11)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Forever Wellness
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Fujina
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Genki Fami
                            <span class="count-item"> (4)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Grateful
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Green Herb
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Health Science Co., Ltd
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            HealthAid
                            <span class="count-item"> (4)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hebora
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hiro Nippon
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hisamitsu
                            <span class="count-item"> (4)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            House
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Ichiban Boshi
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            ITOH
                            <span class="count-item"> (4)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Japan Algae
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Josephine
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            JpanWell
                            <span class="count-item"> (6)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            KAI
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Kanehide Bio Co.LTD
                            <span class="count-item"> (5)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Kanpo Yamamoto
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Katsuri
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Kensei
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Ably
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            AFC
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            AFC Efushi Group
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Aojiru
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            API
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Asahi
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Ashirira
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            B3
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Beauty Mirai
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Beauty Rose Crystal
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Bella Fora
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Cosmic Pharmaceutical Inc
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Daiichi Sankyo
                            <span class="count-item"> (36)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            DHC
                            <span class="count-item"> (24)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            DIC
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            FANCL
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Fine Japan
                            <span class="count-item"> (11)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Forever Wellness
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Fujina
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Genki Fami
                            <span class="count-item"> (4)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Grateful
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Green Herb
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Health Science Co., Ltd
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            HealthAid
                            <span class="count-item"> (4)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hebora
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hiro Nippon
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Hisamitsu
                            <span class="count-item"> (4)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            House
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Ichiban Boshi
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            ITOH
                            <span class="count-item"> (4)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Japan Algae
                            <span class="count-item"> (3)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Josephine
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            JpanWell
                            <span class="count-item"> (6)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            KAI
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Kanehide Bio Co.LTD
                            <span class="count-item"> (5)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Kanpo Yamamoto
                            <span class="count-item"> (2)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Katsuri
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-custom">
                            Kensei
                            <span class="count-item"> (1)</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </aside>
            </div>

            <!-- bên phải -->
            <div class="shop-container">

            </div>
        </div>
    </section>

    
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/danhmucsanpham.js') }}"></script>
</body>

</html>