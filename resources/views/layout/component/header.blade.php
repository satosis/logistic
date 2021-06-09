
<!DOCTYPE html>
<html lang="vi" xml:lang="vi" >
<head>
       <!--CSS-->
       <title>{{ $title_page ?? 'Đồng hồ Thụy Sỹ, đồng hồ nam, đồng hồ nữ chính hãng cao cấp' }}</title>
       <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('view/css/display.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/css/chat.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/css/font/font.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/js/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/js/Lightbox/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/js/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/css/Common.css') }}" rel="stylesheet" />    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--CSS Responsive-->
    <link href="{{ asset('view/css/css_rwd_common.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/css/css_rwd.min.css') }}" rel="stylesheet" />
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <link href="{{ asset('view/css/dqw.css') }}" rel="stylesheet" />
    <link href="{{ asset('view/css/news_css_rwd.css') }}" rel="stylesheet" />
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
    <!-- jquery -->
    <script src="{{ asset('view/js/jquery-1.9.1.min.js') }}"></script>
     
    <script src="{{ asset('view/js/stv_new.js') }}"></script> 
    <link rel="shortcut icon" href="https://www.dangquangwatch.vn/view/favicon.ico" type="image/x-icon"/>  
      
        
    @if(session('toastr'))
        <script>    
            var TYPE_MESSAGE="{{session('toastr.type') }}";
            var MESSAGE ="{{session('toastr.message') }}";
        
        </script>
    @endif
    <script>
        $(window).bind("load", function() {
            jQuery("#status").fadeOut();
            jQuery("#loader").fadeOut();
        });
    </script>
</head>
<style>
  #status {
        width: 200px;
        height: 200px;
        position: fixed;
        left: 50%;
        top: 50%;
        background-image: url("{{ asset('view/img/loader.gif') }}");
        background-repeat: no-repeat;
        background-position: center;
        margin: -100px 0 0 -100px;
        z-index: 100001
    }
    *{
        outline:none;
        font-family: Roboto, -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji' !important;
    }
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: #FFF;
        z-index: 100000
    }
        </style>
 
<body>
<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat plugin code -->
      <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="103980634638551">
      </div>
@include('layout.component.chat')
<div id='status'></div>
<div id='loader'></div>
<div id="commonHead">   
    <div class="wrp">
                        <h1 class="textLeft dnTablet-l">Đồng hồ nam, Đồng hồ Thụy Sỹ</h1>
                <form action="{{ route('get.product.index') }}" class="frmSearch"  method="get"> 
    <div class="flex">
        <input type="text" name="keyword" id="keyword" autocomplete="off" value="{{ Request('keyword') }}" placeholder="Nhập từ khóa tìm kiếm..." /> 
        <button class="btnSearch">
            <i class="fas fa-search"></i>
        </button>
        
    </div>     
</form>   
    

     <ul class="menuRight dnTablet-l">
            <li><a href="/" title="Home">Trang chủ</a></li>
            <li><a href="{{ route('get.blog.home') }}" title="Tin tức">Tin tức</a></li>
            @if (Auth::check())
            <li><a href="{{ route('get.user.index')}}">{{Auth::user()->name}}</a></li>
            <li><a href="{{ route('get.logout') }}">Đăng xuất</a></li>
            @else
            <li><a href="{{ route('get.login') }}">Đăng nhập</a></li>
            <li><a href="{{ route('get.register') }}">Đăng ký</a></li>
            @endif
        </ul>
        
        
    </div>
</div>
<div id="header">
    <div class="wrp">
        <a href="/" title="Home" class="logo">
            <img src="{{ asset('view/img/logo.png') }}" alt="Logo"/>
        </a>
        <div id="menuMain">
            <ul>
                <li class="hasChild">
                    <a href="javascript:;" title="Đồng hồ chính hãng" >Đồng hồ chính hãng</a>
                    <ul>
                        <li>
                            <div class="subMenu" style="width: 250px;">                                             
                                <div class="group">                                       
                                    <div class="item">
                                    @foreach($category as $listcate)
                                            @if($listcate->c_cate == 'watch')
                                                <a href="{{ route('get.category.detail',$listcate->c_slug.'-'.$listcate->id) }}">{{ $listcate->c_name}}</a>
                                            @endif
                                        @endforeach
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" title="Kinh mat thoi trang" >Kính mắt thời trang</a>
                    <ul>
                        <li>
                            <div class="subMenu" style="width: 250px;">
                                <div class="group">                                        
                                    <div class="item">
                                    @foreach($category as $listcate)
                                            @if($listcate->c_cate == 'glass')
                                                <a href="{{ route('get.category.detail',$listcate->c_slug.'-'.$listcate->id) }}">{{ $listcate->c_name}}</a>
                                            @endif
                                        @endforeach
                            </div>
                        </li>
                    </ul> 
                </li>
                <li>
                    <a href="javascript:;" title="Phu kien dong ho" >Phụ kiện đồng hồ</a>
                    <ul>
                        <li>
                            <div class="subMenu" style="width: 250px;">                                   
                                <div class="group">                                       
                                    <div class="item">
                                        @foreach($category as $listcate)
                                            @if($listcate->c_cate == 'accessories')
                                                <a href="{{ route('get.category.detail',$listcate->c_slug.'-'.$listcate->id) }}">{{ $listcate->c_name}}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div> 
                            </div>
                        </li>
                    </ul> 
                </li>
            </ul>
        </div>
        <div class="right">
            <a href="tel:18006005"   class="item">
                <span class="icon">
                    <img src="{{ asset('view/img/hotline.png') }}" alt="Hotline" />
                </span>
                <span class="text">
                    <span class="top">Hotline</span>
                    <span class="bot">1800 6005</span>
                </span>
            </a>
            <a href="/he-thong-cua-hang/"   class="item">
                <span class="icon">
                    <img src="{{ asset('view/img/address.png') }}" alt="Cua hang" />
                </span>
                <span class="text">
                    <span class="top">Hệ thống</span>
                    <span class="bot">Cửa hàng</span>
                </span>
            </a>
            <a href="{{ route('get.shopping.index')}}" class="btnCart">
    <i class="fas fa-shopping-cart"></i>
    <span class="number">{{ get_data_user('web','id') ? \Cart::count() : '0'}}</span>
</a>
            
        </div>
    </div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="103980634638551">
      </div>