@extends('dashboard.layout.app')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Investment Details</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Investment Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped" style="width:100%">
                            <tr>
                                <th>Investment Name:</th>
                                <td>{{ $sub->subscription->name }}</td>
                            </tr>
                            <tr>
                                <th>Investment Amount:</th>
                                <td>{{ $sub->user->currency }}{{ $sub->amount }}</td>
                            </tr>
                            <tr>
                                <th>Investment Duration:</th>
                                <td>{{ $sub->subscription->term_days }} Day(s)</td>
                            </tr>
                            <tr>
                                <th>Daily Interest:</th>
                                <td>{{ $sub->subscription->daily_interest }}%</td>
                            </tr>
                            <tr>
                                <th>Status:</th>
                                <td>{!! $sub->status() !!}</td>
                            </tr>
                            <tr>
                                <th>Approved Date:</th>
                                <td>{{ date('d M, Y', strtotime($sub->updated_at)) }}</td>
                            </tr>
                            <tr>
                                <th>Ending Date:</th>
                                <td>{{ date('d M, Y', strtotime($sub->ending_date() )) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
