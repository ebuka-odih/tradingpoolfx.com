@extends('dashboard.layout.app')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Invest Fund</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Invest Fund</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="animated fadeIn">

            <div>
                <form method="post" action="{{ route('user.subscribe') }}" novalidate="novalidate">
                    @csrf
{{--                    <input type="hidden" name="subscription_id" value="{{ $plans->id }}">--}}


                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Make Your Investment Here!</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="text-info mb-0">Investable Account Balance: {{ auth()->user()->currency }} {{ auth()->user()->balance }}</h3>


                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="nk-block-des">
                                                <p class="text-danger">Note: This will be deducted from your main balance</p>
                                            </div>
                                            <br>
                                            @if(session()->has('declined'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('declined') }}
                                                </div>
                                            @endif
                                            @if(session()->has('insufficient'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('insufficient') }}
                                                </div>
                                            @endif
                                        </div>

                                        <hr class="mb-1">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="defaultSelect">Investment Plan</label>
                                                    <select required class="form-control form-control" id="Plan" data-val="true" data-val-required="The Plan field is required." name="subscription_id">
                                                        <option selected>Please Select a Plan</option>
                                                        @foreach($plans as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->name }} (${{ $item->min_deposit }} - ${{ $item->max_deposit }})
                                                        </option>
                                                        @endforeach

                                                    </select>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span data-toggle="popover" data-container="body" data-html="true" data-title="Amount" data-content="<div class='text-center one-card'>Amount<div class='visa-mc-cvc-preview'></div></div>" data-trigger="hover">$</span>
                                                    </div>
                                                    <input id="Amount" required="" placeholder="0.00" type="text" class="form-control cc-cvc" autocomplete="off" data-val="true" data-val-number="The field Amount must be a number." data-val-required="The Amount field is required." name="amount" value="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input checked id="Status" class="form-check-input" type="checkbox" data-val="true" data-val-required="The Agree field is required." name="Input.Agree" value="true">
                                                        <span id="chkAgree" asp-for="Input.Agree" class="form-check-sign">
                                                            I have read and agree to the terms and conditions
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-4" >
                                                        <i class="fa fa-database fa-lg"></i>&nbsp;
                                                        <span id="payment-button-amount">Submit Investment Details</span>
                                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->
            </div>
        </div>

    </div>
@endsection
