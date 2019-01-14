@extends('templates.form.formfield')
@section('formfield')
    {{ Form::date($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
@stop