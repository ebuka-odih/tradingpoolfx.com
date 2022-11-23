@extends('dashboard.layout.app')
@section('content')

    <div id="right-panel" class="right-panel">

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Fund Wallet</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Fund Wallet</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">

            <div class="animated fadeIn">

                <div>
                    <form method="post" action="{{ route('user.processDeposit') }}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        @if(session()->has('declined'))
                            <div class="alert alert-danger">
                                {{ session()->get('declined') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Register Your Payment Details Here!</strong>
                                </div>
                                <div class="card-body">
                                    <!-- Credit Card -->
                                    <div id="pay-invoice">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-info mb-0">NOTE: Your fund will be approved and added to your investable account within 24HRS.</p>
                                                </div>
                                            </div>

                                            <hr class="mb-1">

                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1 mt-3">FIN Broker Account Tokens</label>
                                                    <div class="input-group">
                                                        <select name="payment_method_id" required="" id="btnAddress" class="form-control form-control valid" data-val="true" data-val-required="The Address field is required."  aria-describedby="btnAddress-error" aria-invalid="false">
                                                            <option value="NA">Select a Token</option>
                                                            @foreach($wallets as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1 mt-3">Amount</label>
                                                    <div class="input-group">
                                                        <input id="Amount" required="" placeholder="0.00" type="text" class="form-control cc-cvc" data-val="true" data-val-required="Please enter the amount to be funded" data-val-cc-cvc="Please enter the amount to be funded" autocomplete="off" data-val-number="The field Amount must be a number." name="amount" value="">
                                                        <div class="input-group-addon">
                                                            <span data-toggle="popover" data-container="body" data-html="true" data-title="Amount" data-content="<div class='text-center one-card'>Amount<div class='visa-mc-cvc-preview'></div></div>" data-trigger="hover">$</span>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger field-validation-valid" data-valmsg-for="Input.Amount" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-4">
                                                            <i class="fa fa-database fa-lg"></i>&nbsp;
                                                            <span id="payment-button-amount">Proceed</span>
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

        </div> <!-- .content -->



    </div>

@endsection
