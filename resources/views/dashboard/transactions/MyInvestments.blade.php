@extends('dashboard.layout.app')
@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>My Investments</h1>
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
                                <strong class="card-title">My Investments History</strong>
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
                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Plan&amp;nbsp;Amount: activate to sort column descending" style="width: 176px;">Plan&nbsp;Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Investment&amp;nbsp;Date: activate to sort column ascending" style="width: 219px;">Investment&nbsp;Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Maturity: activate to sort column ascending" style="width: 125px;">Maturity</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Duration (Days): activate to sort column ascending" style="width: 211px;">Duration (Days)</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 101px;">Status</th>
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
