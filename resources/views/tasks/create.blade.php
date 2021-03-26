@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>

                    <li class="breadcrumb-item active"><a href="{{ route('task.index') }}"> Tasks</a></li>
                    <li class="breadcrumb-item active">Create Tasks</li>

                </ol>


            </div>
        </div>


        <div class="col-lg-12">
            @include('aleart')


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Crate Tasks</h4>
                    <div class="basic-form">
                        <form action="{{ route('task.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Task Code</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Task Code"
                                        name="type_code"
                                        id="type_code"
                                        value="{{ old('type_code') }}"
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

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Service Life</label>
                                    <div class="input-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Service Life"
                                        name="service_life"
                                        id="service_life"
                                        value="{{ old('service_life') }}"
                                    >

                                        <div class="input-group-append"><span class="input-group-text">Years</span>
                                        </div>
                                    </div>
                                </div>

                           </div>


                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Upload Checklist PDF</label>

                            <div class="basic-form">
                                <div class="form-group">
                                    <input type="file"
                                           class="form-control-file"
                                           name="pdf"
                                    >
                                    <small>
                                        Accepted filetype only pdf. Max upload size allowed is 1024MB
                                    </small>
                                </div>

                            </div>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-dark">Create Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

