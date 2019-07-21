<div class="form-group {{ $errors->first('name') ? 'is-invalid' : '' }}">
    {!! Form::label('name', trans('validation.attributes.name').' *', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-12">
        {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.name')]) !!}
        <span class="help-block">{{ $errors->first('name', ':message') }}</span>
    </div>
</div>

<div class="form-group {{ $errors->first('description') ? 'is-invalid' : '' }}">
    {!! Form::label('description', trans('validation.attributes.description').' *', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-12">
        {!! Form::textarea('description', old('description'), ['id' => 'description', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.description')]) !!}
        <span class="help-block">{{ $errors->first('description', ':message') }}</span>
    </div>
</div>

<div class="form-group {{ $errors->first('price') ? 'is-invalid' : '' }}">
    {!! Form::label('price', trans('validation.attributes.price').' *', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-12">
        {!! Form::text('price', old('price'), ['id' => 'price', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.price')]) !!}
        <span class="help-block">{{ $errors->first('price', ':message') }}</span>
    </div>
</div>
