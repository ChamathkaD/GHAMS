@extends('layouts.app')
@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Change Password</a></li>
                </ol>
            </div>
        </div>
        <div class="login-form-bg h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-6">
                        <div class="form-input-content">

                            @if(session()->has('success'))
                                <div class="alert alert-primary alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button> <strong> {!! session()->get('success') !!}</strong> </div>
                            @endif

                            <div class="card login-form mb-0">
                                <div class="card-body pt-5">
                                    <a class="text-center" href="#"> <h4>Change Password</h4></a>

                                    <form class="mt-5 mb-5 login-input" action="{{ route('update.password') }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input
                                                type="password"
                                                class="form-control @error('current_password') is-invalid @enderror"
                                                placeholder="Current password"
                                            name="current_password"
                                                id="current_password"
                                            >
                                            @error('current_password')
                                            <small class="invalid-feedback">
                                                <i class="fas fa-exclamation-circle mr-2"></i>
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>


                                        <div class="form-group">
                                            <input
                                                type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="New Password"
                                                name="password"
                                                id="password"
                                            >
                                            @error('password')
                                            <small class="invalid-feedback">
                                                <i class="fas fa-exclamation-circle mr-2"></i>
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <input
                                                type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                placeholder="Re enter your new password"
                                                name="password_confirmation"
                                                id="password_confirmation"
                                            >
                                            @error('password_confirmation')
                                            <small class="invalid-feedback">
                                                <i class="fas fa-exclamation-circle mr-2"></i>
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>


                                        <button class="btn login-form__btn submit w-100" type="submit">Update Password</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
