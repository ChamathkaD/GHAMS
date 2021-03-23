@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>

                    <li class="breadcrumb-item active"><a href="{{ route('department.index') }}"> Departments</a></li>
                    <li class="breadcrumb-item active">Create Departments</li>

                </ol>


            </div>
        </div>


        <div class="col-lg-12">
            @include('aleart')


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Crate Departments</h4>
                    <div class="basic-form">
                        <form action="{{ route('department.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Department Code</label>
                                    <input
                                        type="text"
                                        class="form-control @error('department_code') is-invalid @enderror"
                                        placeholder="Department Code"
                                        name="department_code"
                                        id="department_code"
                                        value="{{ old('department_code') }}"
                                    >
                                    @error('department_code')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>



                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea
                                        type="text"
                                        class="form-control @error('description') is-invalid @enderror"
                                        name="description"
                                        id="description"
                                        placeholder="Description"
                                    >   {{ old('description') }}

                                    </textarea>
                                    @error('description')
                                    <small class="invalid-feedback">
                                        {{ $message }}
                                    </small>
                                    @enderror

                                </div>



                            </div>



                            <button type="submit" class="btn btn-dark">Create Department</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

