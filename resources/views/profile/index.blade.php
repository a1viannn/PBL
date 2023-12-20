@extends('master.main')
@section('title', 'Profile')
@section('content')

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Profile</h1>
        <div class="row">

            <div class="col-lg-4 order-lg-2">

                <div class="card shadow mb-4">
                    <div class="card-profile-image mt-4 d-flex justify-content-center">
                        <a>
                            <img class="img-profile rounded-circle" src="{{ asset('template/img/undraw_profile.svg') }}" width="160" height="160">
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h5 class="font-weight-bold">{{ Auth::user()->name }}</h5>
                                    <p class="font-weight">{{ Auth::user()->nim }}</p>

                                        <!-- Pembatas -->
                                        <hr class="sidebar-divider">

                                    <p>Administrator</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-8 order-lg-1">

                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">My Account</h6>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('update-profile')}}" autocomplete="off">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <input type="hidden" name="_method" value="PUT">

                            <h6 class="heading-small text-muted mb-4">User information</h6>

                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="name">Nama<span
                                                    class="small text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control" name="name"
                                                placeholder="Name" value="{{ old('name', Auth::user()->name) }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="email">Email address<span
                                                    class="small text-danger">*</span></label>
                                            <input type="email" id="email" class="form-control" name="email"
                                                placeholder="example@example.com"
                                                value="{{ old('email', Auth::user()->email) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="current_password">Current
                                                password</label>
                                            <input type="password" id="current_password" class="form-control"
                                                name="current_password" placeholder="Current password">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="new_password">New password</label>
                                            <input type="password" id="new_password" class="form-control"
                                                name="new_password" placeholder="New password">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="confirm_password">Confirm
                                                password</label>
                                            <input type="password" id="confirm_password" class="form-control"
                                                name="password_confirmation" placeholder="Confirm password">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>



    {{-- sweet alert --}}
    @include('sweetalert::alert')

@endsection
