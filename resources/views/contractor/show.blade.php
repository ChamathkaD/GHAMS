@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('contractor.index') }}">Create Contractor</a></li>
                    <li class="breadcrumb-item">Show</li>
                </ol>


            </div>
        </div>


        <div class="col-8 mt-5" style="margin-left: 180px">
            <div class="card card-widget">
                <div class="card-header">
                    <h2 class="mt-4 text-primary">{{ $contractor->contractor_no}}<span class="pull-right">

                               <form action="{{ route('contractor.destroy',$contractor->id) }}" method="post">
                                                        @csrf
                                   @method('DELETE')
                                                        <div class="general-button">

                                                            <button class="btn mb-1 btn-danger" type="submit" onsubmit="return confirm('Are You Sure to Delete Your Contractor?')">Delete</button>

 <a href="{{ route('contractor.edit',$contractor->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                        </div>
                                                    </form>




                        </span></h2>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4 >Reference Code</h4>
                                <h6 class="m-t-10 text-muted">{{ $contractor->reference_code}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Start Date</h4>
                                <h6 class="m-t-10 text-muted">{{ $contractor->start_date}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Contractor No</h4>
                                <h6 class="m-t-10 text-muted">{{ $contractor->contractor_no}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>End Date</h4>
                                <h6 class="m-t-10 text-muted">{{ $contractor->end_date}}</h6>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>CContractor Name</h4>
                                <h6 class="m-t-10 text-muted">{{ $contractor->contractor_name}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Type</h4>
                                <h6 class="m-t-10 text-muted">{{ $contractor->type }}</h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Contractor Value</h4>
                                <h6 class="m-t-10 text-muted">{{ $contractor->contractor_value}}</h6>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>




    </div>

    </div>

@endsection


