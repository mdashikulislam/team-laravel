@extends('frontend.auth.auth')
@section('title')
    <title>{{getenv('APP_NAME')}} - {{ __('Login') }} </title>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="auth-form">
            <h4 class="text-center mb-4">Sign in your account</h4>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                    @error('email')
                    <span class="invalid-feedback d-block" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password"><strong>Password</strong></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @error('password')
                    <span class="invalid-feedback d-block" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-row d-flex justify-content-between mt-4 mb-2">
                    <div class="form-group">
                        <div class="form-check ml-2">
                            <input class="form-check-input" {{old('remember') ? 'checked':''}} name="remember" type="checkbox" id="basic_checkbox_1">
                            <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{route('password.request')}}">Forgot Password?</a>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
            </div>
        </div>
    </div>
@endsection
