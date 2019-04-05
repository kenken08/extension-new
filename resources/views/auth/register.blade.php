@extends('layouts.user_credentials')

@section('content')
    
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('register.user') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} form-control-user" id="first_name" placeholder="First Name">
                                {!! form_error_message('first_name', $errors) !!}
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }} form-control-user" id="last_ame" placeholder="Last Name">
                                {!! form_error_message('last_name', $errors) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" id="email" placeholder="Email Address">
                            {!! form_error_message('email', $errors) !!}
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user" id="password" placeholder="Password">
                                {!! form_error_message('password', $errors) !!}
                            </div>
                            <div class="col-sm-6">
                                <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }} form-control-user" id="password_confirmation" placeholder="Repeat Password">
                                {!! form_error_message('password_confirmation', $errors) !!}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection