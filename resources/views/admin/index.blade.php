@extends('admin.layouts.app')

@section('title', '| '.$word)

@section('styles')
@endsection

@section('page-header', $word)

@section('panel-heading')
	{{ $word }}
@endsection

@section('content')
	{{ Form::token() }}
	@include('admin.modules.datatable')
	@if($actions == 1 || $actions == 3 || $actions == 4 || $actions == 7)
		@include('admin.delete_modal')
	@endif
@endsection

@section('scripts')
	{{-- DataTables --}}
	@include('plugins.datatables.dataTables')
@endsection