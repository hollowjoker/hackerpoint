@extends('layout.admin.templates.default-template')

@section('content')

    <div class="page-seller-login " style="background-image:url( {{ URL::asset('/images/bg-seller-login.jpeg') }} );">
        <div class="container-fluid overlay overlay--primary">
            <div class="row align-items-center" style="min-height: 100vh;">
                <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-7">
                    <div class="hm-panel">
                        <h2 class="text-right">Seller <b>Portal</b></h2>
                        <div class="form-group">
                            <label for="usr">Email</label>
                            <input type="text" class="form-control" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" />
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" class="btn btn-primary btn-block" value="Login" />
                        </div>
                        <div>
                            <p class="text-right mb-5"><a href="#">Forgot password?</a></p>
                            <p class="text-center">Don’t have an account yet? <a href="#">Become A Seller</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop