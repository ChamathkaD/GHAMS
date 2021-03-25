@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('manufacture.index') }}">Manufactures</a></li>
                    <li class="breadcrumb-item">Show</li>
                </ol>


            </div>
        </div>


        <div class="col-8 mt-5" style="margin-left: 180px">
            <div class="card card-widget">
                <div class="card-header">
                    <h2 class="mt-4 text-primary">{{ $manufacture->manufacture_code}}<span class="pull-right">

                               <form action="{{ route('manufacture.destroy',$manufacture->id) }}" method="post">
                                                        @csrf
                                   @method('DELETE')
                                                        <div class="general-button">

                                                            <button class="btn mb-1 btn-danger" type="submit">Delete</button>

 <a href="{{ route('manufacture.edit',$manufacture->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                        </div>
                                                    </form>




                        </span></h2>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>manufacture_code </h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->manufacture_code}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>zip </h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->zip}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> supplier_name</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->manufacture_name}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>country</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->country}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> contact_person</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->contact_person}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>phone</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->phone}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> address</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->address}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>fax</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->fax}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> city</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->city}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>email</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->email}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> state</h4>
                                <h6 class="m-t-10 text-muted">{{ $manufacture->state}}</h6>

                            </div>
                        </div>


                    </div>



                    <div class="mt-5 pull-right text-primary">
                        <small>
                            Registered At:{{ $manufacture->created_at }}
                        </small>
                        <small class="ml-3">
                            Last Update:{{ $manufacture->updated_at }}

                        </small>
                    </div>

                </div>
            </div>
        </div>




    </div>

    </div>

@endsection


