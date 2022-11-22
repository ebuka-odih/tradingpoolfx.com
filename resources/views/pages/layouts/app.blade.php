<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Trust InvestmentHubs</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/png" sizes="32x32" href="front/new-assets/img/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="{{ asset('front/new-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/new-assets/css/responsive.css') }}">

</head>
<body>

<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8?cb=googleTranslateElementInit"></script>

<header class="header header-home-one">
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed bitmex-icon-menu" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false"> </button>
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <span style="color: white;font-size: 18px">
                        <img src="{{ asset('front/new-assets/img/logo-dark.png') }}" width="50px" /> Trust InvestmentHubs</span>

                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                <ul class="nav navbar-nav navigation-box">
                    <li> <a href="{{ route('homepage') }}">Home</a> </li>
                    <li> <a href="{{ route('about') }}">About Us</a> </li>
                    <li> <a href="{{ route('plans') }}">Plans</a> </li>
                    <li> <a href="{{ route('contact.create') }}">Contact Us</a> </li>
                    <li> <a href="{{ route('login') }}">Login</a> </li>
                    <li> <a href="{{ route('register') }}">Register</a> </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                <a href="#hidden-sidebar" class="side-menu-icon bitmex-icon-menu side-nav-opener"></a>
            </div><!-- /.right-side-box -->
        </div><!-- /.container -->
    </nav>
</header><!-- /.header -->


@yield('content')


<div class="footer-top">
    <div class="thm-container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="single-footer-top">
                    <p><i class="bitmex-icon-envelope"></i><span>Email: </span><a href="mailto:support@trustinvestmenthubs.com" target="new" style="color: #eee;">support@trustinvestmenthubs.com</a></p>
                </div><!-- /.single-footer-top -->
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="single-footer-top">
                    <p><i class="bitmex-icon-phone-call"></i><span> Telegram: </span><a href="https://t.me/Customer247service" style="color: #eee;">+1(321)5994827</a></p>
                </div><!-- /.single-footer-top -->
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="single-footer-top">
                    <p><i class="fa fa-whatsapp"></i><span>WhatsApp Only: </span><a href="https://wa.me/qr/BOODCXKN5HUIB1" target="new" style="color: #eee;">+1(501)3025133</a></p>
                </div><!-- /.single-footer-top -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</div><!-- /.footer-top -->

<footer class="site-footer">
    <div class="thm-container">
        <div class="row masonary-layout">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <a href="{{ route('homepage') }}">
                        <span style="color: white;font-size: 18px"><img src="{{ asset('front/new-assets/img/logo-dark.png') }}" width="50px" /> Trust InvestmentHubs</span>
                    </a>
                </div><!-- /.single-footer-widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="title">
                        <h3>Quick Links</h3>
                    </div><!-- /.title -->
                    <ul class="links-list">
                        <li><a href="{{ route('about') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('register') }}">Get Started</a></li>
                    </ul><!-- /.links-list -->
                </div><!-- /.single-footer-widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="title">
                        <h3>Account</h3>
                    </div><!-- /.title -->
                    <ul class="links-list">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Create An Account</a></li>
                        <li><a href="{{ route('contact.create') }}">Support</a></li>
                    </ul><!-- /.links-list -->
                </div><!-- /.single-footer-widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="title">
                        <h3>Funding Option</h3>
                    </div><!-- /.title -->
                    <img src="{{ asset('front/new-assets/img/custom/payment.png') }}" style="max-width:250PX" />
                </div><!-- /.single-footer-widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="title">
                        <h3>Withdrawal Option</h3>
                    </div><!-- /.title -->
                    <ul class="links-list">
                        <li><a href="#">BITCOIN</a></li>
                        <li><a href="#">BANK TRANSFER</a></li>
                        <!--<li><a href="contact">Support</a></li>-->
                    </ul><!-- /.links-list -->
                </div><!-- /.single-footer-widget -->
            </div><!-- /.col-md-3 -->


        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</footer><!-- /.site-footer -->

<div class="footer-bottom">
    <div class="thm-container clearfix">
        <div class="pull-left copy-text">
            <p>&copy; 2022 Trust InvestmentHubs. All Rights Reserved.</p>
        </div><!-- /.pull-left copy-text -->
        <div class="social pull-right">
            <a href="#" class="fa fa-twitter"></a><!--
        	--><a href="#" class="fa fa-facebook"></a>
        </div><!-- /.social -->
    </div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->


<section class="hidden-sidebar side-navigation">
    <a href="#" class="close-button side-navigation-close-btn fa fa-times"></a><!-- /.close-button -->
    <div class="sidebar-content">
        <h3>trustinvestmenthubs.com</h3>
        <p>Trust InvestmentHubs is an automated platform for crypto & forex trading that is focused on delivering stress-free services to its customers by using our team of professional brokers to perform trading options at their best.</p>
        <p class="contact-info">info@trustinvestmenthubs.com <br /> +1(501)3025133</p>
        <br><a href="https://t.me/Customer247service">Telegram</a>
        <!-- /.contact-info -->
        <div class="social">
            <a href="https://www.twitter.com/zengo" class="fa fa-twitter"></a><!--
        	--><a href="https://www.linkedin.com/company/zengo" class="fa fa-linkedin"></a>
        </div><!-- /.social -->
    </div><!-- /.sidebar-content -->
</section><!-- /.hidden-sidebar -->

{{--<script  type="text/javascript">  var config = {    phone :" 1(501)3025133",    call :"Message Us",    position :"ww-left",    size : "ww-normal",    text : "",    type: "ww-standard",    brand: "",    subtitle: "",    welcome: ""  };  var proto = document.location.protocol, host = "cloudfront.net", url = proto + "//d3kzab8jj16n2f." + host;    var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = url + "/v2/main.js";    s.onload = function () { tmWidgetInit(config) };    var x = document.getElementsByTagName("script")[0]; x.parentNode.insertBefore(s, x);</script>0--}}

{{--<a href="https://wa.me/qr/BOODCXKN5HUIB1" target="new" class="cus-float">--}}
{{--    <i class="fa fa-whatsapp my-float"></i>--}}
{{--</a>--}}
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+1(501)3025133", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>

<script src="{{ asset('new-assets/js/jquery.js') }}"></script>

<script src="{{ asset('front/new-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/isotope.js') }}"></script>
<script src="{{ asset('front/new-assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/wow.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('front/new-assets/js/chart-config.js') }}"></script>
<script src="{{ asset('front/new-assets/js/custom.js') }}"></script>
{{--<script src="//code-eu1.jivosite.com/widget/WDrLWnp7mR" async></script>--}}
<script src="{{ asset('LIVECHAT.js') }}" async></script>

</body>

<!-- Mirrored from zengofx.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 20:33:14 GMT -->

<!-- Mirrored from zengofx.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Oct 2021 08:43:10 GMT -->
</html>
