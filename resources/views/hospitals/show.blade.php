@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('hospital.index') }}">Locations</a></li>
                    <li class="breadcrumb-item">Show</li>
                </ol>


            </div>
        </div>


        <div class="col-8 mt-5" style="margin-left: 180px">
            <div class="card card-widget">
                <div class="card-header">
                    <h2 class="mt-4 text-primary">{{ $hospital->hospital_code}}<span class="pull-right">

                               <form action="{{ route('hospital.destroy',$hospital->id) }}" method="post">
                                                        @csrf
                                   @method('DELETE')
                                                        <div class="general-button">

                                                            <button class="btn mb-1 btn-danger" type="submit">Delete</button>

 <a href="{{ route('hospital.edit',$hospital->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                        </div>
                                                    </form>




                        </span></h2>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> Code </h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->hospital_code}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Name</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->hospital_name}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4 >Region </h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->region}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Address</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->address}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4 >Phone</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->telephone}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Fax</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->fax}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4 >Email</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->email}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>WO Prefix</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->wo_prefix}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4 >WOCM SL No</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->wocm_sl_no}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>WOPM SL No</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->wopm_sl_no}} </h6>

                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Hospital Code Prefix</h4>
                                <h6 class="m-t-10 text-muted">{{ $hospital->hospital_code_prefix}} </h6>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>




    </div>

    </div>

@endsection


