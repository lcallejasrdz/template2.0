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
			<section class="content">
		        <div class="row">
		            <div class="col-lg-12">
		                <div  class="tab-content mar-top">
		                	@include('admin.modules.'.$active.'.panels-show')
		                </div>
		            </div>
		        </div>
		    </section>
		</div>
	</div>
@endsection

@section('scripts')
@endsection
