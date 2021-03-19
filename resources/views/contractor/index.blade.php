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
                    <li class="breadcrumb-item active"><a href="{{ route('contractor.index') }}"> Contractors</a></li>
                    @if(request()->contractors == 'deleted')
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Deleted Contractors</a></li>
                    @else
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Contractors</a></li>
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

                            @if(request()->contractors == 'deleted')
                                <h4 class="card-title">Deleted Contractors</h4>
                            @else
                            <h4 class="card-title">Contractors</h4>
                            @endif


                            <div>
                                @if(request()->contractors == 'deleted')
                                    <a href="{{ route('contractor.index') }}"  class="btn mb-1 btn-primary"> Contracts <span class="btn-icon-right"> <i class="icon-globe-alt menu-icon"></i></span></a>
                                @else
                                    <a href="{{ route('contractor.index',['contractors'=>'deleted']) }}"   class="btn mb-1 btn-danger"> Deleted Contracts <span class="btn-icon-right"><i class="fa fa-close"></i></span></a>
                                @endif

                                <a href="{{ route('contractor.create') }}"  class="btn mb-1 btn-success">Crate Contracts <span class="btn-icon-right"><i class="fa fa-check"></i></span></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Reference Code</th>
                                        <th>Contractor No </th>
                                        <th>Name </th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Type </th>
                                        <th>Value </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contractors as $contractor)
                                        <tr>
                                            <td>{{ $contractor->reference_code }}</td>
                                            <td>{{ $contractor->contractor_no }}</td>
                                            <td>{{ $contractor->contractor_name }}</td>
                                            <td>{{ $contractor->start_date }}</td>
                                            <td>{{ $contractor->end_date }}</td>
                                            <td>{{ $contractor->type }}</td>
                                            <td>{{ $contractor->contractor_value }}</td>
                                            <td>
                                                @if(request()->contractors == 'deleted')


                                                    <a href="{{ route('contractor.restore',$contractor->id) }}"  class="btn mb-1 btn-success">Restore</a>
                                                    <a href="{{ route('contractor.forceDelete',$contractor->id) }}"  class="btn mb-1 btn-danger" onsubmit="return confirm('Are You Sure to Delete Your Contractor?')">Delete</a>

                                                @else


                                                    <form action="{{ route('contractor.destroy',$contractor->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="general-button">

                                                            <a href="{{ route('contractor.edit',$contractor->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                            <a href="{{ route('contractor.show',$contractor->id) }}"  class="btn mb-1 btn-success">Show</a>

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
