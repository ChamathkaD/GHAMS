@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>

                    <li class="breadcrumb-item active"><a href="{{ route('vendor.index') }}"> Vendor</a></li>
                    <li class="breadcrumb-item active">Edit Vendor</li>

                </ol>


            </div>
        </div>


        <div class="col-lg-12">
            @include('aleart')


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5"> Edit Vendor</h4>
                    <div class="basic-form">
                        <form action="{{ route('vendor.update', $vendor->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Vendor Code</label>
                                    <input
                                        type="text"
                                        class="form-control @error('vendor_code') is-invalid @enderror"
                                        placeholder="Vendor Code"
                                        name="vendor_code"
                                        id="vendor_code"
                                        value="{{ $vendor->vendor_code }}"
                                    >
                                    @error('vendor_code')
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
                                        value="{{ $vendor->zip }}"
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
                                    <label>Supplier Name</label>
                                    <input
                                        type="text"
                                        class="form-control @error('supplier_name') is-invalid @enderror"
                                        placeholder="Supplier Name"
                                        name="supplier_name"
                                        id="supplier_name"
                                        value="{{ $vendor->supplier_name }}"
                                    >
                                    @error('supplier_name')
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
                                        value="{{ $vendor->country }}"
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
                                        value="{{ $vendor->contact_person}}"
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
                                        value="{{ $vendor->phone }}"
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
                                        value="{{ $vendor->address}}"
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
                                        value="{{ $vendor->fax }}"
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
                                        value="{{ $vendor->city }}"
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
                                        value="{{ $vendor->email}}"
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
                                        value="{{ $vendor->state }}"
                                    >
                                    @error('state')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>





                            <button type="submit" class="btn btn-dark">Update Vendor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

