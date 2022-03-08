@extends('layout')

@section('content')

<div class="card my-2">
    <div class="card-body">
        <h5 class="card-title1">総合計</h5>
        <p class="card-text fs-3">{{number_format($calculate_results['sum_all'])}}円</p>
        <h5 class="card-title2">一人当たり</h5>
        <p class="card-text fs-3">{{number_format($sum_each)}}円</p>
    </div>
</div>
<div class="card my-2">
    <div class="card-body">
        <h5 class="card-title1">ゆうき</h5>
        <h5 class="card-title1">合計</h5>
        <p class="card-text fs-3">{{number_format($calculate_results['sum_01'])}}円</p>
    </div>
</div>
<div class="card my-2">
    <div class="card-body">
        <h5 class="card-title1">彩香</h5>
        <h5 class="card-title1">合計</h5>
        <p class="card-text fs-3">{{number_format($calculate_results['sum_02'])}}円</p>
    </div>
</div>
<div class="card my-2">
    <div class="card-body">
        <h5 class="card-title1">差分</h5>
        <p class="card-text fs-3">{{number_format($difference)}}円</p>
    </div>
</div>
<a href={{route('create')}}>
    <div class="d-grid gap-2">
        <button type="button" class="btn btn-primary">OK</button>
    </div>
</a>
@endsection
