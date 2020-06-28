@extends('dashboard.layouts.app_dashboard_auth')

@section('content')

        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
{{--                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">--}}
{{--                            <h1 class="text-white">Welcome!</h1>--}}
{{--                            <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
{{--                        <div class="card-header bg-transparent pb-5">--}}
{{--                            <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>--}}
{{--                            <div class="btn-wrapper text-center">--}}
{{--                                <a href="#" class="btn btn-neutral btn-icon">--}}
{{--                                    <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>--}}
{{--                                    <span class="btn-inner--text">Github</span>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="btn btn-neutral btn-icon">--}}
{{--                                    <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>--}}
{{--                                    <span class="btn-inner--text">Google</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="card-body px-lg-5 py-lg-5">
{{--                            <div class="text-center text-muted mb-4">--}}
{{--                                <small>Or sign in with credentials</small>--}}
{{--                            </div>--}}
                            <form action="{{route('dashboard.login.post')}}" method="POST">

                                {{csrf_field()}}
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password">
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox" name="remember">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Sign n</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="#" class="text-light"><small>Forgot password?</small></a>
                        </div>
{{--                        <div class="col-6 text-right">--}}
{{--                            <a href="#" class="text-light"><small>Create new account</small></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>


@endsection