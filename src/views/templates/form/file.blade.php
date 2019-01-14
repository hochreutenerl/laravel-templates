@extends('templates.form.formfield')
@section('formfield')
    {{ Form::file($name, array_merge(['class' => 'form-control'], $attributes)) }}
@stop