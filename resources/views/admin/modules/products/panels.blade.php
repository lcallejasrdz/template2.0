<div class="tab-pane" id="tab1">
    <h2 class="hidden">&nbsp;</h2>
    {!! Form::hidden('product_module_id', 1) !!}
    
    <div class="form-group {{ $errors->first('name') ? 'has-error' : '' }}">
        {!! Form::label('name', trans('validation.attributes.name').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.name')]) !!}
            <span class="help-block">{{ $errors->first('name', ':message') }}</span>
        </div>
    </div>

    <div class="form-group {{ $errors->first('description') ? 'has-error' : '' }}">
        {!! Form::label('description', trans('validation.attributes.description').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('description_content', old('description'), ['id' => 'description_content', 'class' => 'form-control ckeditorcontent', 'placeholder' => trans('validation.attributes.description')]) !!}
            {!! Form::hidden('description', old('description'), ['id' => 'description']) !!}
            <span class="help-block">{{ $errors->first('description', ':message') }}</span>
        </div>
    </div>

    <div class="form-group {{ $errors->first('price') ? 'has-error' : '' }}">
        {!! Form::label('price', trans('validation.attributes.price').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('price', old('price'), ['id' => 'price', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.price')]) !!}
            <span class="help-block">{{ $errors->first('price', ':message') }}</span>
        </div>
    </div>
</div>

{{-- <div class="tab-pane" id="tab2">
    <h2 class="hidden">&nbsp;</h2>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::button(trans('validation.attributes.check_events'), ['id' => 'check_event_types', 'class' => 'btn btn-success']) !!}
            {!! Form::button(trans('validation.attributes.uncheck_events'), ['id' => 'uncheck_event_types', 'class' => 'btn btn-warning']) !!}
        </div>
    </div>

    <div class="form-group {{ $errors->first('event_type_id') ? 'has-error' : '' }}">
        {!! Form::label('event_type_id', trans('validation.attributes.event_type_id').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10" id="checkbox_evnet_type_container">
            @foreach($catalog_event_type_id as $event_type)
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('event_type_id[]', $event_type->id, true) !!} {{ $event_type->name }}
                    </label>
                </div>
            @endforeach
            <span class="help-block">{{ $errors->first('event_type_id', ':message') }}</span>
        </div>
    </div>
</div> --}}
