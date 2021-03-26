@extends('layouts.app')

@push('css')
    <link href="{{ asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('hospital.index') }}"> Hospitals</a></li>
                    @if(request()->tasks == 'deleted')
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Deleted Tasks</a></li>
                    @else
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"> Tasks</a></li>

                    @endif
                </ol>
            </div>
        </div>



        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('aleart')

                    <div class="card">
                        <div class="card-body">

                            @if(request()->tasks == 'deleted')
                                <h4 class="card-title">Deleted Tasks</h4>
                            @else
                                <h4 class="card-title">Tasks</h4>
                            @endif

                            <div>

                                @if(request()->tasks == 'deleted')
                                    <a href="{{ route('task.index') }}"  class="btn mb-1 btn-primary">Tasks <span class="btn-icon-right"><i class="icon-grid"></i></span></a>
                                @else
                                    <a href="{{ route('task.index', ['tasks'=>'deleted'] )}}"  class="btn mb-1 btn-danger">Deleted Tasks <span class="btn-icon-right"><i class="icon-trash"></i></span></a>
                                @endif


                                <a href="{{ route('task.create') }}"  class="btn mb-1 btn-success">Crate Tasks <span class="btn-icon-right"><i class="icon-plus"></i></span></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>type_code </th>
                                        <th>description </th>
                                        <th>service_life years </th>
                                        <th>pdf</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td>{{ $task->type_code }}</td>
                                            <td>{{ $task->description }}</td>
                                            <td>{{ $task->service_life }}</td>
                                            <td>{{ $task->pdf }}</td>


                                            <td>
                                                @if(request()->tasks == 'deleted')


                                                    <a href="{{ route('task.restore',$task->id) }}"  class="btn mb-1 btn-success">Restore</a>
                                                    <a href="{{ route('task.forceDelete',$task->id) }}"  class="btn mb-1 btn-danger" >Delete</a>

                                                @else


                                                    <form action="{{ route('task.destroy',$task->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="general-button">

                                                            <a href="{{ route('task.edit',$task->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                            <a href="{{ route('task.show',$task->id) }}"  class="btn mb-1 btn-success">Show</a>

                                                            <button class="btn mb-1 btn-danger" type="submit" onsubmit="return confirm('Are You Sure to Delete Your Contractor?')">Delete</button>


                                                        </div>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('js')
    <script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

@endpush
