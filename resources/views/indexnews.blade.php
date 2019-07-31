@extends('layouts.search')

@section('content')
    <div class="container">
    <hr class="style">
        <div class="search-news row">
            <div class="posts col-md-9 mx-auto mt-3">
                <div class="indexnews-title">
                    <h2>NEWS一覧</h2>
                </div>

                @foreach($posts as $post)
                <a href="http://127.0.0.1:8000/news/{{ $post->news_permalink }}" class="post-link">
                <div class="post-wrapper">
                     <div class="post">
                         <div class="caption">
                             <div class="image mx-auto">
                                 @if ($post->news_eyecatch_path)
                                     <img src="{{ asset('storage/image/' . $post->news_eyecatch_path) }}" class="img-fluid object-fit-img">
                                 @else
                                     <img src="{{ asset('img/no_image.png') }}" class="img-fluid object-fit-img">
                                 @endif
                             </div>
                         </div>
                         <div class="search-text-container">
                             <div class="search-text">
                                 <div class="post-title">
                                     <p class="title mx-auto">{{ str_limit($post->news_title, 100) }}</p>
                                 </div>
                                 <div class="date">
                                     <p>{{ $post->created_at->format('Y年m月d日') }}</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                   </div>
               </a>
               @endforeach
            </div>
        </div>
        <div class="paginate d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
        <div class="form-group row">
           <div class="col-md-12 page-return">
               <button type="button" onclick="history.back()" class="btn-flat-border">戻る</button>
           </div>
        </div>
      </div>
  @endsection
