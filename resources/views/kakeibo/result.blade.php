@extends('layout')

@section('content')
<div class="card my-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title1">総合計</h5>
        <p class="card-text fs-4">{{number_format($sumAll)}}円</p>
        <h5 class="card-title2">一人当たり</h5>
        <p class="card-text fs-4">{{number_format($sumHalf)}}円</p>
    </div>
</div>
<div class="card my-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title1">{{$member01_name}}</h5>
        <h5 class="card-title1">合計</h5>
        <p class="card-text fs-4">{{number_format($sum01)}}円</p>
        <h5 class="card-title2">差額</h5>
        <p class="card-text fs-4">{{number_format($difference01)}}円</p>
    </div>
</div>
<div class="card my-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title1">{{$member02_name}}</h5>
        <h5 class="card-title1">合計</h5>
        <p class="card-text fs-4">{{number_format($sum02)}}円</p>
        <h5 class="card-title2">差額</h5>
        <p class="card-text fs-4">{{number_format($difference02)}}円</p>
    </div>
</div>

<a href={{route('home')}}>
    <div class="d-grid gap-2">
        <button type="button" class="btn btn-primary">OK</button>
    </div>
</a>
@endsection
