@extends('layout.admin.templates.default-template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <h2>Login</h2>
            <form action="{{ route('login.post') }}" id="loginForm">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="usr">Email</label>
                    <input type="text" class="form-control" name="email" id="usr">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" name="password" id="pwd">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>

@stop