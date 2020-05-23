<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Emoji - Full trọn bộ 1001 icon Facebook mới nhất - Biểu tượng cảm xúc Facebook</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon-32x32.png')}}">
    <meta name="description"
          content="Tổng hợp full bộ icon facebook đầy đủ nhất, mới nhất với nhiều trạng thái khác nhau, công cụ viết status facebook kèm icon tiện lợi nhất chỉ cần click vào biểu tượng cảm xúc facebook và chọn nhiều icon facebook khác nhau"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="{{url('assets/css/tooltipster.bundle.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('assets/css/tooltipster-sideTip-borderless.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('assets/css/theme.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-wrapper">
        <div class="logo">
            <img src="{{url('assets/images/logo.png')}}">
            <span>Facebook Emoji</span>
        </div>
        <div class="search">
            <input class="search-input" type="text" placeholder="Tìm kiếm icon...">
            <i class="fa fa-search"></i>
        </div>
        <div class="social-share">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-square"></i>
        </div>
        <img class="nav-menu-icon" src="{{url('assets/images/menu-icon.png')}}">
    </div>
</header>
<div class="main @yield('main-class')">
    <div class="left-sidebar">
        <ul>
            <li class="@if($active == 'fb-emoji'){{'active'}}@endif">
                <a href="{{route('home')}}"><img src="{{url('assets/images/smile.png')}}">
                    Facebook emoji</a>
            </li>
            <li class="@if($active == 'line-through'){{'active'}}@endif">
                <a href="{{route('line-through')}}"><img src="{{url('assets/images/editing.png')}}">
                    Tạo chữ gạch chân
                </a>
            </li>
            <li>
                <a href="#"><img src="{{url('assets/images/text.png')}}">Tạo văn bản</a>
            </li>
            <li><a href="#"><img src="{{url('assets/images/download.png')}}">Download video</a></li>
            <li class="@if($active == 'qr-code'){{'active'}}@endif">
                <a href="{{route('qr-code')}}"><img src="{{url('assets/images/qr-code.png')}}">Tạo QR code</a>
            </li>
        </ul>
        <span>Website khác</span>
        <ul>
            <li><a href="https://vncoder.vn/"><img src="{{url('assets/images/website.png')}}">Học lập trình</a></li>
            <li><a href="https://toeic24.vn/"><img src="{{url('assets/images/website.png')}}">Luyện thi Toeic</a></li>
            <li><a href="http://dehoctot.com/"><img src="{{url('assets/images/website.png')}}">Giải bài tập</a></li>
            <li><a href="https://vanmautuyenchon.net/"><img src="{{url('assets/images/website.png')}}">Văn mẫu</a></li>
            <li><a href="https://diembao24h.net/"><img src="{{url('assets/images/website.png')}}">Tin tức</a></li>
        </ul>
    </div>
    @yield('content')
</div>
@yield('footer')
<script src="{{url('assets/js/theme.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/tooltipster.bundle.min.js')}}" type="text/javascript"></script>
@yield('js')
</body>
</html>
