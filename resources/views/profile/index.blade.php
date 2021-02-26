@extends('layouts.app')
@section('content')

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xl-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                @if(\Illuminate\Support\Facades\Auth::user()->image)
                                <img class="mr-3" src="{{ asset('img/users/'.Auth::user()->image) }}" width="80" height="80" alt="">
                                @else
                                    <img src="{{ asset('img/woman.png') }}" alt="">
                                @endif
                                <div class="media-body">
                                    <h3 class="mb-0">{{ Auth::user()->first_name }}</h3>
                                    <p class="text-muted mb-0">{{ Auth::user()->country }}</p>
                                </div>
                            </div>

                            <div class="row mb-5">

                                <div class="col-12 text-center">


                                    <a href="{{ route('password') }}" class="btn btn-danger px-5">Change Password </a>
                                </div>
                            </div>


                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Since At</strong> <span>{{\Illuminate\Support\Facades\Auth::user()->created_at}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Last Login</strong> <span>01793931609</span></li>
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{ \Illuminate\Support\Facades\Auth::user()->email }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">

                    @if(session()->has('success'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button> <strong> {!! session()->get('success') !!}</strong> </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Profile</h4>
                            <div class="basic-form">
                                <form method="post" action="{{route('update.profile')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="first_name">First Name</label>
                                            <input type="text"
                                                   id="first_name"
                                                   name="first_name"
                                                   class="form-control @error('first_name') is-invalid @enderror"
                                                   placeholder="First Name"
                                                   value="{{ \Illuminate\Support\Facades\Auth::user()->first_name }}"
                                            >
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="last_name">Last Name</label>
                                            <input type="text"
                                                   id="last_name"
                                                   name="last_name"
                                                   class="form-control @error('last_name') is-invalid @enderror"
                                                   placeholder="First Name"
                                                   value="{{ \Illuminate\Support\Facades\Auth::user()->first_name }}"
                                            >
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="email">Email</label>
                                            <input
                                                type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email"
                                                id="email"
                                                name="email"
                                                value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"
                                            >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="phone">Phone</label>
                                            <input
                                                type="text"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Phone"
                                                id="phone"
                                                name="phone"
                                                value="{{ \Illuminate\Support\Facades\Auth::user()-> phone}}">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="website">Website</label>
                                            <input
                                                type="text"
                                                class="form-control @error('website') is-invalid @enderror"
                                                placeholder="Website"
                                                id="website"
                                                name="website"
                                                value="{{ \Illuminate\Support\Facades\Auth::user()->website }}">

                                            @error('website')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div CLASS="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="address">Address</label>
                                            <input
                                                type="text"
                                                class="form-control @error('address') is-invalid @enderror"
                                                placeholder="Address"
                                                id="address"
                                                name="address"
                                                value="{{ \Illuminate\Support\Facades\Auth::user()->address }}"
                                            >

                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="country">Country</label>
                                            <input
                                                type="text"
                                                class="form-control @error('country') is-invalid @enderror"
                                                placeholder="Country"
                                                id="country"
                                                name="country"
                                                value="{{ \Illuminate\Support\Facades\Auth::user()-> country}}"
                                            >
                                            @error('country')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="city">City</label>
                                            <input
                                                type="text"
                                                class="form-control @error('city') is-invalid @enderror"
                                                id="city"
                                                name="city"
                                                value="{{ \Illuminate\Support\Facades\Auth::user()->city}}"
                                            >

                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="state">State</label>
                                            <input
                                                type="text"
                                                class="form-control @error('state') is-invalid @enderror"
                                                id="state"
                                                name="state"
                                                value="{{ \Illuminate\Support\Facades\Auth::user()->state }}"
                                            >

                                            @error('state')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="zip">Zip</label>
                                            <input
                                                type="text"
                                                class="form-control @error('zip') is-invalid @enderror"
                                                id="zip"
                                                name="zip"
                                                value="{{ \Illuminate\Support\Facades\Auth::user()->zip }}"
                                            >

                                            @error('zip')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="note">Note</label>
                                            <textarea
                                                class="form-control h-150px @error('note') is-invalid @enderror"
                                                rows="6"
                                                id="note"
                                                name="note"

                                            >{{\Illuminate\Support\Facades\Auth::user()->note}}</textarea>

                                            @error('note')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image">Profile Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input
                                                        type="file"
                                                        class="custom-file-input @error('image') is-invalid @enderror"
                                                        name="image"
                                                        id="customFile"

                                                    >
                                                    <label
                                                        class="custom-file-label" for="customFile" >Choose file</label>

                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                    </div>



                                    <button type="submit" class="btn btn-dark">Save Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>

<!--                    <div class="card">
                        <div class="card-body">
                            <div class="media media-reply">
                                <img class="mr-3 circle-rounded" src="images/avatar/2.jpg" width="50" height="50" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-sm-flex justify-content-between mb-2">
                                        <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                        <div class="media-reply__link">
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                            <button class="btn btn-transparent text-dark font-weight-bold p-0 ml-2">Reply</button>
                                        </div>
                                    </div>

                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    <ul>
                                        <li class="d-inline-block"><img class="rounded" width="60" height="60" src="images/blog/2.jpg" alt=""></li>
                                        <li class="d-inline-block"><img class="rounded" width="60" height="60" src="images/blog/3.jpg" alt=""></li>
                                        <li class="d-inline-block"><img class="rounded" width="60" height="60" src="images/blog/4.jpg" alt=""></li>
                                        <li class="d-inline-block"><img class="rounded" width="60" height="60" src="images/blog/1.jpg" alt=""></li>
                                    </ul>

                                    <div class="media mt-3">
                                        <img class="mr-3 circle-rounded circle-rounded" src="images/avatar/4.jpg" width="50" height="50" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="d-sm-flex justify-content-between mb-2">
                                                <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                                <div class="media-reply__link">
                                                    <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                                    <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                                    <button class="btn btn-transparent p-0 ml-3 font-weight-bold">Reply</button>
                                                </div>
                                            </div>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media media-reply">
                                <img class="mr-3 circle-rounded" src="images/avatar/2.jpg" width="50" height="50" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-sm-flex justify-content-between mb-2">
                                        <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                        <div class="media-reply__link">
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                            <button class="btn btn-transparent p-0 ml-3 font-weight-bold">Reply</button>
                                        </div>
                                    </div>

                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>

                            <div class="media media-reply">
                                <img class="mr-3 circle-rounded" src="images/avatar/2.jpg" width="50" height="50" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-sm-flex justify-content-between mb-2">
                                        <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                        <div class="media-reply__link">
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                            <button class="btn btn-transparent p-0 ml-3 font-weight-bold">Reply</button>
                                        </div>
                                    </div>

                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

@endsection
