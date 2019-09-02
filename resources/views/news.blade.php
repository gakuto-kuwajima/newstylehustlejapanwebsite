@extends('layouts.front')

@section('title'){{ $post->news_title }}@endsection

@section('metadescription'){{ $post->news_body }}@endsection

@section('ogtitle'){{ $post->news_title }}@endsection
@section('ogurl'){{ url('/news/' . $post->news_permalink) }}@endsection
@section('ogimage'){{ asset('storage/image/' . $post->news_eyecatch_path) }}@endsection


@section('content')

<div class="container mx-auto">
    <div class="row">
        <div class="col-md-10 mx-auto">
          　<div class="news-title">
                <h1>{{ $post->news_title }}</h1>
            </div>
            <div class="row">
               <div class="news_created_at">
                   <p><i class="far fa-calendar-check"></i>{{ $post->created_at->format('Y年m月d日') }}</p>
               </div>
               @if (!is_null($post->news_writer))
               <div class="news_writer">
                   <p><i class="fas fa-pencil-alt"></i>{{ $post->news_writer }}</p>
               </div>
               @endif
            </div>
            <div class="news_eyecatch text-center">
                @if (!is_null($post->news_eyecatch_path))
                    <img src="{{ asset('storage/image/' . $post->news_eyecatch_path) }}"class="img-fluid" >
                @endif
            </div>
            <div class="row">
               <div class="news_body col-md-12 mx-auto">
                   <p>{!! nl2br(e($post->news_body)) !!}</p>
               </div>
            </div>
            @if (!is_null($post->news_image1_path))
            <div class="row">
               <div class="news_image col-md-9 mx-auto text-center">
                   <img src="{{ asset('storage/image/' . $post->news_image1_path) }}" class="img-fluid">
               </div>
            </div>
            @endif
            @if (!is_null($post->news_image2_path))
            <div class="row">
               <div class="news_image col-md-9 mx-auto text-center" >
                   <img src="{{ asset('storage/image/' . $post->news_image2_path) }}" class="img-fluid">
               </div>
            </div>
            @endif
            @if (!is_null($post->news_image3_path))
            <div class="row">
               <div class="news_image col-md-9 mx-auto text-center">
                   <img src="{{ asset('storage/image/' . $post->news_image3_path) }}" class="img-fluid">
               </div>
            </div>
            @endif
            @if (!is_null($post->news_video1_link))
            <div class="row">
               <div class="news_video_link col-md-9 mx-auto">
                   <div class="embed-responsive embed-responsive-16by9">
                       <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $post->news_video1_link }}" allowfullscreen></iframe>
                   </div>
               </div>
            </div>
            @endif
            @if (!is_null($post->news_video2_link))
            <div class="row">
                <div class="news_video_link col-md-9 mx-auto">
                   <div class="embed-responsive embed-responsive-16by9">
                       <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $post->news_video2_link }}" allowfullscreen></iframe>
                   </div>
                </div>
            </div>
            @endif
            @if (!is_null($post->news_video3_link))
            <div class="row">
                <div class="news_video_link col-md-9 mx-auto">
                   <div class="embed-responsive embed-responsive-16by9">
                       <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $post->news_video3_link }}" allowfullscreen></iframe>
                   </div>
                </div>
            </div>
            @endif
            @if (!is_null($post->news_website_link))
            <div class="row">
               <div class="news_website_link col-md-12 mx-auto">
                   <p　class="news_website_link_title">詳細ページ</p>
                   <p><a href="{{ $post->news_website_link }}">{{ $post->news_website_link }}</a></p>
               </div>
            </div>
            @endif
         </div>
     </div>
     <div class="row">
        <div class="col-md-12 page-return news-page-return">
           <button type="button" onclick="history.back()" class="btn-flat-border">戻る</button>
        </div>
     </div>
</div>
@endsection
