<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title', config('app.name'))</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('main.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <style>
        .transition-fade {
            transition: 0.4s;
            opacity: 1;
        }

        html.is-animating .transition-fade {
            opacity: 0;
        }
    </style>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('layout.header')
    @include('layout.ui_theme_settings')
    <div class="app-main">
        @include('layout.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner transition-fade" id="app_content">
                @yield('content')
            </div>
            @include('layout.footer')
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('assets/scripts/main.js')  }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('assets/scripts/custom.js') }}"></script>
</body>
</html>
