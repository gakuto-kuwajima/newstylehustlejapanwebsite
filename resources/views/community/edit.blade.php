@extends('layouts.admin')
@section('title', 'コミュニティページ編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コミュニティページ編集</h2>
                <form action="{{ action('Admin\CommunityController@update') }}" method="post" enctype="multipart/form-data">
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
                            <div class="form-text text-info">
                                設定中: {{ $community_form->eyecatch_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="name">コミュニティ名（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $community_form->name }}" placeholder="例）NEW STYLE HUSTLE TOKYO">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="pref">都道府県（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pref" value="{{ $community_form->pref }}" placeholder="例）東京">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="information">コミュニティ情報</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="information" rows="10" placeholder="例）主に○○で活動しています。練習会は隔週○○日○○時からおこなっています。未経験の方も大歓迎です。">{{ $community_form->information }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image1">画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1">
                            <div class="form-text text-info">
                                設定中: {{ $community_form->image1_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image2">画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image2">
                            <div class="form-text text-info">
                                設定中: {{ $community_form->image2_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image3">画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image3">
                            <div class="form-text text-info">
                                設定中: {{ $community_form->image3_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video1_link">動画のリンク1</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video1_link" value="{{ $community_form->video1_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video2_link">動画のリンク2</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video2_link" value="{{ $community_form->video2_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video3_link">動画のリンク3</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video3_link" value="{{ $community_form->video3_link }}">
                            <p>※動画のリンクはyoutubeのみ可。「https://www.youtube.com/watch?v=○○○○○」の○○○○○の部分のみ記入してください。<br>例えば、「https://www.youtube.com/watch?v=iGFKTiqBOBs」の場合、「iGFKTiqBOBs」のみ記入。</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message_image">代表者メッセージの画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="message_image">
                            <div class="form-text text-info">
                                設定中: {{ $community_form->message_image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message">メッセージ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="message" rows="10" placeholder="例）NEW STYLE HUSTLE ○○です！だいたい平均5~10人くらい集まって練習会を開いています。もちろん県内外の方問わず参加可能なので、興味ある方はFacebookページをご覧になるか、お問い合わせ先にご連絡ください。">{{ $community_form->message }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="contact">お問い合わせ先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="contact" value="{{ $community_form->contact }}" placeholder="例）○○@gmail.com、またはFacebookにてご連絡ください。">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="facebook_link">facebookページのURL（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="facebook_link" value="{{ $community_form->facebook_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="instagram_link">InstagramアカウントのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="instagram_link" value="{{ $community_form->instagram_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="website_link">外部サイトのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="website_link" value="{{ $community_form->website_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $community_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
