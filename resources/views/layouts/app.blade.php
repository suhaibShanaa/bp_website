<html>
    <head>
            <meta charset="utf-8">
            <title>BP Website - @section('title')</title>
            <script src="{{ asset('js/app.js') }}" defer></script>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>
        @include('inc.nav')

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
