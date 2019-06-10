@extends('admin.layouts.app')

@section('title', '| '.trans('strings.crud.add').' '.$word)

@section('styles')
@endsection

@section('page-header', $word)

@section('panel-heading')
	{{ trans('strings.crud.add') }} {{ $word }}
@endsection

@section('content')
	{{-- <div class="row">
		<div class="col-sm-12">
			{!! Form::open(['route' => $active.'.store', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal', 'files' => true]) !!}
				<div id="rootwizard">
					<ul>
				        @include('admin.modules.'.$active.'.tabs')
				    </ul>
				    <br>
				    <div class="tab-content">
				        @include('admin.modules.'.$active.'.panels')

				        <ul class="pager wizard">
				            <li class="previous">
				                {!! link_to('#', trans('strings.wizard.previous')) !!}
				            </li>
				            <li class="next">
				                {!! link_to('#', trans('strings.wizard.next')) !!}
				            </li>
				            <li class="next finish" style="display:none;">
				                {!! link_to('#', trans('strings.wizard.finish')) !!}
				            </li>
				        </ul>
				    </div>
				</div>
			{!! Form::close() !!}
		</div>
	</div> --}}
@endsection

@section('scripts')
@endsection