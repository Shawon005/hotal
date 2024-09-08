<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    @php $setting=setting(); @endphp
    <!-- ========== SEO ========== -->
    <title>{{$setting->site_title}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="{{$setting->fav_logo}}" />
	<link rel="icon" href="{{$setting->fav_logo}}">

    <!-- ========== STYLESHEETS ========== -->
    <link href="{{asset('')}}frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}frontend/revolution/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('')}}frontend/revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('')}}frontend/revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('')}}frontend/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}frontend/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}frontend/css/famfamfam-flags.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}frontend/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}frontend/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}frontend/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}frontend/css/responsive.css" rel="stylesheet" type="text/css">

    <!-- ========== ICON FONTS ========== -->
    <link href="{{asset('')}}frontend/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('')}}frontend/fonts/flaticon.css" rel="stylesheet">

    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script href="{{asset('')}}frontend/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script href="{{asset('')}}frontend/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- ========== PRELOADER ========== -->
    <div id="loading">
        <div class="inner">
            <div class="loading_effect">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <div  class="wrapper">
        <div class="top_menu">
            <div class="container">
                <div class="welcome_mssg hidden-xs">
                    Welcome to {{$setting->site_title}}
                </div>
                <ul class="top_menu_right">
                    <li><i class="fa fa-phone"></i><a href="tel:{{$setting->phone}}">{{$setting->phone}} </a></li>
                    <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i> <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
                    <li class="language-switcher">
                        <nav class="dropdown">
                            <a href="#" class="dropdown-toggle select" data-hover="dropdown" data-toggle="dropdown">
                                <i class="famfamfam-flag-gb "></i>English<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="famfamfam-flag-gr"></i>Ελληνικά</a></li>
                                <li><a href="#"><i class="famfamfam-flag-it"></i>Italiano</a></li>
                                <li><a href="#"><i class="famfamfam-flag-de"></i>Deutsch</a></li>
                                <li><a href="#"><i class="famfamfam-flag-fr"></i>Français</a></li>
                                <li><a href="#"><i class="famfamfam-flag-es"></i>Español</a></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </div>
        </div>
        @include('frontend.layout.partial.top')
        @yield('content')  
        @include('frontend.layout.partial.footer')
    </div>


    <div id="back_to_top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ========== NOTIFICATION ========== -->
    <div id="notification"></div>
    
    <!-- ========== JAVASCRIPT ========== -->
    <script type="text/javascript" src="{{asset('')}}frontend/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/jquery.smoothState.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/moment.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/morphext.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/wow.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/owl.carousel.thumbs.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/jPushMenu.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/countUp.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/js/main.js"></script>

    <!-- ========== REVOLUTION SLIDER ========== -->
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}frontend/revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>