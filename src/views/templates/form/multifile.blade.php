@extends('vendor.laravel-templates.templates.form.formfield')
@section('formfield')
    {{ Form::file($name.'[]', array_merge(['class' => 'form-control', 'multiple' => true], $attributes)) }}
@stop