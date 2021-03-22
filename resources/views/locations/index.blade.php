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
                    <li class="breadcrumb-item active"><a href="{{ route('location.index') }}"> Locations</a></li>
                    @if(request()->locations == 'deleted')
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Deleted Locations</a></li>
                    @else
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Locations</a></li>
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

                            @if(request()->locations == 'deleted')
                                <h4 class="card-title">Deleted Locations</h4>
                            @else
                                <h4 class="card-title">Locations</h4>
                            @endif


                            <div>
                                @if(request()->locations == 'deleted')
                                    <a href="{{ route('location.index') }}"  class="btn mb-1 btn-primary"> Locations <span class="btn-icon-right"> <i class="icon-location-pin menu-icon"></i></span></a>
                                @else
                                    <a href="{{ route('location.index',['locations'=>'deleted']) }}"   class="btn mb-1 btn-danger"> Deleted Locations <span class="btn-icon-right"><i class="icon-trash"></i></span></a>
                                @endif

                                <a href="{{ route('location.create') }}"  class="btn mb-1 btn-success">Crate Locations <span class="btn-icon-right"><i class="icon-plus"></i></span></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Reference Code</th>
                                        <th>Contractor No </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($locations as $location)
                                        <tr>
                                            <td>{{ $location->location_code }}</td>
                                            <td>{{ $location->description }}</td>

                                            <td>
                                                @if(request()->locations == 'deleted')


                                                    <a href="{{ route('location.restore',$location->id) }}"  class="btn mb-1 btn-success">Restore</a>
                                                    <a href="{{ route('location.forceDelete',$location->id) }}"  class="btn mb-1 btn-danger" >Delete</a>

                                                @else


                                                    <form action="{{ route('location.destroy',$location->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="general-button">

                                                            <a href="{{ route('location.edit',$location->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                            <a href="{{ route('location.show',$location->id) }}"  class="btn mb-1 btn-success">Show</a>

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
