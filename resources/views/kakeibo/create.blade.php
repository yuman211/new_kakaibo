@extends('layout')
@section('title', '計上登録')
@section('content')
<form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
    @csrf
    <div class="row">

        <div class="col-md-6 form-group">
            <h2 class="my-3">ゆうき</h2>
            <table>
                @for($i=0; $i<15; $i++) <tr>
                    <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください">
                    </tr>
                    @endfor
            </table>
        </div>

        <div class="col-md-6 form-group">
            <h2 class="my-3">彩香</h2>
                <table>
                    @for($i=0; $i<15; $i++) <tr>
                        <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください">
                        </tr>
                        @endfor
                </table>
        </div>

    </div>
    <div class=" text-end d-grid gap-2">
        <button type="submit" class="btn btn-primary mt-2 mb-5">計上</button>
    </div>
</form>
@endsection
