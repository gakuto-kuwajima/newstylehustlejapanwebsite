@extends('layouts.search')

@section('content')
    <div class="container">
        <hr class="style">
            <div class="row">
                <div class="posts col-md-10 mx-auto mt-3">
                  <h1>"{{ $keywords }}"の検索結果</h1>
                    <hr class="post-style">
                    @foreach($posts as $post)
                        <a href="http://127.0.0.1:8000/community/page/{{ $post->id }}" class="post-link">
                        <div class="post">
                            <div class="row no-gutters">
                                <div class="col-5 caption">
                                    <div class="image">
                                        @if ($post->eyecatch_path)
                                            <img src="{{ asset('storage/image/' . $post->eyecatch_path) }}" class="img-fluid">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-7 search-text-container">
                                <div class="search-text">
                                    <div class="post-title">
                                        @if ($post->name)
                                            <p class="name mx-auto">{{ str_limit($post->name, 100) }}</p>
                                        @endif
                                        @if ($post->pref)
                                            <p class="pref mx-auto">({{ str_limit($post->pref, 100) }})</p>
                                        @endif
                                    </div>
                                    <div class="date">
                                        {{ $post->updated_at->format('Y年m月d日') }}
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
    </div>
@endsection
