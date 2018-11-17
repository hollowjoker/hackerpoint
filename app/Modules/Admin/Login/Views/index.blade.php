@extends('layout.admin.templates.default-template')

@section('content')

    <div class="page-seller-login " style="background-image:url( {{ URL::asset('/images/bg-seller-login.jpeg') }} );">
        <div class="container-fluid overlay overlay--primary">
            <div class="row align-items-center" style="min-height: 100vh;">
                <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-7">
                    <div class="hm-panel">
                        <h2 class="text-right">Seller <b>Portal</b></h2>
                        <form action="{{ route('login.post') }}" id="loginForm">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" />
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" class="btn btn-primary btn-block" value="Login" />
                            </div>
                            <div>
                                <p class="text-right mb-5"><a href="#">Forgot password?</a></p>
                                <p class="text-center">Don’t have an account yet? <a href="#">Become A Seller</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop