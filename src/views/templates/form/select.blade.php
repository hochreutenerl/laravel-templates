@extends('templates.form.formfield')
@section('formfield')
    {{ Form::select($name, $select,  $value, array_merge(['class' => 'form-control'], $attributes)) }}
@stop