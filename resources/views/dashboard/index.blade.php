@extends('dashboard.layout.app')
@section('content')

<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

<div class="content mt-3">

    <!--First Cards-->
    <div class="col-lg-6 col-md-6">
        <a href="{{ route('user.deposit') }}" class="card" title="Click here to add new fund">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">My Funds</div>
                        <div class="stat-digit">{{ $user->currency ? : "$" }}{{ $user->balance ? : "0.00" }}</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-6 col-md-6">
        <a href="{{ route('user.sub.plans') }}" class="card" title="Click here to make investment">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">My Investments</div>
                        <div class="stat-digit">{{ $user->currency ? : "$" }}{{ $investment ? : "0.00" }}</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-6 col-md-6">
        <a  class="card" title="Click here to see profit history">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-stats-up text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">My Profit</div>
                        <div class="stat-digit">{{ $user->currency }}{{ $user->profit ? : "0.00" }}</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-6 col-md-6">
        <a  class="card" title="Click here to see transaction history">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">My Money</div>
                        <div class="stat-digit">{{ $user->currency }}0.00</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!--First Cards End Here-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">

                <h4 class="mb-0">
                    <span class="fadeInLeft">$0.00</span>
                </h4>
                <p class="text-light">Pending Wallet Fundings</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart1"></canvas>
                </div>

            </div>

        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body pb-0">

                <h4 class="mb-0">
                    <span class="fadeInLeft">$0.00</span>
                </h4>
                <p class="text-light">Cancelled Fundings</p>

                <div class="chart-wrapper px-3" style="height:70px;" height="70">
                    <canvas id="widgetChart4"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">

                <h4 class="mb-0">
                    <span class="fadeInLeft">$0.00</span>
                </h4>
                <p class="text-light">Pending Capital Withdrawal</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">

                <h4 class="mb-0">
                    <span class="fadeInLeft">$0.00</span>
                </h4>
                <p class="text-light">Pending Profit Withdrawal</p>

            </div>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart3"></canvas>
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="card-title mb-0">Transaction History</h4>
                        <div class="small text-muted">Nov 19, 2022</div>
                    </div>
                    <!--/.col-->
                    <div class="col-sm-8 hidden-sm-down">
                        <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                <label class="btn btn-outline-secondary active">
                                    <input type="radio" name="options" id="option1" checked=""> Day
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="options" id="option2"> Month
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="options" id="option3"> Year
                                </label>
                            </div>
                        </div>
                    </div><!--/.col-->


                </div><!--/.row-->
                <div class="chart-wrapper mt-4">
                    <div class="table-responsive table-hover table-sales">
                        <table id="transactions" class="table">
                            <thead>
                            <tr>
                                <th>Trans Date</th>
                                <th>Narration</th>
                                <th class="text-right">Debit</th>
                                <th class="text-right">Credit</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i id="plan_1"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-uppercase">BASIC Plan</div>
                        <div class="stat-digit" style="font-size:16px">$300.00 - $600.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i id="plan_2"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-uppercase">STANDARD Plan</div>
                        <div class="stat-digit" style="font-size:16px">$500.00 - $1,000.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i id="plan_3"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-uppercase">PRO Plan</div>
                        <div class="stat-digit" style="font-size:16px">$1,000.00 - $2,000.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i id="plan_4"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-uppercase">EXECUTIVE Plan</div>
                        <div class="stat-digit" style="font-size:16px">$1,500.00 - $3,000.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- .content -->

@endsection
