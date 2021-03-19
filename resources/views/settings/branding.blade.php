@extends('layouts.app')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('setting.index') }}">Settings</a></li>
                    <li class="breadcrumb-item active">Branding</li>
                </ol>
            </div>
        </div>


        <div class="col-lg-12">
          @include('aleart')
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Branding</h4>

                    <div class="basic-form">
                        <form role="form" action="{{ route('setting.branding')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Site Full Name</label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Site Full Name"
                                        name="site_full_name"
                                        id="site_full_name"
                                        value="{{$setting->site_full_name}}"
                                    >

                                    <small>
                                        This text will appear in the login screen.
                                    </small>
                                </div>


                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Site Short Name</label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Site Short Name"
                                        id="site_short_name"
                                        name="site_short_name"
                                        value="{{$setting->site_short_name}}"
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Login Background</label>

                                @if($setting->login_background)
                                <div class="col-sm-1">
                                    <img src="{{ asset('img/login_background/'.$setting->login_background)}}" alt=""
                                         width="80" height="80">
                                </div>

                                @endif

                                <div class="col-sm-8 ">

                                    <div class="basic-form">

                                        <div class="form-group">

                                            <input type="file" class="form-control-file" name="login_background">
                                            <small>This image will appear in the login screen. Accepted filetypes
                                                are jpg, png, gif, and svg. Max upload size allowed is
                                                20MB. </small>
                                            @if($setting->login_background)
                                                <div>
                                                    <label class="form-check-label ml-4">
                                                        <input type="checkbox" class="form-check-input" value="1" name="remove_login_background">Remove
                                                        current login background</label>
                                                </div>
                                            @endif

                                        </div>


                                    </div>
                                </div>


                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Logo</label>

                                @if($setting->logo)
                                <div class="col-sm-1">
                                    <img src="{{ asset('img/logo/'.$setting->logo)}}" alt=""
                                         width="80" height="80">
                                </div>

                                @endif

                                <div class="col-sm-8 ">

                                    <div class="basic-form">

                                        <div class="form-group">

                                            <input type="file" class="form-control-file" name="logo">
                                            <small>This image will appear in the login screen. Accepted filetypes
                                                are jpg, png, gif, and svg. Max upload size allowed is
                                                20MB. </small>
                                            @if($setting->logo)
                                                <div>
                                                    <label class="form-check-label ml-4">
                                                        <input type="checkbox" class="form-check-input" value="1" name="remove_logo">Remove
                                                        current logo</label>
                                                </div>
                                            @endif

                                        </div>


                                    </div>
                                </div>


                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Favicon</label>

                                @if($setting->favicon)
                                <div class="col-sm-1">
                                    <img src="{{ asset('img/favicon/'.$setting->favicon)}}" alt=""
                                         width="80" height="80">
                                </div>

                                @endif

                                <div class="col-sm-8 ">

                                    <div class="basic-form">

                                        <div class="form-group">

                                            <input type="file" class="form-control-file" name="favicon">
                                            <small>This image will appear in the login screen. Accepted filetypes
                                                are jpg, png, gif, and svg. Max upload size allowed is
                                                20MB. </small>
                                            @if($setting->favicon)
                                                <div>
                                                    <label class="form-check-label ml-4">
                                                        <input type="checkbox" class="form-check-input" value="1" name="remove_favicon">Remove
                                                        current favicon</label>
                                                </div>
                                            @endif

                                        </div>


                                    </div>
                                </div>


                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Footer Text</label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Footer Text"
                                        id="footer_text"
                                        name="footer_text"
                                        value="{{$setting->footer_text}}"
                                    >
                                </div>
                            </div>




                            <div style="margin-left: 300px">
                                <button type="submit" class="btn btn-dark mr-3">Save</button>
                                <a href="">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
