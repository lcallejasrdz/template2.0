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
	@include('admin.delete_modal')
@endsection

@section('scripts')
	{{-- DataTables --}}
	@include('plugins.datatables.dataTables')
@endsection