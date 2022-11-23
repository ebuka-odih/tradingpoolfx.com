@extends('dashboard.layout.app')
@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>My Crypto Accounts</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Accounts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <strong class="card-title">Manage Crypto Accounts</strong>
                            </div>
                            <div class="float-right">
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add New Account
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">


                                </div>
                            </div>
                            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif

                                    <table id="" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Account Address: activate to sort column ascending" style="width: 320px;">Account Address</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Currency: activate to sort column ascending" style="width: 195px;">Currency</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 151px;">Status</th>
                                            <th style="width: 63px;" class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($wallets as $item)
                                        <tr class="odd">
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->currency }}</td>
                                            <td>{!! $item->status() !!}</td>
                                            <td><a href="" class="btn btn-primary">Update Status</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>

    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Manage
                    </span>
                        <span class="fw-light">
                        Crypto Accounts
                    </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="{{ route('user.account.store') }}" novalidate="novalidate">
                    @csrf
                    <div class="modal-body">
                        <p class="small">Create or edit crypto accounts using this form, please ensure to fill out all fields</p>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label for="Address">Account Address</label>
                                    <input required="" id="Address" type="text" class="form-control" placeholder="Account Address" data-val="true" data-val-required="The Address field is required." name="address" value="">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Address" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group form-group-default">
                                    <label for="Types">Currency</label>
                                    <input id="Types" required="" type="text" class="form-control" placeholder="Currency" data-val="true" data-val-required="The Types field is required." name="currency" value="">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Types" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group form-group-default">
                                    <label for="IsActive">Status</label>
                                    <select id="IsActive" required="" class="form-control" placeholder="IsActive" data-val="true" data-val-required="The IsActive field is required." name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Non Active</option>
                                    </select>
                                    <span class="text-danger field-validation-valid" data-valmsg-for="IsActive" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer no-bd">
                        <button type="submit" class="btn btn-primary">Save Details</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8DT1a3CTqnpCgig_T_wqfVk9Nka5_h_MDXhV7I75sTgd4RMRRcl3PoJGsu_2DmYL7bMk-J2hwdt4IYURnxPlZkvbwKtNwoVxMCmlqjQrruX7HxHSluGKo8eYdsUSaqG49SgsmXminOCokCXKiANaFnjKzOrem5O36X3Rd8D7-VoNBlrgYgAArSHsqBegNlMb-g"></form>
            </div>
        </div>
    </div>




@endsection
