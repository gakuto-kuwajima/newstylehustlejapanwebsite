@extends('layouts.admin')
@section('title', '作成コミュニティ一覧')

@section('content')
    <div class="container">
        <div class="row index-title col-md-12">
            <h2>作成コミュニティ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4 create-new">
                <a href="{{ action('Admin\CommunityController@add') }}" role="button" class="btn btn-success">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\CommunityController@index')}}" method="get">
                    <div class="form-group row">
                        <div class="col-md-9 search-box">
                            <input type="text" class="form-control" name="keywords" value={{ $keywords }}>
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field()}}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="index-community">
                <div class="row col-md-12 mx-auto">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                              <th width="5%">ID</th>
                              <th width="25%">コミュニティ名</th>
                              <th width="50%">コミュニティ情報</th>
                              <th width="20%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $community)
                                <tr>
                                    <th>{{ $community->id }}</th>
                                    <td>{{ str_limit($community->name, 100) }}</td>
                                    <td>{{ str_limit($community->information, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\CommunityController@edit', ['id'=> $community->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\CommunityController@delete', ['id'=> $community->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
