@extends('layouts.front')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="form-group row">
                <div class="eyecatch col-md-12 mx-auto">
                    @if (!is_null($page->eyecatch_path))
                        <img src="{{ asset('storage/image/' . $page->eyecatch_path) }}" id='eyecatch' class="img-fluid">
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="community_name col-md-12 mx-auto">
                    <h1　class="text-center">{{ $page->name }}<br>({{ $page->pref }})</h1>
                </div>
            </div>
            <div class="form-group row">
                <div class="information col-md-12 mx-auto">
                    <h2>コミュニティ情報</h2>
                    <p>{!! nl2br(e($page->information)) !!}</p>
                </div>
            </div>
            <div class="form-group row">
                @if (!is_null($page->image1_path))
                <div class="community_image col-md-4">
                    <img src="{{ asset('storage/image/' . $page->image1_path) }}" class="img-fluid">
                </div>
                @endif
                @if (!is_null($page->image2_path))
                <div class="community_image col-md-4">
                    <img src="{{ asset('storage/image/' . $page->image2_path) }}" class="img-fluid">
                </div>
                @endif
                @if (!is_null($page->image3_path))
                <div class="community_image col-md-4">
                    <img src="{{ asset('storage/image/' . $page->image3_path) }}" class="img-fluid">
                </div>
                @endif
                @if (!is_null($page->video1_link))
                <div class="video_link col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $page->video1_link }}" allowfullscreen></iframe>
                    </div>
                </div>
                @endif
                @if (!is_null($page->video2_link))
                <div class="video_link col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $page->video2_link }}" allowfullscreen></iframe>
                    </div>
                </div>
                @endif
                @if (!is_null($page->video3_link))
                <div class="video_link col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $page->video3_link }}" allowfullscreen></iframe>
                    </div>
                </div>
                @endif
            </div>
            @if (!is_null($page->message))
            <div class="form-group row">
                <div class="message col-md-12 mx-auto">
                    <h2>代表者メッセージ</h2>
                    <div class="balloon1">
                        @if (!is_null($page->message_image_path))
                            <div class="icon"><img src="{{ asset('storage/image/' . $page->message_image_path) }}" class="img-fluid  "></div>
                        @endif
                        <div class="balloon-text-right">
                            <p>{!! nl2br(e($page->message)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="form-group row">
                <div class="contact col-md-12 mx-auto">
                    <h2>お問い合わせ</h2>
                    <div class="text col-md-12">
                        <p>{!! nl2br(e($page->contact)) !!}</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="facebook_link col-md-12 mx-auto">
                  <h2>各種SNSやウェブサイト</h2>
                  <p>各種SNSやウェブサイトで最新の情報を更新しています。</p>
                      @if (!is_null($page->facebook_link))
                      <ul class="snsbtniti2">
                          <li class ="col-md-12 mx-auto"><a href="{{ $page->facebook_link }}" class="flowbtn11 fl_fb1"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                      </ul>
                      @endif
                      @if (!is_null($page->instagram_link))
                      <ul class="snsbtniti2">
                          <li class ="col-md-12 mx-auto"><a href="{{ $page->instagram_link }}" class="flowbtn11 insta_btn11"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
                      </ul>
                      @endif
                      @if (!is_null($page->website_link))
                      <ul class="snsbtniti2">
                          <li class ="col-md-12 mx-auto"><a href="{{ $page->website_link }}" class="flowbtn11 fl_web11"><i class="fas fa-laptop"></i><span>Website</span></a></li>
                      </ul>
                      @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 page-return">
                    <a href="http://127.0.0.1:8000/#pref-title" class="btn-flat-border">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
