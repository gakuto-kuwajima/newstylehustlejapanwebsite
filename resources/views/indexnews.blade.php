@extends('layouts.indexnews')

@section('content')
    <div class="title_box">
        <h1 class="title">NEWS</h1>
    </div>
    <div class="container">
        <div class="search-news row">
            <div class="posts col-md-10 mx-auto">

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
        <div class="row">
           <div class="col-md-12 page-return">
               <button type="button" onclick="location.href='{{ action('ReadingPageController@toppage') }}' " class="btn-flat-border">HOMEへ</button>
           </div>
        </div>
  @endsection
