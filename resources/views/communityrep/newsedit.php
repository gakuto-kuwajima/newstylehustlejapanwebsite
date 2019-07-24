@extends('layouts.admin')
@section('title', 'コミュニティページ編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コミュニティページ編集</h2>
                <form action="{{ action('CommunityRepController@newsupdate') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="news_title">タイトル（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_title" value="{{ $news_form->news_title }}" placeholder="例）[宮城]7月14日にニュースタイルハッスルのパーティーを開催します！">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_writer">筆者名（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_writer" value="{{ $news_form->news_writer }}" placeholder="例）NEW STYLE HUSTLE MIYAGI">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_eyecatch">アイキャッチ画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_eyecatch">
                            <div class="form-text text-info">
                                設定中: {{ $news_form->news_eyecatch_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="news_body" rows="10" placeholder="例）7月14日（日）仙台にてニュースタイルハッスルのパーティーを開催することになりました。詳細は以下のリンクからご確認ください。">{{ $news_form->news_body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_website_link">外部サイトのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_website_link" value="{{ $news_form->news_website_link }}">
                        </div>
                    </div>iv>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_image1">画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image1">
                            <div class="form-text text-info">
                                設定中: {{ $news_form->_form->news_image1_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_image2">画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image2">
                            <div class="form-text text-info">
                                設定中: {{ $news_form->news_image2_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_image3">画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image3">
                            <div class="form-text text-info">
                                設定中: {{ $news_form->news_image3_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_video1_link">動画のリンク1</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video1_link" value="{{ $news_form->news_video1_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_video2_link">動画のリンク2</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_video2_link" value="{{ $news_form->news_video2_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="news_video3_link">動画のリンク3</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_video3_link" value="{{ $news_form->video3_link }}">
                            <p>※動画のリンクはyoutubeのみ可。「https://www.youtube.com/watch?v=○○○○○」の○○○○○の部分のみ記入してください。<br>例えば、「https://www.youtube.com/watch?v=iGFKTiqBOBs」の場合、「iGFKTiqBOBs」のみ記入。</p>
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
