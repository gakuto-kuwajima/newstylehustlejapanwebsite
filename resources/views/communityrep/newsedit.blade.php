@extends('layouts.admin')
@section('title', 'NEWSページ編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="title">NEWSページ編集</h2>
                <form action="{{ action('CommunityRepController@newsupdate') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row no-gutters">
                        <label class="col-md-2 label-title" for="news_permalink"><i class="fas fa-arrow-circle-right"></i>URL（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_permalink" value="{{ $news_form->news_permalink }}" placeholder="例）miyagiparty-0714">
                            <p>※基本的にURLは変更しないでください。検索されにくくなります。</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_title"><i class="fas fa-arrow-circle-right"></i>タイトル（※必須）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_title" value="{{ $news_form->news_title }}" placeholder="例）[宮城]7月14日にニュースタイルハッスルのパーティーを開催します！">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_writer"><i class="fas fa-arrow-circle-right"></i>筆者名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_writer" value="{{ $news_form->news_writer }}" placeholder="例）NEW STYLE HUSTLE MIYAGI">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_eyecatch"><i class="fas fa-arrow-circle-right"></i>アイキャッチ画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_eyecatch">
                            <div class="form-text text-info">
                                設定中: {{ $news_form->news_eyecatch_path }}
                            </div>
                            <p class="attention">※更新後はセキュリティ対策のため画像の名前が暗号化されています。</p>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="newsremove1" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_body"><i class="fas fa-arrow-circle-right"></i>本文（※必須）</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="news_body" rows="10" placeholder="例）7月14日（日）仙台にてニュースタイルハッスルのパーティーを開催することになりました。詳細は以下のリンクからご確認ください。">{{ $news_form->news_body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_website_link"><i class="fas fa-arrow-circle-right"></i>外部サイトのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_website_link" value="{{ $news_form->news_website_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_image1"><i class="fas fa-arrow-circle-right"></i>画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image1">
                            <div class="form-text text-info">
                                設定中: {{ $news_form->news_image1_path }}
                            </div>
                            <p class="attention">※更新後はセキュリティ対策のため画像の名前が暗号化されています。</p>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="newsremove2" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_image2"><i class="fas fa-arrow-circle-right"></i>画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image2">
                            <div class="form-text text-info">
                                設定中: {{ $news_form->news_image2_path }}
                            </div>
                            <p class="attention">※更新後はセキュリティ対策のため画像の名前が暗号化されています。</p>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="newsremove3" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_image3"><i class="fas fa-arrow-circle-right"></i>画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="news_image3">
                            <div class="form-text text-info">
                                設定中: {{ $news_form->news_image3_path }}
                            </div>
                            <p class="attention">※更新後はセキュリティ対策のため画像の名前が暗号化されています。</p>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="newsremove4" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_video1_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク1</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_video1_link" value="{{ $news_form->news_video1_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_video2_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク2</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_video2_link" value="{{ $news_form->news_video2_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-title" for="news_video3_link"><i class="fas fa-arrow-circle-right"></i>動画のリンク3</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="news_video3_link" value="{{ $news_form->video3_link }}">
                            <p>※動画のリンクはyoutubeのみ可。「https://www.youtube.com/watch?v=○○○○○」の○○○○○の部分のみ記入してください。<br>例）「https://www.youtube.com/watch?v=iGFKTiqBOBs」の場合、「iGFKTiqBOBs」のみ記入。</p>
                        </div>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-md-12">
                            <input type="hidden" name="id" value="{{ $news_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary admin-btn admin-btn" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-group row">
           <div class="col-md-12 page-return">
               <button type="button" onclick="location.href='/communityrep' " class="btn-flat-border admin-btn admin-btn">戻る</button>
           </div>
        </div>
    </div>
@endsection
