@extends('layouts.profile')
@section('title', 'プロフィール編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <p>情報記入後、下部にある "更新" ボタンを押して下さい。</p>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <select class="form-control" name="sex">
                                <option value="">性別を選択して下さい</option>
                                <option value="man">男性</option>
                                <option value="woman">女性</option>
                            <!--<input type="text" class="form-control" name="sex" value="{{ old('title') }}">-->
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">身長</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="height" value="{{ old('height') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">体重</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アクティブ度</label>
                        <div class="col-md-10">
                            <select class="form-control" name="active">
                                <option value="">アクティブ度を選択して下さい</option>
                                <option value="low">【低】座り仕事が多く、一日の運動は歩いたり階段を上ったりする程度</option>
                                <option value="normal">【普通】立ち仕事や重労働が多く、比較的一日中動き回っている</option>
                                <option value="high">【高】立ち仕事や重労働が多く、それに加えジムでトレーニングを行っている</option>
                            <!--<input type="text" class="form-control" name="active" value="{{ old('title') }}">-->
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">目的</label>
                        <div class="col-md-10">
                            <select class="form-control" name="purpose">
                                <option value="">目的を選択して下さい</option>
                                <option value="diet">減量(ダイエット)</option>
                                <option value="keep">現状維持</option>
                                <option value="increase">増量</option>
                            <!--<input type="text" class="form-control" name="purpose" value="{{ old('title') }}">-->
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $profile_form->id }}">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection