@extends('vendor.laravel-templates.templates.form.formfield')
@section('formfield')
    {{ Form::textarea($name, $value, array_merge(['class' => 'form-control', 'rows' => 4], $attributes)) }}
@stop