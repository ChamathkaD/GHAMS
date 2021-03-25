@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>

                    <li class="breadcrumb-item active"><a href="{{ route('manufacture.index') }}"> Manufacture</a></li>
                    <li class="breadcrumb-item active">Create Manufacture</li>

                </ol>


            </div>
        </div>


        <div class="col-lg-12">
            @include('aleart')


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5"> Crate Manufacture</h4>
                    <div class="basic-form">
                        <form action="{{ route('manufacture.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Manufacture Code</label>
                                    <input
                                        type="text"
                                        class="form-control @error('manufacture_code') is-invalid @enderror"
                                        placeholder="Manufacture Code"
                                        name="manufacture_code"
                                        id="manufacture_code"
                                        value="{{ old('manufacture_code') }}"
                                    >
                                    @error('manufacture_code')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Zip</label>
                                    <input
                                        type="text"
                                        class="form-control @error('zip') is-invalid @enderror"
                                        placeholder="Zip"
                                        name="zip"
                                        id="zip"
                                        value="{{ old('zip') }}"
                                    >
                                    @error('zip')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Manufacturer Name</label>
                                    <input
                                        type="text"
                                        class="form-control @error('manufacture_name') is-invalid @enderror"
                                        placeholder="Manufacturer Name"
                                        name="manufacture_name"
                                        id="manufacture_name"
                                        value="{{ old('manufacture_name') }}"
                                    >
                                    @error('manufacture_name')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Country</label>
                                    <input
                                        type="text"
                                        class="form-control @error('country') is-invalid @enderror"
                                        placeholder="Country"
                                        name="country"
                                        id="country"
                                        value="{{ old('country') }}"
                                    >
                                    @error('country')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Contact Person</label>
                                    <input
                                        type="text"
                                        class="form-control @error('contact_person') is-invalid @enderror"
                                        placeholder="Contact Person"
                                        name="contact_person"
                                        id="contact_person"
                                        value="{{ old('contact_person') }}"
                                    >
                                    @error('contact_person')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input
                                        type="text"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Phone"
                                        name="phone"
                                        id="phone"
                                        value="{{ old('phone') }}"
                                    >
                                    @error('phone')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Address</label>
                                    <input
                                        type="text"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder="Address"
                                        name="address"
                                        id="address"
                                        value="{{ old('address') }}"
                                    >
                                    @error('address')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Fax</label>
                                    <input
                                        type="text"
                                        class="form-control @error('fax') is-invalid @enderror"
                                        placeholder="Fax"
                                        name="fax"
                                        id="fax"
                                        value="{{ old('fax') }}"
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
                                    <label>City</label>
                                    <input
                                        type="text"
                                        class="form-control @error('city') is-invalid @enderror"
                                        placeholder="City"
                                        name="city"
                                        id="city"
                                        value="{{ old('city') }}"
                                    >
                                    @error('city')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input
                                        type="text"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email"
                                        name="email"
                                        id="email"
                                        value="{{ old('email') }}"
                                    >
                                    @error('email')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>State/Province</label>
                                    <input
                                        type="text"
                                        class="form-control @error('state') is-invalid @enderror"
                                        placeholder="State/Province"
                                        name="state"
                                        id="state"
                                        value="{{ old('state') }}"
                                    >
                                    @error('state')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>





                            <button type="submit" class="btn btn-dark">Create Manufacture</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

