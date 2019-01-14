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
        Form::component('helpBlock', 'vendor.laravel-templates.templates.form.helpBlock', ['name']);

        $defaultParameters = ['name', 'label' => '', 'value' => null, 'attributes' => []];

        Form::component('templateText', 'vendor.laravel-templates.templates.form.text', $defaultParameters);
        Form::component('templateTextarea', 'vendor.laravel-templates.templates.form.textarea', $defaultParameters);
        Form::component('templateDate', 'vendor.laravel-templates.templates.form.date', $defaultParameters);
        Form::component('templateDatetime', 'vendor.laravel-templates.templates.form.datetime', $defaultParameters);
        Form::component('templateNumber', 'vendor.laravel-templates.templates.form.number', $defaultParameters);
        Form::component('templateSelect', 'vendor.laravel-templates.templates.form.select', [$defaultParameters, 'select' => []]);
        Form::component('templateCheckbox', 'vendor.laravel-templates.templates.form.checkbox', [$defaultParameters, 'checked' => null]);
        Form::component('templateFile', 'vendor.laravel-templates.templates.form.file', $defaultParameters);
        Form::component('templateMultiFile', 'vendor.laravel-templates.templates.form.multifile', $defaultParameters);
        Form::component('templateColor', 'vendor.laravel-templates.templates.form.color', $defaultParameters);
        Form::component('templateSubmit', 'vendor.laravel-templates.templates.form.submit', $defaultParameters);
    }
}