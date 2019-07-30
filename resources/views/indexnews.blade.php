@extends('layouts.search')

@section('content')
    <div class="container">
        <div class="search-news row">
            <div class="posts col-md-9 mx-auto mt-3">
                <div class="indexnews-title">
                    <h2>NEWS一覧</h2>
                </div>
                <hr class="post-style">
                @foreach($posts as $post)
                    <a href="http://127.0.0.1:8000/news/{{ $post->news_permalink }}" class="post-link">
                    <div class="post">
                        <div class="row no-gutters">
                            <div class="col-5 caption">
                                <div class="image">
                                    @if ($post->news_eyecatch_path)
                                        <img src="{{ asset('storage/image/' . $post->news_eyecatch_path) }}" class="img-fluid object-fit-img">
                                    @else
                                        <img src="{{ asset('img/no_image.png') }}" class="img-fluid object-fit-img">
                                    @endif
                                </div>
                            </div>
                            <div class="col-7 search-text-container">
                            <div class="search-text">
                                <div class="post-title">
                                    @if ($post->news_title)
                                        <p class="title mx-auto">{{ str_limit($post->news_title, 100) }}</p>
                                    @endif
                                </div>
                                <div class="date">
                                    <p><i class="far fa-calendar-alt"></i>{{ $post->updated_at->format('Y年m月d日') }}</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </a>
                <hr class="post-style">
                @endforeach
            </div>
        </div>
        <div class="form-group row">
           <div class="col-md-12 page-return">
               <button type="button" onclick="history.back()" class="btn-flat-border">戻る</button>
           </div>
        </div>
      </div>
  @endsection
