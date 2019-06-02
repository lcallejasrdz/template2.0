@extends('layouts.auth')

@section('title', '| '.__('Login'))

@section('styles')
@endsection

@section('content')
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
</div>
{!! Form::open(['route' => 'login', 'method' => 'post', 'id' => 'formValidation', 'class' => 'user']) !!}
    <div class="form-group">
        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
        </div>
    </div>
    {!! Form::submit(__('Login'), ['class' => 'btn btn-primary btn-user btn-block']) !!}
    {{-- <hr>
    <a href="index.html" class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Login with Google
    </a>
    <a href="index.html" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
    </a> --}}
{!! Form::close() !!}
<hr>
<div class="text-center">
    <a class="small" href="{{ route('forgot-password') }}">{{ __('Forgot Your Password?') }}</a>
</div>
<div class="text-center">
    <a class="small" href="register.html">Create an Account!</a>
</div>
@endsection

@section('scripts')
@endsection
