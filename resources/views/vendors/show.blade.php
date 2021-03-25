@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('vendor.index') }}">Vendors</a></li>
                    <li class="breadcrumb-item">Show</li>
                </ol>


            </div>
        </div>


        <div class="col-8 mt-5" style="margin-left: 180px">
            <div class="card card-widget">
                <div class="card-header">
                    <h2 class="mt-4 text-primary">{{ $vendor->vendor_code}}<span class="pull-right">

                               <form action="{{ route('vendor.destroy',$vendor->id) }}" method="post">
                                                        @csrf
                                   @method('DELETE')
                                                        <div class="general-button">

                                                            <button class="btn mb-1 btn-danger" type="submit">Delete</button>

 <a href="{{ route('vendor.edit',$vendor->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                        </div>
                                                    </form>




                        </span></h2>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>vendor_code </h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->vendor_code}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>zip </h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->zip}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> supplier_name</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->supplier_name}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>country</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->country}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> contact_person</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->contact_person}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>phone</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->phone}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> address</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->address}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>fax</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->fax}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> city</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->city}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>email</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->email}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> state</h4>
                                <h6 class="m-t-10 text-muted">{{ $vendor->state}}</h6>

                            </div>
                        </div>


                    </div>



                    <div class="mt-5 pull-right text-primary">
                        <small>
                            Registered At:{{ $vendor->created_at }}
                        </small>
                        <small class="ml-3">
                            Last Update:{{ $vendor->updated_at }}

                        </small>
                    </div>

                </div>
            </div>
        </div>




    </div>

    </div>

@endsection


