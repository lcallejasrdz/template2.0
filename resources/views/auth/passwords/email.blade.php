@extends('layouts.auth')

@section('title', '| Recuperar Contraseña')

@section('styles')
@endsection

@section('content')
    <div class="col-lg-6 d-none d-lg-block bg-password-image">
        
    </div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                <p class="mb-4">Nosotros te ayudaremos. Sólo ingresa el correo electrónico con el que te registraste y te enviaremos un link para que recuperes tu contraseña.</p>
            </div>
            {!! Form::open(['route' => 'forgot-password', 'method' => 'post', 'id' => 'formValidation', 'class' => 'user']) !!}
                <div class="form-group">
                    {!! Form::email('email', old('email'), ['id' => 'email', 'class' => 'form-control form-control-user', 'placeholder' => 'Ingresa tu Correo Electrónico', 'required', 'autofocus']) !!}
                </div>
                {!! Form::submit('Recuperar Contraseña', ['class' => 'btn btn-primary btn-user btn-block', 'id' => 'submit']) !!}
            {!! Form::close() !!}
            <hr>
            <div class="text-center">
                {!! link_to_route('login', '¿Ya tienes una cuenta? ¡Inicia Sesión!', [], ['class' => 'small']) !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('forgot-password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}