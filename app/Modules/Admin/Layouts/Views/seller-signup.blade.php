@extends('layout.admin.templates.default-template')

@section('content')

    <div class="page-seller-signup" style="background-image:url({{ URL::asset('/images/bg-seller-signup.jpg') }});">
        <div class="container-fluid overlay overlay--primary">
            <div class="row align-items-center" style="min-height: 100vh;">
                <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-7">
                    <div class="hm-panel">
                        <h2 class="text-right">Be a <b>Seller</b> Today</h2>
                        <div class="form-group">
                            <label for="usr">Email</label>
                            <input type="text" class="form-control" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" />
                        </div>
                        <div class="form-group">
                            <label for="pwd">Confirm Password</label>
                            <input type="password" class="form-control" id="pwd" />
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pwd">Store name</label>
                            <input type="password" class="form-control" id="pwd" />
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">I've read and understood the site's Terms & Conditions.
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Signup" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop