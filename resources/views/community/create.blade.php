{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'コミュニティの新規作成'を埋め込む --}}
@section('title', 'コミュニティの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コミュニティ新規作成</h2>
                <form action="{{ action('Admin\CommunityController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-2" for="eyecatch">アイキャッチ画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="eyecatch">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="name">コミュニティ名（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="例）NEW STYLE HUSTLE TOKYO">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="pref">都道府県（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pref" value="{{ old('pref') }}" placeholder="例）東京">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="information">コミュニティ情報</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="information" rows="10" placeholder="例）NEW STYLE HUSTLE TOKYOは、Zabu&Eriを中心にレッスンやパーティーなどを開催しております。">{{ old('information')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image1">画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image2">画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image3">画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video1_link">動画のリンク1</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video1_link" value="{{ old('video1_link') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video2_link">動画のリンク2</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video2_link" value="{{ old('video2_link') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video3_link">動画のリンク3</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video3_link" value="{{ old('video3_link') }}">
                            <p>※動画のリンクはyoutubeのみ可。「https://www.youtube.com/watch?v=○○○○○」の○○○○○の部分のみ記入してください。<br>例えば、「https://www.youtube.com/watch?v=iGFKTiqBOBs」の場合、「iGFKTiqBOBs」のみ記入。</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message_image">代表者メッセージの画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="message_image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message">メッセージ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="message" rows="10" placeholder="例）代表のZabu&Eriです。NEW STYLE HUSTLEに少しでも興味ある方はぜひご連絡ください！。">{{ old('message')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="contact">お問い合わせ先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="contact" value="{{ old('contact') }}" placeholder="例）○○@gmail.com、またはFacebookにてご連絡ください。">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="facebook_link">FacebookページのURL<br>（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="facebook_link" value="{{ old('facebook_link') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="instagram_link">InstagramアカウントのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="instagram_link" value="{{ old('instagram_link') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="website_link">外部サイトのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="website_link" value="{{ old('website_link') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
