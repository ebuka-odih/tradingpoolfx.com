@extends('dashboard.layout.app')
@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Change Password</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Manage Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="animated fadeIn">
            <div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Change Your Password!</strong>
                        </div>
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="change-password-form" method="post" action="{{ route('user.updateSecurity') }}" >
                                            @csrf
                                            <div class="text-danger validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
                                                </ul></div>
                                            <div class="form-group">
                                                <label for="Input_OldPassword">Current password</label>
                                                <input class="form-control" type="password" data-val="true" data-val-required="The Current password field is required." id="current_password" name="Input.OldPassword">
                                                <span class="text-danger field-validation-valid" data-valmsg-for="Input.OldPassword" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="Input_NewPassword">New password</label>
                                                <input class="form-control" type="password" data-val="true" data-val-length="The New password must be at least 6 and at max 100 characters long." data-val-length-max="100" data-val-length-min="6" data-val-required="The New password field is required." id="new_password" maxlength="100" name="Input.NewPassword">
                                                <span class="text-danger field-validation-valid" data-valmsg-for="Input.NewPassword" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="Input_ConfirmPassword">Confirm new password</label>
                                                <input class="form-control" type="password" data-val="true" data-val-equalto="The new password and confirmation password do not match." data-val-equalto-other="*.NewPassword" id="Input_ConfirmPassword" name="new_confirm_password">
                                                <span class="text-danger field-validation-valid" data-valmsg-for="Input.ConfirmPassword" data-valmsg-replace="true"></span>
                                            </div>
                                            <button type="submit" class="btn btn-info btn-block">Update password</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
