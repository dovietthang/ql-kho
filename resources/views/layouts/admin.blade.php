<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    @yield('styles')
</head>

<body class="c-app">
@include('partials.menu')
<div class="c-wrapper">
    <header class="c-header c-header-fixed px-3">
        <h2>QUẢN LÝ KHO HÀNG</h2>
    </header>

    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>
</div>
@yield('scripts')
</body>

</html>
