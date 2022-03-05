<!DOCTYPE html>
<html class="h-100" lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My家計簿</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="/js/app.js" defer></script>
</head>

<body class="h-100 d-flex align-items-center main-img">
    <div class="container px-3">
        <h1 class="display-1 text-center mb-5 pb-5">My家計簿</h1>
        <div class="row mt-0 mx-0 d-flex justify-content-around">
            <a class="btn btn-primary shadow-lg col-md-4 fs-2  px-0 py-4 rounded-pill" href="{{route('home')}}">記録を見る</a>
            <a class="btn btn-primary shadow-lg col-md-4 fs-2 px-0 py-4 rounded-pill" href="{{route('home')}}">計上する</a>
        </div>
    </div>
</body>

</html>
