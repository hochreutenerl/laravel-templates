<div class="form-group {{ $errors->has($name) ? ' has-error' : '' }}">
    {{ Form::label($name, $label ? $label : trans($name), ['class' => 'control-label']) }}
    @yield('formfield')
    {{ Form::helpBlock($name) }}
</div>