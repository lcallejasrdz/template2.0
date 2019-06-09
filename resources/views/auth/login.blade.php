@extends('layouts.auth')

@section('title', '| Login')

@section('styles')
@endsection

@section('content')
    <div class="col-lg-6 d-none d-lg-block bg-login-image">
        
    </div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">¡Bienvenido!</h1>
            </div>
            {!! Form::open(['route' => 'login', 'method' => 'post', 'id' => 'formValidation', 'class' => 'user']) !!}
                <div class="form-group">
                    {!! Form::email('email', old('email'), ['id' => 'email', 'class' => 'form-control form-control-user', 'placeholder' => 'Correo Electrónico', 'required', 'autofocus']) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', ['id' => 'password', 'class' => 'form-control form-control-user', 'placeholder' => 'Contraseña', 'required']) !!}
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        {!! Form::checkbox('remember', 'remember', old('remember') ? true : false, ['id' => 'remember', 'class' => 'custom-control-input']) !!}
                        {!! Form::label('remember', 'Recuérdame', ['class' => 'custom-control-label']) !!}
                    </div>
                </div>
                {!! Form::submit('Iniciar Sesión', ['class' => 'btn btn-primary btn-user btn-block', 'id' => 'submit']) !!}
            {!! Form::close() !!}
            {{-- <hr>
            <div class="text-center">
                {!! link_to_route('forgot-password', '¿Olvidaste tu contraseña?', [], ['class' => 'small']) !!}
            </div> --}}
        </div>
    </div>
@endsection

@section('scripts')
@endsection
