@extends('frontend.auth.auth')
@section('title')
    <title>{{getenv('APP_NAME')}} - {{ __('Register') }} </title>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="auth-form">
            <h4 class="text-center mb-4">Register your account</h4>
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email"><strong>Name</strong></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                    @error('name')
                    <span class="invalid-feedback d-block" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
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
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
            </div>
        </div>
    </div>
@endsection
