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
                    <li class="breadcrumb-item active"><a href="{{ route('manufacture.index') }}"> Manufactures</a></li>
                    @if(request()->manufactures == 'deleted')
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Deleted Manufactures</a></li>
                    @else
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Manufactures</a></li>
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

                            @if(request()->manufactures == 'deleted')
                                <h4 class="card-title">Deleted Manufactures</h4>
                            @else
                                <h4 class="card-title">Manufactures</h4>
                            @endif


                            <div>
                                @if(request()->manufactures == 'deleted')
                                    <a href="{{ route('manufacture.index') }}"  class="btn mb-1 btn-primary"> Manufactures <span class="btn-icon-right"> <i class="icon-manufacture-pin menu-icon"></i></span></a>
                                @else
                                    <a href="{{ route('manufacture.index',['manufactures'=>'deleted']) }}"   class="btn mb-1 btn-danger"> Deleted Manufactures <span class="btn-icon-right"><i class="icon-trash"></i></span></a>
                                @endif

                                <a href="{{ route('manufacture.create') }}"  class="btn mb-1 btn-success">Crate Manufactures <span class="btn-icon-right"><i class="icon-plus"></i></span></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Manufacture Code</th>
                                        <th> Zip</th>
                                        <th> Manufacture Name</th>
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
                                    @foreach($manufactures as $manufacture)
                                        <tr>
                                            <td>{{ $manufacture->manufacture_code }}</td>
                                            <td>{{ $manufacture->zip }}</td>
                                            <td>{{ $manufacture->manufacture_name }}</td>
                                            <td>{{ $manufacture->country }}</td>
                                            <td>{{ $manufacture->contact_person }}</td>
                                            <td>{{ $manufacture->phone }}</td>
                                            <td>{{ $manufacture->address }}</td>
                                            <td>{{ $manufacture->fax }}</td>
                                            <td>{{ $manufacture->city }}</td>
                                            <td>{{ $manufacture->email }}</td>
                                            <td>{{ $manufacture->state }}</td>

                                            <td>
                                                @if(request()->manufactures == 'deleted')


                                                    <a href="{{ route('manufacture.restore',$manufacture->id) }}"  class="btn mb-1 btn-success">Restore</a>
                                                    <a href="{{ route('manufacture.forceDelete',$manufacture->id) }}"  class="btn mb-1 btn-danger" >Delete</a>

                                                @else


                                                    <form action="{{ route('manufacture.destroy',$manufacture->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="general-button">

                                                            <a href="{{ route('manufacture.edit',$manufacture->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                                            <a href="{{ route('manufacture.show',$manufacture->id) }}"  class="btn mb-1 btn-success">Show</a>

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
