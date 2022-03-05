<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <a class="navbar-brand mx-3" href="#">My家計簿</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
            <a class="nav-item nav-link active" href="{{route('home')}}">月別一覧</a>
            <a class="nav-item nav-link disabled" href="{{route('create')}}">計上登録</a>
        </div>
    </div>
</nav>
