@extends('layouts.admin')
@section('title', 'マクロ管理法とは？')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="add-h2">\ Welcome to Macro-Management-Method /</h2>
                <p class="add-p">まずは、コチラ(↓)をご覧下さい。このサイトの元となった「マクロ管理法とは何か」について説明しています。</p>
                <iframe width="864" height="486" src="https://www.youtube.com/embed/1Y44qkuHJQ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>※このサイトは、動画作成者さんとは全く関係ありません。</p>
                <br />
                <br />
                <h2>マクロ管理法とは？</h2>
                <p>あなたの性別・身長・体重・年齢、そして3段階に分け活動量から算出した1日に摂取すべき総カロリーと、そこから導かれたマクロバランスに沿って食べるだけという超シンプルな食事法です。<br/><br/>これによって、あなたは必要なマクロ栄養素（タンパク質・炭水化物・脂質）を指定されただけ食べていけば、ダイエット・増量など、あなたの目的に合った体作りが可能になります。</p>
                <br />
                <br />
                <h2>このサイトの使い方</h2>
                <p>①：<a href="{{ url('/admin/profile/create') }}">プロフィール新規作成</a>よりあなたのプロフィールデータを入力して下さい</p>
                <p>②：入力完了後、<a href="{{ url('/admin/profile/data') }}">プロフィール計算結果</a>にあなたの目標カロリー、各栄養素、基礎代謝などが表示されます</p>
                <p>③：後は、日々の食事を<a href="{{ url('/admin/food/create') }}">食事新規登録</a>から登録して下さい</p>
                <p>④：登録完了後、登録データが<a href="{{ url('/admin/food/') }}">登録済み食事一覧</a>ページに表示されます</p>
                <p>⑤：また、<a href="{{ url('/admin/food/today') }}">本日の進捗</a>にて、本日の目標カロリー・各栄養素の達成度をご確認頂けます</p>
                <p>⑥：過去データを閲覧したい場合は<a href="{{ url('/admin/food/history') }}">過去データ閲覧</a>より、ご確認頂けます</p>
                <p>※入力データを修正する場合は、プロフィールデータの場合は<a href="{{ url('/admin/profile/data') }}">コチラ</a>のページ下部をご確認下さい。<br />※食事データの場合は<a href="{{ url('/admin/food') }}">コチラ</a>の各編集ボタンをご活用下さい。</p>
                <br />
                <br />
                <h2>参考文献</h2>
                <p><a href="https://www.amazon.co.jp/%E7%AD%8B%E3%83%88%E3%83%AC%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E3%82%A8%E3%83%AA%E3%83%BC%E3%83%88%E3%81%8C%E3%82%84%E3%81%A3%E3%81%A6%E3%81%84%E3%82%8B%E6%9C%80%E5%BC%B7%E3%81%AE%E9%A3%9F%E3%81%B9%E6%96%B9-Testosterone-ebook/dp/B073CD4KYY" target="_blank" rel="noopener noreferrer">筋トレビジネスエリートがやっている最強の食べ方</a><p>
            </div>
        </div>
    </div>
@endsection