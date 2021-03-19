@extends('layouts.app')
@section('content')

    <div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>
    </div>
</div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="display-5"><i class="icon-settings gradient-9-text"></i></span>
                                <h2 class="mt-3">General</h2>
                                <p>Default EULA and more</p>
                                <a href="javascript:void(0)" class="btn gradient-9 btn-lg border-0 btn-rounded px-5">Click</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="display-5"><i class="icon-layers gradient-9-text"></i></span>
                                <h2 class="mt-3"> Branding</h2>
                                <p>Losu,Site Name</p><a href="{{ route('setting.branding') }}" class="btn gradient-9 btn-lg border-0 btn-rounded px-5">Click</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="display-5"><i class="icon-lock gradient-9-text"></i></span>
                                <h2 class="mt-3">Security </h2>
                                <p>Two-factor,Password</p><a href="javascript:void(0)" class="btn gradient-9 btn-lg border-0 btn-rounded px-5">Click</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="display-5"><i class="icon-globe gradient-9-text"></i></span>
                                <h2 class="mt-3"> Localization</h2>
                                <p>Two-factor,Password</p><a href="{{ route('setting.localization') }}" class="btn gradient-9 btn-lg border-0 btn-rounded px-5">Click</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection

