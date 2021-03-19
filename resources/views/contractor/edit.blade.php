@extends('layouts.app')

@push('css')
    <link href="{{ asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
          rel="stylesheet">
@endpush

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('contractor.index') }}"> Contractors</a></li>
                    <li class="breadcrumb-item">Edit</li>
                </ol>


            </div>
        </div>


        <div class="col-lg-12">
           @include('aleart')


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Edit Contractor</h4>
                    <div class="basic-form">
                        <form action="{{ route('contractor.update',$contractor->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Reference Code</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Reference Code"
                                        name="reference_code"
                                        id="reference_code"
                                        value="{{ $contractor->reference_code}}"
                                    >
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="m-t-20">Start Date</label>
                                    <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="mdate1" name="start_date"  value="{{ $contractor->start_date}}">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Contractor No</label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder="Contractor No"
                                           name="contractor_no"
                                           value="{{ $contractor->contractor_no}}"

                                    >
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="m-t-20">End Date</label>
                                    <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="mdate2" name="end_date" value="{{ $contractor->end_date}}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Contractor Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Contractor Name"
                                        name="contractor_name"
                                        value="{{ $contractor->contractor_name}}"
                                    >
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="mr-sm-2">Type</label>

                                    <select class="form-control" name="type">
                                        value="{{ $contractor->type }}"

                                        <option>Project Contractor</option>
                                        <option>Full Time Contractor</option>
                                        <option>Parmanent Contactor</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Contractor Value</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Contractor Value"
                                        name="contractor_value"
                                        value="{{ $contractor->contractor_value}}"

                                    >
                                </div>

                            </div>


                            <button type="submit" class="btn btn-dark">Update Contractor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

@push('js')
    <script src="{{ asset('plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/plugins-init/form-pickers-init.js') }}"></script>
@endpush

