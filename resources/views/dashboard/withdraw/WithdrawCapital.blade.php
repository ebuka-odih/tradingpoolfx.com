@extends('dashboard.layout.app')
@section('content')

<div class="content mt-3">

    <div class="animated fadeIn">

        <div>
            <form method="post">

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Make Request to Withdraw Your Investment!</strong>
                        </div>
                        <div class="card-body">
                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="defaultSelect">Investment Account To Debit</label>
                                                <select class="form-control form-control" id="Investment" data-val="true" data-val-required="The InvestmentId field is required." name="InvestmentId">
                                                    <option value="NA">Please Select an Investment</option>
                                                </select>
                                                <h6 id="PendingRequest" class="mt-3 pl-2 pr-2">
                                                    Pending Withdrawal Request: {{ $user->currency }} {{ $pending }}
                                                </h6>
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
                                                <input id="Amount" required="" placeholder="0.00" type="text" class="form-control cc-cvc" autocomplete="off" data-val="true" data-val-number="The field Amount must be a number." data-val-required="The Amount field is required." name="Amount" value="0">
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
                                                <select class="form-control form-control" id="Account" data-val="true" data-val-required="The Address field is required." name="Address">
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
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-4" formaction="/Identity/Account/Manage/WithdrawCapital?handler=Submit">
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
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8NV3tVJi9sJHojrQMtUBufzhBHFjhUZSPzHhbgdfJLxuuW-ePXb7K7PmKKdZnbcDZjcWI98v0zUAIDDVqFB4Dj-c1MtUtNySFMKMzwBY-jWZidXk8QoLPoh7FhbZFpoDItFMq50FrV46itTD1ta-0eaU5lNA6tNvgAG9ZXxSAm6P1IWgV6n3H-3E3TsB8ea9fw"></form>
        </div>
    </div>

</div>

@endsection
