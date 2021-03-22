@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>

                    <li class="breadcrumb-item active"><a href="{{ route('hospital.index') }}"> Hospital</a></li>
                    <li class="breadcrumb-item active">Update Hospital</li>

                </ol>


            </div>
        </div>


        <div class="col-lg-12">
            @include('aleart')


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Update hospital</h4>
                    <div class="basic-form">
                        <form action="{{ route('hospital.update',$hospital->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Hospital Code</label>
                                    <input
                                        type="text"
                                        class="form-control @error('hospital_code') is-invalid @enderror"
                                        placeholder="Hospital Code"
                                        name="hospital_code"
                                        id="hospital_code"
                                        value="{{$hospital->hospital_code}}"
                                    >
                                    @error('hospital_code')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Hospital Name</label>
                                    <input
                                        type="text"
                                        class="form-control @error('hospital_name') is-invalid @enderror"
                                        placeholder="Hospital Name"
                                        name="hospital_name"
                                        id="hospital_name"
                                        value=" {{$hospital->hospital_name}} "
                                    >
                                    @error('hospital_name')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Region</label>
                                    <input
                                        type="text"
                                        class="form-control @error('region') is-invalid @enderror"
                                        placeholder="Region"
                                        name="region"
                                        id="region"
                                        value="{{ $hospital->region}}"
                                    >
                                    @error('region')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Address</label>
                                    <input
                                        type="text"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder="Address"
                                        name="address"
                                        id="address"
                                        value="{{$hospital->address}}"
                                    >
                                    @error('address')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Telephone</label>
                                    <input
                                        type="text"
                                        class="form-control @error('telephone') is-invalid @enderror"
                                        placeholder="Telephone"
                                        name="telephone"
                                        id="telephone"
                                        value="{{$hospital->telephone }}"
                                    >
                                    @error('telephone')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>
                                        Fax
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error('fax') is-invalid @enderror"
                                        placeholder="
Fax"
                                        name="fax"
                                        id="fax"
                                        value="{{ $hospital->fax}}"
                                    >

                                    @error('fax')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input
                                        type="text"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email"
                                        name="email"
                                        id="email"
                                        value="{{$hospital->email }}"
                                    >

                                    @error('email')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>WO Prefix</label>
                                    <input
                                        type="text"
                                        class="form-control @error('wo_prefix') is-invalid @enderror"
                                        placeholder="WO Prefix"
                                        name="wo_prefix"
                                        id="wo_prefix"
                                        value="{{ $hospital->wo_prefix}}"
                                    >
                                    @error('wo_prefix')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>WOCM SL NO</label>
                                    <input
                                        type="text"
                                        class="form-control @error('wocm_sl_no') is-invalid @enderror"
                                        placeholder="WOCM SL NO"
                                        name="wocm_sl_no"
                                        id="wocm_sl_no"
                                        value="{{ $hospital->wocm_sl_no}}"
                                    >
                                    @error('wocm_sl_no')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>WOPM SL NO</label>
                                    <input
                                        type="text"
                                        class="form-control @error('wopm_sl_no') is-invalid @enderror"
                                        placeholder="WOPM SL NO"
                                        name="wopm_sl_no"
                                        id="wopm_sl_no"
                                        value="{{ $hospital->wopm_sl_no }}"
                                    >
                                    @error('wopm_sl_no')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Hospital code Prefix</label>
                                    <input
                                        type="text"
                                        class="form-control @error('hospital_code_prefix') is-invalid @enderror"
                                        placeholder="Hospital code Prefix"
                                        name="hospital_code_prefix"
                                        id="hospital_code_prefix"
                                        value="{{ $hospital->hospital_code_prefix }}"
                                    >
                                    @error('hospital_code_prefix')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>




                            <button type="submit" class="btn btn-dark">UpdateHospital</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

