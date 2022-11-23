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
                <form method="post" novalidate="novalidate">

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
                                                <h3 class="text-info mb-0">Investable Account Balance:  $&nbsp;0.00</h3>


                                            </div>
                                        </div>

                                        <hr class="mb-1">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="defaultSelect">Investment Plan</label>
                                                    <select onchange="this.form.submit();" class="form-control form-control" id="Plan" data-val="true" data-val-required="The Plan field is required." name="subscription_id">
                                                        <option value="NA">Please Select a Plan</option>
                                                        @foreach($plans as $item)
                                                        <option value="$item">
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
                                                        <input id="Status" class="form-check-input" type="checkbox" data-val="true" data-val-required="The Agree field is required." name="Input.Agree" value="true">
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
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-4" formaction="/Identity/Account/Manage/InvestFund?handler=Submit">
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
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JQxMnEQQTlLiu9BpVpQRCeY7B5bAyIzYhADl7Afchf7DvztekhPthI7MVkrjef5w3vRowWp7xid7Gm-IaWxTzW2OdU2C5oeT6mf3dVrXMaX-wz1JjDLW8apuVxQwtkHE4miyvr37UlGYx3DFRQIfc8d6Kcen3SX1ZsulrPi4yz4deMF09RWGMP4yHmiPA6rXQ"><input name="Input.Agree" type="hidden" value="false"></form>
            </div>
        </div>

    </div>
@endsection
