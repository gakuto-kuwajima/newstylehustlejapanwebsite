{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'コミュニティの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="title">ニュース新規作成</h2>
                <form action="{{ action('CommunityRepController@newscreate') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_permalink"><i class="fas fa-arrow-circle-right"></i>URL（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_permalink" value="{{ old('news_permalink') }}" placeholder="例）miyagiparty-0714">
                            <p>※「newstylehustlejapan.com/news/○○○○○」の○○○○○の部分です。<br>ハイフン（-）以外の記号や空白は基本的に不可です。小文字のローマ字と数字が推奨です。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_title"><i class="fas fa-arrow-circle-right"></i>タイトル（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_title" value="{{ old('news_title') }}" placeholder="例）[宮城]7月14日にニュースタイルハッスルのパーティーを開催します！">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_writer"><i class="fas fa-arrow-circle-right"></i>筆者名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_writer" value="{{ old('news_writer') }}" placeholder="例）NEW STYLE HUSTLE MIYAGI">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_eyecatch"><i class="fas fa-arrow-circle-right"></i>アイキャッチ画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_eyecatch">
                            <p>※目安として「横1200px × 縦630px」が推奨サイズです。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_body"><i class="fas fa-arrow-circle-right"></i>本文（※必須）</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="news_body" rows="10" placeholder="例）7月14日（日）仙台にてニュースタイルハッスルのパーティーを開催することになりました。詳細は以下のリンクからご確認ください。">{{ old('news_body')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_website_link"><i class="fas fa-arrow-circle-right"></i>詳細ページのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_website_link" value="{{ old('news_website_link') }}"　placeholder="例）https://www.facebook.com/groups/2262801090609771/">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_image1"><i class="fas fa-arrow-circle-right"></i>画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image1">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_image2"><i class="fas fa-arrow-circle-right"></i>画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image2">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_image3"><i class="fas fa-arrow-circle-right"></i>画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image3">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_video1_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク1</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_video1_link" value="{{ old('news_video1_link') }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_video2_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク2</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_video2_link" value="{{ old('news_video2_link') }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="news_video3_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク3</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_video3_link" value="{{ old('news_video3_link') }}">
                            <p>※動画のリンクはyoutubeのみ可。「https://www.youtube.com/watch?v=○○○○○」の○○○○○の部分のみ記入してください。<br>例）「https://www.youtube.com/watch?v=iGFKTiqBOBs」の場合、「iGFKTiqBOBs」のみ記入。</p>
                        </div>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-md-12">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary admin-btn" value="投稿">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-group row">
           <div class="col-md-12 page-return">
               <button type="button" onclick="location.href='/communityrep' " class="btn-flat-border admin-btn">戻る</button>
           </div>
        </div>
    </div>
@endsection
