@extends('layouts.contact')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
           <hr color="#c0c0c0">
        </div>
        <div class="col-md-8 mx-auto contact-form">
            <div class="panel panel-default">
                <div class="section-h1">
                    <h1>お問い合わせ</h1>
                </div>
                <form action="{{ action('ContactsController@confirm') }}" method="post" enctype="multipart/form-data">
                <div class="panel-body">
                    {{-- エラーの表示 --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group row no-gutters">
                        <label class="col-md-12" for="name">お名前（必須）</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" >
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row no-gutters">
                        <label class="col-md-12" for="email">メールアドレス（必須）</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="email" autocomplete="off" value="{{ old('email') }}" >
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row no-gutters">
                        <label class="col-md-12" for="subject">件名（必須）</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" >
                            @if ($errors->has('subject'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row no-gutters">
                        <label class="col-md-12" for="body">内容(必須)</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="body" rows="7" >{{ old('body') }}</textarea>
                            @if ($errors->has('body'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="form-group text-center">
                        <input type="submit" class="btn-primary" value="確認">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
