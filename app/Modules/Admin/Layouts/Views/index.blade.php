@extends('layout.admin.templates.default-template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <h2>Login</h2>
            <div class="form-group">
                <label for="usr">Email</label>
                <input type="text" class="form-control" id="usr">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </div>
    </div>
</div>

@stop