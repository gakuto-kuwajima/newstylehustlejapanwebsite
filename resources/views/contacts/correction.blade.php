@extends('layouts.contact')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto contact-form">
            <div class="panel panel-default">
                <div class="section-h1">
                    <h1>お問い合わせ</h1>
                </div>
                <div class="contact-conditions">
                    <p>各コミュニティに対してのお問い合わせは各コミュニティへお願いします。<br>それ以外のお問い合わせに限り以下のフォームからお問い合わせください。</p>
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

                        <div class="form-group row">
                            <label class="col-md-12" for="name">お名前（必須）</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" value="{{ $contact->name }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12" for="email">メールアドレス（必須）</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="email" autocomplete="off" value="{{ $contact->email }}" >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12" for="subject">件名（必須）</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" value="{{ $contact->subject }}" >
                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12" for="body">内容（必須）</label>
                            <div class="col-md-12">
                                <textarea class="form-control" name="body" rows="7" >{{ $contact->body }}</textarea>
                                @if ($errors->has('body'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="form-group text-center button">
                            <input type="submit" class="btn btn-primary button-css" value="確認">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
