@extends('dashboard.layout.app')
@section('content')

    <div id="right-panel" class="right-panel">


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Make Payment</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Make Payment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">

            <div class="animated fadeIn">

                <div>
                    <form method="post" action="{{ route('user.processPayment') }}" enctype="multipart/form-data" novalidate="novalidate">

                    @csrf
                        @method('PATCH')
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ session()->get('success') }}
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
                        <div class="col-lg-12">
                            <div class="card">

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
                                                    <div class="visible-print text-center">
                                                        {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                                    </div>
                                                    <label for="x_card_code" class="control-label mb-1 mt-3">{{ $deposit->payment_method->name }} Wallet Address</label>
                                                    <div class="input-group">
                                                        <input id="Amount" required="" placeholder="0.00" type="text" class="form-control cc-cvc" value="{{ $deposit->payment_method->value }}">
                                                        <div class="input-group-addon">
                                                            <a href="#" class="btn" data-clipboard-target="#Amount">Copy</a>
{{--                                                            <span data-toggle="popover" data-container="body" data-html="true"  data-content="<div class='text-center one-card'>Amount<div class='visa-mc-cvc-preview'></div></div>"  data-clipboard-target="#foo" data-trigger="hover">$</span>--}}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="Proof" class="mt-3">Proof of Payment</label>
                                                    <div class="input-group">
                                                        <input onchange="ValidateImageExt(this);" required="" type="file" class="form-control btn-block" id="Proof" data-val="true" data-val-required="The Proof field is required." name="reference">
                                                    </div>
                                                    <span class="text-danger field-validation-valid" data-valmsg-for="Proof" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-4">
                                                            <i class="fa fa-database fa-lg"></i>&nbsp;
                                                            <span id="payment-button-amount">Paid</span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
    </script>

@endsection
