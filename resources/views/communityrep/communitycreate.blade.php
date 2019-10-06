{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'コミュニティの新規作成'を埋め込む --}}
@section('title', 'コミュニティの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="title">コミュニティ新規作成</h2>
                <form action="{{ action('CommunityRepController@communitycreate') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="permalink"><i class="fas fa-arrow-circle-right"></i>URL（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="permalink" value="{{ old('permalink') }}">
                            <p>※「newstylehustlejapan-uo.com/community/○○○○○」の○○○○○の部分です。<br>記号は基本的に不可です。小文字のローマ字と数字が推奨です。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="eyecatch"><i class="fas fa-arrow-circle-right"></i>アイキャッチ画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="eyecatch">
                            <p>※目安として「横1200px × 縦630px」が推奨サイズです。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="name"><i class="fas fa-arrow-circle-right"></i>コミュニティ名（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="pref"><i class="fas fa-arrow-circle-right"></i>都道府県（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pref" value="{{ old('pref') }}">
                            <p>※例）宮城県なら→宮城、TYOなら→TYO、Zabu&Eriなら→Zabu&Eri</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="information"><i class="fas fa-arrow-circle-right"></i>コミュニティ情報</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="information" rows="10">{{ old('information')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="image1"><i class="fas fa-arrow-circle-right"></i>画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1">
                            <p>※推奨の画像比率は4:3です。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="image2"><i class="fas fa-arrow-circle-right"></i>画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image2">
                            <p>※推奨の画像比率は4:3です。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="image3"><i class="fas fa-arrow-circle-right"></i>画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image3">
                            <p>※推奨の画像比率は4:3です。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="video1_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク1</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video1_link" value="{{ old('video1_link') }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="video2_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク2</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video2_link" value="{{ old('video2_link') }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="video3_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク3</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video3_link" value="{{ old('video3_link') }}">
                            <p>※動画のリンクはyoutubeのみ可。「https://www.youtube.com/watch?v=○○○○○」の○○○○○の部分のみ記入してください。<br>例）「https://www.youtube.com/watch?v=iGFKTiqBOBs」の場合、「iGFKTiqBOBs」のみ記入。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="calendar"><i class="fas fa-arrow-circle-right"></i>Google カレンダー</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control-file" name="calendar">
                            <p>※Google カレンダーを使ってる方は埋め込むことができます。<br>&#9312;まず<a href="https://support.google.com/calendar/answer/41207?hl=ja">Google カレンダー公式ページ<a>などを参考に「埋め込みコード」を確認してください。<br>&#9313;そして埋め込みコードのうち、&lt;i frame src="○○○○○" style=""...&gt;の○○○○○のみ（src=""の中身）をペーストしてください。<br>&#9314;また設定でアクセス権限を一般公開にしてください。</p>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="message_image"><i class="fas fa-arrow-circle-right"></i>代表者メッセージの画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="message_image">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="message"><i class="fas fa-arrow-circle-right"></i>メッセージ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="message" rows="10">{{ old('message')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="contact"><i class="fas fa-arrow-circle-right"></i>お問い合わせ先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 url label-title" for="facebook_link"><i class="fas fa-arrow-circle-right"></i>FacebookページのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="facebook_link" value="{{ old('facebook_link') }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="instagram_link"><i class="fas fa-arrow-circle-right"></i>InstagramアカウントのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="instagram_link" value="{{ old('instagram_link') }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="twitter_link"><i class="fas fa-arrow-circle-right"></i>TwitterアカウントのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="twitter_link" value="{{ old('twitter_link') }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-md-2 label-title" for="website_link"><i class="fas fa-arrow-circle-right"></i>外部サイトのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="website_link" value="{{ old('website_link') }}">
                        </div>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-md-12">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary text-center admin-btn" value="作成">
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
