@extends('frontend.auth.auth')
@section('title')
    <title>{{getenv('APP_NAME')}} - {{ __('Reset password') }} </title>
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="auth-form">
            <h4 class="text-center mb-4">{{ __('Reset Password') }}</h4>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                    @error('email')
                    <span class="invalid-feedback d-block" role="alert">{{$message}}</span>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                    <a href="{{route('login')}}" class="btn btn-dark btn-block">{{__('Back To Login')}}</a>
                </div>
            </form>
        </div>
    </div>
@endsection
