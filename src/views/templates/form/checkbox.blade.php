@extends('templates.form.formfield')
@section('formfield')
    {{ Form::hidden($name, 0) }}
    {{ Form::checkbox($name, 1,  $checked, array_merge(['class' => 'form-control'], $attributes)) }}
@stop