<?php

namespace Hochreutenerl\LaravelTemplates;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormFacade as Form;

class LaravelTemplatesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'laravel-templates');

        $this->publishes([__DIR__ . '/../../views' => resource_path('views/vendor/laravel-templates')]);

        $this->defineFormComponents();
    }

    private function defineFormComponents() {
        Form::component('helpBlock', 'templates.form.helpBlock', ['name']);

        $defaultParameters = ['name', 'label' => '', 'value' => null, 'attributes' => []];

        Form::component('templateText', 'templates.form.text', $defaultParameters);
        Form::component('templateTextarea', 'templates.form.textarea', $defaultParameters);
        Form::component('templateDate', 'templates.form.date', $defaultParameters);
        Form::component('templateDatetime', 'templates.form.datetime', $defaultParameters);
        Form::component('templateNumber', 'templates.form.number', $defaultParameters);
        Form::component('templateSelect', 'templates.form.select', [$defaultParameters, 'select' => []]);
        Form::component('templateCheckbox', 'templates.form.checkbox', [$defaultParameters, 'checked' => null]);
        Form::component('templateFile', 'templates.form.file', $defaultParameters);
        Form::component('templateMultiFile', 'templates.form.multifile', $defaultParameters);
        Form::component('templateColor', 'templates.form.color', $defaultParameters);
        Form::component('templateSubmit', 'templates.form.submit', $defaultParameters);
    }
}