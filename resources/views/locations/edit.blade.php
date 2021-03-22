@extends('layouts.app')



@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>

                    <li class="breadcrumb-item active"><a href="{{ route('location.index') }}"> Location</a></li>
                    <li class="breadcrumb-item active">Edit Location</li>

                </ol>


            </div>
        </div>


        <div class="col-lg-12">
            @include('aleart')


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Locations</h4>
                    <div class="basic-form">
                        <form action="{{ route('location.update', $location->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Location Code</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Location Code"
                                        name="location_code"
                                        id="location_code"
                                        value="{{ $location->location_code }}"
                                    >
                                </div>



                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea
                                        type="text"
                                        class="form-control"
                                        name="description"
                                        id="description"
                                        placeholder="Description"
                                    >   {{ $location->description }} </textarea>
                                </div>



                            </div>



                            <button type="submit" class="btn btn-dark">Update Location</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection


