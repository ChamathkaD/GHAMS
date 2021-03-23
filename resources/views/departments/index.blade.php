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
                    <li class="breadcrumb-item active"><a href="{{ route('department.index') }}"> Departments</a></li>
                    @if(request()->departments == 'deleted')
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Deleted Departments</a></li>
                    @else
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Departments</a></li>
                    @endif


                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('aleart')

                    <div class="card">
                        <div class="card-body">

                            @if(request()->departments == 'deleted')
                                <h4 class="card-title">Deleted Departments</h4>
                            @else
                                <h4 class="card-title">Departments</h4>
                            @endif


                            <div>
                                @if(request()->departments == 'deleted')
                                    <a href="{{ route('department.index') }}"  class="btn mb-1 btn-primary"> Departments <span class="btn-icon-right"> <i class="icon-department-pin menu-icon"></i></span></a>
                                @else
                                    <a href="{{ route('department.index',['departments'=>'deleted']) }}"   class="btn mb-1 btn-danger"> Deleted Departments <span class="btn-icon-right"><i class="icon-trash"></i></span></a>
                                @endif

                                <a href="{{ route('department.create') }}"  class="btn mb-1 btn-success">Crate Departments <span class="btn-icon-right"><i class="icon-plus"></i></span></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Department Code</th>
                                        <th>Description </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($departments as $department)
                                        <tr>
                                            <td>{{ $department->department_code }}</td>
                                            <td>{{ $department->description }}</td>

                                            <td>
                                                @if(request()->departments == 'deleted')


                                                    <a href="{{ route('department.restore',$department->id) }}"  class="btn mb-1 btn-success">Restore</a>
                                                    <a href="{{ route('department.forceDelete',$department->id) }}"  class="btn mb-1 btn-danger" >Delete</a>

                                                @else


                                                    <form action="{{ route('department.destroy',$department->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="general-button">

                                                            <a href="{{ route('department.edit',$department->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                            <a href="{{ route('department.show',$department->id) }}"  class="btn mb-1 btn-success">Show</a>

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
        <!-- #/ container -->
    </div>

@endsection

@push('js')
    <script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

@endpush
