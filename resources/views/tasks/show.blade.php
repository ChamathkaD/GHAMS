@extends('layouts.app')

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('task.index') }}">Tasks</a></li>
                    <li class="breadcrumb-item">Show</li>
                </ol>


            </div>
        </div>


        <div class="col-8 mt-5" style="margin-left: 180px">
            <div class="card card-widget">
                <div class="card-header">
                    <h2 class="mt-4 text-primary">{{ $task->type_code}}<span class="pull-right">

                               <form action="{{ route('task.destroy',$task->id) }}" method="post">
                                                        @csrf
                                   @method('DELETE')
                                                        <div class="general-button">

                                                            <button class="btn mb-1 btn-danger" type="submit">Delete</button>

 <a href="{{ route('task.edit',$task->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                        </div>
                                                    </form>




                        </span></h2>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4> Code </h4>
                                <h6 class="m-t-10 text-muted">{{ $task->type_code}}</h6>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4>Name</h4>
                                <h6 class="m-t-10 text-muted">{{ $task->description}} </h6>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-4">
                                <h4 >Service Life (years)</h4>
                                <h6 class="m-t-10 text-muted">{{ $task->service_life}}</h6>

                            </div>
                        </div>
                    </div>
                    <div class="mt-5 pull-right text-primary">
                        <small>
                            Registered At:{{ $task->created_at }}
                        </small>
                        <small class="ml-3">
                            Last Update:{{ $task->updated_at }}

                        </small>
                    </div>
                </div>
            </div>
        </div>




    </div>

    </div>

@endsection


