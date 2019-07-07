@extends('admin.layouts.app')

@section('title', '| '.$word)

@section('styles')
@endsection

@section('page-header', $word)

@section('panel-heading')
	{{ $word }}
@endsection

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h1>Hola Mundo!!!</h1>
		</div>
	</div>
@endsection

@section('scripts')
@endsection