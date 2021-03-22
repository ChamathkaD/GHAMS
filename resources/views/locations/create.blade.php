@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>

                    <li class="breadcrumb-item active"><a href="{{ route('hospital.index') }}"> Hospitals</a></li>
                    <li class="breadcrumb-item active">Create Hospitals</li>

                </ol>


            </div>
        </div>


        <div class="col-lg-12">
            @include('aleart')


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Crate Locations</h4>
                    <div class="basic-form">
                        <form action="{{ route('location.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Location Code</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Location Code"
                                        name="location_code"
                                        id="location_code"
                                        value="{{ old('location_code') }}"
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
                                    >   {{ old('description') }} </textarea>
                                </div>



                            </div>



                            <button type="submit" class="btn btn-dark">Create Location</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

