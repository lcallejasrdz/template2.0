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
				    @include('admin.modules.'.$active.'.panels')

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