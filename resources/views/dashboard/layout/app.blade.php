
<!doctype html>
<html class="no-js" lang="">
<head>
    <title>Dashboard - TradingPoolFX</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Legitimatepoolfx">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.less') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://www.legitimatepoolfx.com/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://www.legitimatepoolfx.com/assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js" integrity="sha512-LW9+kKj/cBGHqnI4ok24dUWNR/e8sUD8RLzak1mNw5Ja2JYCmTXJTF5VpgFSw+VoBfpMvPScCo2DnKTIUjrzYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
</head>
<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('user.dashboard') }}">
               <h3>TradingPoolFX</h3>
            </a>
            <a class="navbar-brand hidden" href="{{ route('user.dashboard') }}">
                <h3>TradingPoolFX</h3>
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('user.dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>

                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-user-circle"></i>
                        My Account
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('user.profile') }}">My Profile</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('user.security') }}">Change Password</a></li>
{{--                        <li><i class="fa fa-bars"></i><a href="/Identity/Account/Manage/Email">Manage Email</a></li>--}}
                        <li>
                            <a class="nav-link dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-logout" style="color:#fefefe"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                        </li>
                    </ul>
                </li>
                <h3 class="menu-title">Investment Details</h3>
                <!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-table"></i>
                        Manage Accounts
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('user.account') }}">My Credit Accounts</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('user.sub.history') }}">My Investments</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-th"></i>
                        Transactions
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('user.deposit') }}">Fund Account</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('user.sub.plans') }}">Invest Fund</a></li>
{{--                        <li><i class="menu-icon fa fa-th"></i><a href="/Identity/Account/Manage/RefundInvestment">Refund Investment</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a href="{{ route('user.deposit.transactions') }}"> <i class="menu-icon fa fa-history"></i>Transaction History </a>
                </li>
                <h3 class="menu-title">Cashouts</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-tasks"></i>
                        My Wallet
                    </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('user.withdraw') }}">Withdraw Earnings</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="{{ route('user.WithdrawCapital') }}">Withdraw Capital</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/Identity/Account/Manage/ProfitHistory"> <i class="menu-icon fa fa-envelope"></i>Profit History</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">
        <div class="header-menu">
            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <h5>
                        <i class="fa fa-user"></i> Welcome, {{ auth()->user()->fullname() }}
                    </h5>
                    <div id="ytWidget" style="display:none;"></div>
                    <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=tr&widgetTheme=dark&autoMode-true" type="text/javascript"></script>
                </div>

            </div>

            <div class="col-sm-5">
                <div id="google_translate_element"></div>
                <div class="user-area dropdown float-right">


{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <h3>TradingPoolFX</h3>--}}
{{--                        <img src="/images/noimage.png" alt="..." style="width:40px; height:40px;" class="user-avatar rounded-circle">--}}
{{--                    </a>--}}

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="/Identity/Account/Manage/PersonalData">My Profile</a>
                        <a class="nav-link" href="/Identity/Account/Manage/ChanagePassword">Change Password</a>
                        <form method="post" action="/Identity/Account/Logout">
                            <button type="submit" class="nav-link dropdown-item">Logout</button>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8DT1a3CTqnpCgig_T_wqfVkVFb_wx369Ka-LzjmU1gjxx_Aglg7cdC4F-amUb_QV0Js-mv4ZEiN1a6A906J36xPauJAHXEWepPE6u02KdhIvNSFyVTEt5zGCuCfazHP_mjhqf4VBA1B5OGbpMyKf-007Mx-WbaStr9MA52t62SgVYJTwcn2B8hrS-iAGa4_Thg" />
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->





   @yield('content')



</div><!-- /#right-panel -->

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<script src="{{ asset('assets/js/Chart.bundle.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/js/widgets.js') }}"></script>
<script src="{{ asset('assets/js/jquery.vmap.js') }}"></script>
<script src="{{ asset('assets/js/jquery.vmap.min.js') }}"></script>

<script src="https://www.legitimatepoolfx.com/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>

<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/datatables.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/jszip.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="https://www.legitimatepoolfx.com/assets/js/lib/data-table/datatables-init.js"></script>




<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js" crossorigin="anonymous" integrity="sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o+ok+t/SAKlL5mvXLr0OXNi1Hp">
</script>
<script>(window.jQuery && window.jQuery.validator||document.write("\u003Cscript src=\u0022/Identity/lib/jquery-validation/dist/jquery.validate.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-rZfj/ogBloos6wzLGpPkkOr/gpkBNLZ6b6yLy4o\u002Bok\u002Bt/SAKlL5mvXLr0OXNi1Hp\u0022\u003E\u003C/script\u003E"));</script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validation.unobtrusive/3.2.9/jquery.validate.unobtrusive.min.js" crossorigin="anonymous" integrity="sha384-ifv0TYDWxBHzvAk2Z0n8R434FL1Rlv/Av18DXE43N/1rvHyOG4izKst0f2iSLdds">
</script>
<script>(window.jQuery && window.jQuery.validator && window.jQuery.validator.unobtrusive||document.write("\u003Cscript src=\u0022/Identity/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-ifv0TYDWxBHzvAk2Z0n8R434FL1Rlv/Av18DXE43N/1rvHyOG4izKst0f2iSLdds\u0022\u003E\u003C/script\u003E"));</script>

<script>
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();

        var planinfo = [];
        $(".load-plan").click(function () {
            planinfo = $(this).data("info").split("|");
            $("#Address").val(planinfo[0].trim());
            $("#Types").val(planinfo[1].trim());
            if ((planinfo[2].trim()) == "True") {
                $("#IsActive").val("Active");
            }
            else {
                $("#IsActive").val("Non Active");
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#transactions').DataTable({
            "pageLength": 4,
            "sort":true
        });

        $("#plan_1").addClass("ti-gift text-success border-success");
        $("#plan_2").addClass("ti-money text-primary border-primary");
        $("#plan_3").addClass("ti-credit-card text-warning border-warning");
        $("#plan_4").addClass("ti-drupal text-info border-info");
    });
</script>


</body>
</html>
