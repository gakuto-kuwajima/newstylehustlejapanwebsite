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
                        <table class="table table-active">
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
                                                    <a href="/community/{{ $community->permalink }}" target="_blank">表示</a>
                                                </div>
                                                <div>
                                                    <a href="{{ action('CommunityRepController@communityedit', ['id'=> $community->id]) }}">編集</a>
                                                </div>
                                                <div>
                                                    <a href=""data-toggle="modal" data-target="#myModal">削除</a>
                                                    <!-- モーダルの設定 -->
                                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">消去の確認</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                            <p>本当に消去しますか？</p>
                                                            <p>（一度消去すると復旧することはできません）</p>
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                                            <a class="btn btn-primary" href="{{ action('CommunityRepController@communitydelete', ['id'=> $community->id]) }}" role="button">消去する</a>
                                                          </div><!-- /.modal-footer -->
                                                        </div><!-- /.modal-content -->
                                                      </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
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
            @if(isset($community) && $community->user_id==Auth::id())
            <div class="paginate d-flex justify-content-center">
                {{ $pages->links() }}
            </div>
            @endif
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
                        <table class="table table-active">
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
                                                    <a href="/news/{{ $news->news_permalink }}" target="_blank">表示</a>
                                                </div>
                                                <div>
                                                    <a href="{{ action('CommunityRepController@newsedit', ['id'=> $news->id]) }}">編集</a>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="modal" data-target="#myModal">削除</a>
                                                    <!-- モーダルの設定 -->
                                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">消去の確認</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                            <p>本当に消去しますか？</p>
                                                            <p>（一度消去すると復旧することはできません）</p>
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                                            <a class="btn btn-primary" href="{{ action('CommunityRepController@newsdelete', ['id'=> $news->id]) }}" role="button">消去する</a>
                                                          </div><!-- /.modal-footer -->
                                                        </div><!-- /.modal-content -->
                                                      </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
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
