<!DOCTYPE html>
<html class="h-100" lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="/js/app.js" defer></script>
</head>


<body class="h-100">
    <header class="fixed-top">
        @include('header')
    </header>

    <div class="container mt-3 pt-5">
        @yield('content')
    </div>
</body>

</html>
