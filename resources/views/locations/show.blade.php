@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('location.index') }}">Locations</a></li>
                    <li class="breadcrumb-item">Show</li>
                </ol>


            </div>
        </div>


        <div class="col-8 mt-5" style="margin-left: 180px">
            <div class="card card-widget">
                <div class="card-header">
                    <h2 class="mt-4 text-primary">{{ $location->location_code}}<span class="pull-right">

                               <form action="{{ route('location.destroy',$location->id) }}" method="post">
                                                        @csrf
                                   @method('DELETE')
                                                        <div class="general-button">

                                                            <button class="btn mb-1 btn-danger" type="submit">Delete</button>

 <a href="{{ route('location.edit',$location->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                        </div>
                                                    </form>




                        </span></h2>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4 >Location Code</h4>
                                <h6 class="m-t-10 text-muted">{{ $location->location_code}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Description</h4>
                                <h6 class="m-t-10 text-muted">{{ $location->description}} </h6>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>




    </div>

    </div>

@endsection


