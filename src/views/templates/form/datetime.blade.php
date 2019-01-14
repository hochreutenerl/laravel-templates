@extends('templates.form.formfield')
@section('formfield')
    {{ Form::datetime($name, $value, array_merge(['class' => 'form-control datetimepicker'], $attributes)) }}
@stop