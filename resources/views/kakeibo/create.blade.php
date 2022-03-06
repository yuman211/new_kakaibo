@extends('layout')
@section('title', '計上登録')
@section('content')
<form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
    @csrf
    <div class="row">

        <div class="col-md-6 form-group">

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <li>{{$errors->first()}}</li>
                </ul>
            </div>

            @endif
            <h2 class="my-3">ゆうき</h2>
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.0') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.1') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.2') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.3') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.4') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.5') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.6') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.7') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.8') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.9') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.10') }}">
            <input type="text" name="costs_01[]" class="form-control my-2" id="costs_01" placeholder="金額を入力してください" value="{{ old('costs_01.11') }}">
        </div>

        <div class="col-md-6 form-group">
            <h2 class="my-3">彩香</h2>
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.0') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.1') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.2') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.3') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.4') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.5') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.6') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.7') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.8') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.9') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.10') }}">
            <input type="text" name="costs_02[]" class="form-control my-2" id="costs_02" placeholder="金額を入力してください" value="{{ old('costs_02.11') }}">
        </div>

    </div>

    <div class=" text-end d-grid gap-2">
        <button type="submit" class="btn btn-primary mt-2 mb-5">計上</button>
    </div>
</form>
@endsection
