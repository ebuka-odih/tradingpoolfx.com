
<!DOCTYPE html>
<html>
<head>
    <title>TradingPoolFX | login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- //web font -->
</head>
<body>
<!-- main -->
<div class="main-w3layouts wrapper">
    <h1>Login</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <a href="{{ route('index') }}" >
                <img src="{{ asset('img/logo1.png') }}" alt="Metrics Trade Plc" title="" class="img-fluid auth__logo" />
            </a>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input class="text email" type="email" name="email" placeholder="Email" required>
                <input class="text" type="password" name="password" placeholder="Password" required>

                <input type="submit" value="Login">
            </form>
            <p>  Forget Your Password?
                @if (Route::has('password.request'))
                    <a class="txt1" href="{{ route('password.request') }}">
                        {{ __('Reset Password Now!') }}
                    </a>
                @endif

            </p>
            <br>
            <p>Don't have an Account? <a href="{{ route('register') }}"> Register Now!</a></p>

        </div>
    </div>
    <!-- copyright -->

    <!-- //copyright -->
    <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- //main -->

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

<!-- Mirrored from www.metricstrade.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 23:05:19 GMT -->
</html>
