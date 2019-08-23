@extends('layouts.search')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="section-h1">
                    <h1>Search</h1>
                </div>
                <div class="search-news">
                    <div class="posts">
                      <h2>"{{ $keywords }}"のNEWS検索結果</h2>
                        <hr class="search-title-style">
                        @if(count($posts))
                            <hr class="post-style">
                        @endif
                        @if(!count($posts))
                            {{ $nonewsresult }}
                        @else
                            @foreach($posts as $post)
                            <a href="http://127.0.0.1:8000/news/{{ $post->news_permalink }}" class="post-link">
                            <div class="post-container">
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
                                                 <p class="name mx-auto">{{ str_limit($post->pref, 100) }}</p>
                                             </div>
                                             <div class="date">
                                                 <p><i class="far fa-calendar-alt"></i>{{ $post->created_at->format('Y年m月d日') }}</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                               </div>
                           </a>
                           <hr class="post-style">
                           @endforeach
                       @endif
                    </div>
                </div>
                <div class="paginate d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
                <div class="search-community">
                    <div class="posts">
                      <h2>"{{ $keywords }}"のコミュニティ検索結果</h2>
                        <hr class="search-title-style">
                        @if(count($pages))
                            <hr class="post-style">
                        @endif
                        @if(!count($pages))
                            {{ $nocommunityresult }}
                        @else
                            @foreach($pages as $page)
                                <a href="http://127.0.0.1:8000/community/{{ $page->permalink }}" class="post-link">
                                <div class="post-container">
                                     <div class="post">
                                         <div class="caption">
                                             <div class="image mx-auto">
                                                @if ($page->eyecatch_path)
                                                    <img src="{{ asset('storage/image/' . $page->eyecatch_path) }}" class="img-fluid object-fit-img">
                                                @else
                                                    <img src="{{ asset('img/no_image.png') }}" class="img-fluid object-fit-img">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="search-text-container">
                                            <div class="search-text">
                                              <div class="post-title">
                                                  <p class="name mx-auto">{{ str_limit($page->name, 100) }}</p>
                                              </div>
                                              <div class="date">
                                                  <p><i class="far fa-calendar-alt"></i>{{ $page->created_at->format('Y年m月d日') }}</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </a>
                            <hr class="post-style">
                            @endforeach
                        @endif
                     </div>
                 </div>
                 <div class="paginate d-flex justify-content-center">
                     {{ $pages->links() }}
                 </div>
                 <div class="form-group">
                    <div class="page-return">
                        <button type="button" onclick="history.back()" class="btn-flat-border">戻る</button>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
