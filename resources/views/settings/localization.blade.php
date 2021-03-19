@extends('layouts.app')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('setting.index') }}">Settings</a></li>
                    <li class="breadcrumb-item active">Localization</li>
                </ol>
            </div>
        </div>


        <div class="col-lg-12">
            @include('aleart')
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Localization</h4>

                    <div class="basic-form">
                        <form role="form" action=" {{ route('setting.localization') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date Format</label>
                                <div class="col-sm-9">

                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="date_format">
                                        @foreach(\App\setting::dateFormats() as $dateFormat)
                                            <option {{ $dateFormat == $setting->date_format ? 'selected' : '' }} value="{{ $dateFormat}}" >{{ \Illuminate\Support\Carbon::now()->format($dateFormat) }}</option>
                                        @endforeach


                                    </select>


                                </div>



                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Time Format</label>
                                <div class="col-sm-9">

                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="time_format">

                                        @foreach( \App\setting::timeFormats() as $timeFormat)
                                        <option {{ $timeFormat == $setting->time_format ? 'selected' : '' }} value="{{ $timeFormat }}">{{ \Carbon\Carbon::now()->format($timeFormat) }}</option>
                                        @endforeach
                                    </select>


                                </div>



                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Timezone</label>
                                <div class="col-sm-9">

                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="timezone">
                                        @foreach(timezone_identifiers_list() as $timeZone)
                                            <option {{ $timeZone == $setting->timezone ? 'selected' : '' }} value="{{ $timeZone }}" > {{ $timeZone }}</option>
                                        @endforeach

                                    </select>
                                    <small>
                                        The Current Date & Time: February Saturday 27, 2021 - 2:00:43 PM
                                    </small>


                                </div>



                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Currency Code</label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="$"
                                        name="currency_code"
                                        value="{{ $setting->currency_code }}"
                                    >


                                </div>



                            </div>







                            <div style="margin-left: 300px">
                                <button type="submit" class="btn btn-dark mr-3">Save </button>
                                <a href="">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
