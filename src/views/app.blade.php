<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>
        @hasSection('title')
            @yield('title') - {{config('app.name')}}
        @else
            {{config('app.name')}}
        @endif
    </title>
    @hasSection('description')
        <meta name="description" content="@yield('description')"/>
    @endif
    @hasSection('keywords')
        <meta name="keywords" content="@yield('keywords')"/>
    @endif
    <meta name="generator" content="{{config('app.name')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    @stack('styles')
</head>
<body>
@yield('content')
@stack('scripts')
</body>
</html>

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"/>
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
@endpush