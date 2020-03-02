@extends('layouts.admin')
@section('title', '食事編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>食事編集</h2>
                <p>摂取した食品の栄養素を記入して下さい。<br/>尚、料理などパッケージに栄養素が記載されていない場合は、<a href="https://calorie.slism.jp/" target="_blank" rel="noopener noreferrer">コチラ</a>を参照して下さい。</p>
                <p>情報記入後、下部にある「更新」ボタンを押して下さい。</p>
                <form action="{{ action('Admin\FoodController@update') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <label class="col-md-2">日付</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="eat_date" value="{{ $food_form->eat_date, \Carbon\Carbon::now()->format('Y-m-d') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">食品名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="food" value="{{ $food_form->food }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">種類</label>
                        <div class="col-md-10">
                            <select class="form-control" name="eat_time">
                                <option value="">タイミングを選択して下さい</option>
                                <option value="朝食">朝食</option>
                                <option value="昼食">昼食</option>
                                <option value="夕食">夕食</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">タンパク質(g)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="protein" value="{{ $food_form->protein }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">炭水化物(g)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="carbohydrate" value="{{ $food_form->carbohydrate }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">脂質(g)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="lipid" value="{{ $food_form->lipid }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $food_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection