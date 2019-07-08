@extends('admin.layouts.app')

@section('title', '| '.trans('strings.crud.restore').' '.$word)

@section('styles')
@endsection

@section('page-header', trans('strings.crud.restore').' '.$word)

@section('panel-heading')
	{{ trans('strings.crud.restore') }} {{ $word }}
@endsection

@section('content')
	{{ Form::token() }}
	@include('admin.modules.datatable')
	@include('admin.restore_modal')
@endsection

@section('scripts')
	{{-- DataTables --}}
	@include('plugins.datatables.dataTables')
@endsection
