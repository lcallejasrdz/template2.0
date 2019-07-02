@extends('admin.layouts.app')

@section('title', '| '.trans('strings.crud.add').' '.$word)

@section('styles')
@endsection

@section('page-header', $word)

@section('panel-heading')
	{{ trans('strings.crud.add') }} {{ $word }}
@endsection

@section('content')
	<div class="row">
		<div class="col-sm-12">
			{!! Form::open(['route' => $active.'.store', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal', 'files' => true]) !!}
				<div id="rootwizard">
				    <div class="form-group {{ $errors->first('name') ? 'has-error' : '' }}">
				        {!! Form::label('name', trans('validation.attributes.name').' *', ['class' => 'col-sm-2 control-label']) !!}
				        <div class="col-sm-12">
				            {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.name')]) !!}
				            <span class="help-block">{{ $errors->first('name', ':message') }}</span>
				        </div>
				    </div>

				    <div class="form-group {{ $errors->first('description') ? 'has-error' : '' }}">
				        {!! Form::label('description', trans('validation.attributes.description').' *', ['class' => 'col-sm-2 control-label']) !!}
				        <div class="col-sm-12">
				            {!! Form::textarea('description', old('description'), ['id' => 'description', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.description')]) !!}
				            <span class="help-block">{{ $errors->first('description', ':message') }}</span>
				        </div>
				    </div>

				    <div class="form-group {{ $errors->first('price') ? 'has-error' : '' }}">
				        {!! Form::label('price', trans('validation.attributes.price').' *', ['class' => 'col-sm-2 control-label']) !!}
				        <div class="col-sm-12">
				            {!! Form::text('price', old('price'), ['id' => 'price', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.price')]) !!}
				            <span class="help-block">{{ $errors->first('price', ':message') }}</span>
				        </div>
				    </div>

				    <div class="form-group">
				        <div class="col-sm-12 text-right">
				            {!! Form::submit('Enviar', ['id' => 'submitButton', 'class' => 'btn btn-primary']) !!}
				        </div>
				    </div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('scripts')
	@include('admin.modules.'.$active.'.formvalidation.create')
@endsection