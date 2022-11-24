@extends('dashboard.layout.app')
@section('content')

    <div class="content mt-3">

        <div class="animated fadeIn">

            <div>
                <form method="post" action="{{ route('user.processWithdraw') }}">
                    @csrf
                    <div class="container">
                        @if(session()->has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ session()->get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(session()->has('low_balance'))
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ session()->get('low_balance') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(session()->has('nop'))
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ session()->get('nop') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
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
                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Make Request to Withdraw Your Earnings!</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="text-info mb-0">Your Earnings:  {{ $user->currency }}&nbsp;{{ $user->profit }}</h3>


                                            </div>
                                        </div>

                                        <hr class="mb-1">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">

                                                    <p id="InvestDescr" class="mt-3 pl-2 pr-2">
                                                        Wallet Balance: {{ $user->currency }}&nbsp;{{ $user->balance }}
                                                    </p>

                                                    <p id="request" class="mt-3 pl-2 pr-2">
                                                        Pending Withdrawals: {{ $user->currency }}&nbsp;{{ $pending }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="Account">Amount to Withdraw</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span data-toggle="popover" data-container="body" data-html="true" data-title="Amount" data-content="<div class='text-center one-card'>Amount to Withdraw<div class='visa-mc-cvc-preview'></div></div>" data-trigger="hover">$</span>
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
                                                <div class="form-group">
                                                    <label for="Account">Account to Credit</label>
                                                    <select class="form-control form-control" id="Account" data-val="true" data-val-required="The Address field is required." name="wallet_address">
                                                        <option value="NA">Please Select an Account</option>
                                                        @foreach($w_method as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->currency }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-4" >
                                                        <i class="fa fa-database fa-lg"></i>&nbsp;
                                                        <span id="payment-button-amount">Submit Request</span>
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
                </form>
            </div>
        </div>

    </div>

@endsection
