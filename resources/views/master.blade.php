<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ambalaj Sepeti - Anasayfa</title>
    <meta name="description" content="Hello World!">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{'css/core.css'}}">
    <link rel="stylesheet" href="{{'css/style.css'}}">
   <!-- <link href="{{'css/bootstrap.css'}}" rel="stylesheet" type="text/css" media="all" />  -->



    <meta property="og:title" content="GULP - SCSS Starter">
    <meta property="og:description" content="Hello World!">
    <meta property="og:url" content="https://github.com/yasingencnet/yasingencnet.github.io/">
    <meta property="og:image" content="assets/images/head/og-image.jpg">

    <link rel="shortcut icon" href="{{'images/head/favicon.png'}}">
    <link rel="apple-touch-icon" href="{{'images/head/60x60.png'}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{'images/head/76x76.png'}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{'images/head/120x120.png'}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{'images/head/152x152.png'}}">

    <meta name="theme-color" content="#FED700">
</head>
<body>


    @yield('header')
    @yield('main')
    @yield('footer')


<!-- <a href="javascript:" class="button-whatsapp button-vertical">
    <span class="button-wrapper">
        <i class="lab la-whatsapp"></i>
        <span class="label">WhatsApp İletişim</span>
    </span>
</a> -->
<nav class="mobile-nav">
    <div class="container">
        <ul class="mobile-nav-ul">
            <li class="mobile-nav-item">
                <a href="javascript:" class="mobile-nav-link js-button-category">
                    <i class="las la-bars"></i>
                    <span class="label">ÜRÜNLER</span>
                </a>
            </li>
            <li class="mobile-nav-item">
                <a href="javascript:" class="mobile-nav-link">
                    <i class="las la-shopping-basket"></i>
                    <span class="label">SEPETİM</span>
                </a>
            </li>
            <li class="mobile-nav-item">
                <a href="javascript:" class="mobile-nav-link">
                    <i class="las la-user-circle"></i>
                    <span class="label">HESABIM</span>
                </a>
            </li>
            <li class="mobile-nav-item">
                <a href="javascript:" class="mobile-nav-link">
                    <i class="lab la-whatsapp"></i>
                    <span class="label">İLETİŞİM</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script src="{{'js/lib.min.js'}}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{'js/core.min.js'}}"></script>
</body>
</html>