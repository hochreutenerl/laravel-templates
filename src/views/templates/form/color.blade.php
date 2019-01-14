@extends('templates.form.formfield')
@section('formfield')
    {{ Form::color($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
@stop