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
                    @if(request()->hospitals == 'deleted')
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Deleted Hospitals</a></li>
                    @else
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Hospitals</a></li>
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

                            @if(request()->hospitals == 'deleted')
                                <h4 class="card-title">Deleted Hospitals</h4>
                            @else
                                <h4 class="card-title">Hospitals</h4>
                            @endif


                            <div>
                                @if(request()->hospitals == 'deleted')
                                    <a href="{{ route('hospital.index') }}"  class="btn mb-1 btn-primary"> Hospitals <span class="btn-icon-right"> <i class="icon-hospital-pin menu-icon"></i></span></a>
                                @else
                                    <a href="{{ route('hospital.index',['hospitals'=>'deleted']) }}"   class="btn mb-1 btn-danger"> Deleted Hospitals <span class="btn-icon-right"><i class="icon-trash"></i></span></a>
                                @endif

                                <a href="{{ route('hospital.create') }}"  class="btn mb-1 btn-success">Crate Hospitals <span class="btn-icon-right"><i class="icon-plus"></i></span></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Code </th>
                                        <th> Name</th>
                                        <th>Region </th>
                                        <th>Address</th>
                                        <th>Phone </th>
                                        <th>Fax</th>
                                        <th>Email </th>
                                        <th>WO Prefix</th>
                                        <th>WOCM SL No</th>
                                        <th>WOPM SL No</th>
                                        <th>Hospital Code Prefix  </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hospitals as $hospital)
                                        <tr>
                                            <td>{{ $hospital->hospital_code  }}</td>
                                            <td>{{ $hospital->hospital_name  }}</td>
                                            <td>{{ $hospital->region }}</td>
                                            <td>{{ $hospital->address  }}</td>
                                            <td>{{ $hospital->telephone  }}</td>
                                            <td>{{ $hospital->fax  }}</td>
                                            <td>{{ $hospital->email  }}</td>
                                            <td>{{ $hospital->wo_prefix  }}</td>
                                            <td>{{ $hospital->wocm_sl_no  }}</td>
                                            <td>{{ $hospital->wopm_sl_no  }}</td>
                                            <td>{{ $hospital->hospital_code_prefix }}</td>

                                            <td>
                                                @if(request()->hospitals == 'deleted')


                                                    <a href="{{ route('hospital.restore',$hospital->id) }}"  class="btn mb-1 btn-success">Restore</a>
                                                    <a href="{{ route('hospital.forceDelete',$hospital->id) }}"  class="btn mb-1 btn-danger" >Delete</a>

                                                @else


                                                    <form action="{{ route('hospital.destroy',$hospital->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="general-button">

                                                            <a href="{{ route('hospital.edit',$hospital->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                            <a href="{{ route('hospital.show',$hospital->id) }}"  class="btn mb-1 btn-success">Show</a>

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
