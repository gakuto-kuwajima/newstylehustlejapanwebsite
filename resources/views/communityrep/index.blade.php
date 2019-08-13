@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div class="container">
        <div class="row index-title col-md-12">
            <h2>{{Auth::user()->name}}のマイページ</h2>
        </div>
        <div class="index-community">
            <div class="row index-community-title col-md-12">
                <h3>作成コミュニティ一覧</h3>
            </div>
            <div class="row">
                <div class="col-md-4 create-new">
                    <a href="{{ action('CommunityRepController@communityadd') }}" role="button" class="btn btn-success">コミュニティ新規作成</a>
                </div>
            </div>
            <div class="row">
                <div class="index-community-table col-md-12 mx-auto">
                    <div class="row">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th width="25%">コミュニティ名</th>
                                    <th width="55%">コミュニティ情報</th>
                                    <th width="20%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $community)
                                    @if($community->user_id==Auth::id())
                                        <tr>
                                            <th>{{ str_limit($community->name, 100) }}</th>
                                            <td>{{ str_limit($community->information, 100) }}</td>
                                            <td>
                                                <div>
                                                    <a href="http://127.0.0.1:8000/community/{{ $community->permalink }}" target="_blank">表示</a>
                                                </div>
                                                <div>
                                                    <a href="{{ action('CommunityRepController@communityedit', ['id'=> $community->id]) }}">編集</a>
                                                </div>
                                                <div>
                                                    <a href="{{ action('CommunityRepController@communitydelete', ['id'=> $community->id]) }}">削除</a>
                                                </div>
                                            </td>
                                        </tr>
                                   @endif
                                @endforeach
                            </tbody>
                        </table>
                   </div>
               </div>
            </div>
        </div>
        <div class="index-news">
            <div class="row index-news-title col-md-12">
                <h3>作成ニュース一覧</h3>
            </div>
            <div class="row">
                <div class="col-md-4 create-new">
                    <a href="{{ action('CommunityRepController@newsadd') }}" role="button" class="btn btn-success">ニュース新規作成</a>
                </div>
                <div class="col-md-8">
                    <form action="{{ action('CommunityRepController@index')}}" method="get">
                        <div class="form-group row">
                            <div class="col-md-9 search-box">
                                <input type="text" class="form-control" name="newskeywords" value={{ $newskeywords }}>
                            </div>
                            <div class="col-md-2">
                                {{ csrf_field()}}
                                <input type="submit" class="btn btn-primary" value="ニュース検索">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="index-news-tabls col-md-12 mx-auto">
                    <div class="row">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th width="25%">タイトル</th>
                                    <th width="55%">本文</th>
                                    <th width="20%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $news)
                                    @if($news->user_id==Auth::id())
                                        <tr>
                                            <th>{{ str_limit($news->news_title, 100) }}</th>
                                            <td>{{ str_limit($news->news_body, 100) }}</td>
                                            <td>
                                                <div>
                                                    <a href="http://127.0.0.1:8000/news/{{ $news->news_permalink }}" target="_blank">表示</a>
                                                </div>
                                                <div>
                                                    <a href="{{ action('CommunityRepController@newsedit', ['id'=> $news->id]) }}">編集</a>
                                                </div>
                                                <div>
                                                    <a href="{{ action('CommunityRepController@newsdelete', ['id'=> $news->id]) }}">削除</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if(isset($news) && $news->user_id==Auth::id())
            <div class="paginate d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
            @endif
        </div>
    </div>
@endsection
