@extends('dashboard.layout.app')
@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Transaction History</h1>
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
                                <strong class="card-title">Deposits Transaction History</strong>
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
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Account Address: activate to sort column ascending" style="width: 320px;">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Currency: activate to sort column ascending" style="width: 195px;">Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 151px;">Currency</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 151px;">Sttus</th>
                                        <th style="width: 63px;" class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($deposits as $item)
                                        <tr class="odd">
                                            <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                            <td>{{ $item->user->currency }}{{ $item->amount }}</td>
                                            <td>{{ $item->payment_method->name }}</td>
                                            <td>{!! $item->status() !!}</td>
                                            @if($item->status == 0)
                                            <td><a href="{{ route('user.payment', $item->id) }}" class="btn btn-primary">Update</a></td>
                                            @endif
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




@endsection
