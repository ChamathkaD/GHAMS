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
                    <li class="breadcrumb-item active"><a href="{{ route('location.index') }}"> Vendors</a></li>
                    @if(request()->locations == 'deleted')
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Deleted Vendors</a></li>
                    @else
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Vendors</a></li>
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

                            @if(request()->vendors == 'deleted')
                                <h4 class="card-title">Deleted Vendors</h4>
                            @else
                                <h4 class="card-title">Vendors</h4>
                            @endif


                            <div>
                                @if(request()->vendors == 'deleted')
                                    <a href="{{ route('vendor.index') }}"  class="btn mb-1 btn-primary"> Vendors <span class="btn-icon-right"> <i class="icon-vendor-pin menu-icon"></i></span></a>
                                @else
                                    <a href="{{ route('vendor.index',['vendors'=>'deleted']) }}"   class="btn mb-1 btn-danger"> Deleted Vendors <span class="btn-icon-right"><i class="icon-trash"></i></span></a>
                                @endif

                                <a href="{{ route('vendor.create') }}"  class="btn mb-1 btn-success">Crate Vendors <span class="btn-icon-right"><i class="icon-plus"></i></span></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Vendor Code</th>
                                        <th> Zip</th>
                                        <th> Supplier Name</th>
                                        <th> Country</th>
                                        <th> Contact Person</th>
                                        <th> Phone</th>
                                        <th> Address</th>
                                        <th> Fax</th>
                                        <th>City </th>
                                        <th> Email</th>
                                        <th> State</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($vendors as $vendor)
                                        <tr>
                                            <td>{{ $vendor->vendor_code }}</td>
                                            <td>{{ $vendor->zip }}</td>
                                            <td>{{ $vendor->supplier_name }}</td>
                                            <td>{{ $vendor->country }}</td>
                                            <td>{{ $vendor->contact_person }}</td>
                                            <td>{{ $vendor->phone }}</td>
                                            <td>{{ $vendor->address }}</td>
                                            <td>{{ $vendor->fax }}</td>
                                            <td>{{ $vendor->city }}</td>
                                            <td>{{ $vendor->email }}</td>
                                            <td>{{ $vendor->state }}</td>

                                            <td>
                                                @if(request()->vendors == 'deleted')


                                                    <a href="{{ route('vendor.restore',$vendor->id) }}"  class="btn mb-1 btn-success">Restore</a>
                                                    <a href="{{ route('vendor.forceDelete',$vendor->id) }}"  class="btn mb-1 btn-danger" >Delete</a>

                                                @else


                                                    <form action="{{ route('vendor.destroy',$vendor->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="general-button">

                                                            <a href="{{ route('vendor.edit',$vendor->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                            <a href="{{ route('vendor.show',$vendor->id) }}"  class="btn mb-1 btn-success">Show</a>

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
