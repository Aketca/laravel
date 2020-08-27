<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
<div id="app">
    <div class="wrap">
        @include('parts.header')
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('parts.footer')
</div>
<link rel="stylesheet" href="/css/app.css">
<script src="/js/app.js"></script>
</body>
</html>
