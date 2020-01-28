@extends('layouts.admin')
@section('title', '摂取FOOD新規登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>摂取FOOD新規登録</h2>
                <p>摂取した食品の下記栄養素を小数点第一位まで記入して下さい。</p>
                <form action="{{ action('Admin\FoodController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">日付</label>
                        <div class="col-md-10">
                            <!--<input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">-->
                            <input type="date" class="form-control" name="eat_date" value="{{ old('eat_date', \Carbon\Carbon::now()->format('Y-m-d')) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">食品名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="food" value="{{ old('food') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">タンパク質(g)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="protein" value="{{ old('protein') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">炭水化物(g)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="carbohydrate" value="{{ old('carbohydrate') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">脂質(g)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="lipid" value="{{ old('lipid') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection