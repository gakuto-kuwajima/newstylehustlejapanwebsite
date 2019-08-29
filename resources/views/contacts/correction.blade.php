@extends('layouts.contact')

@section('title', 'お問い合わせの修正 | NEW STYLE HUSTLE JAPAN WEBSITE')

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
                                <input type="text" class="form-control form-contact" name="name" value="{{ $contact->name }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12" for="email">メールアドレス（必須）</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-contact" name="email" autocomplete="off" value="{{ $contact->email }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12" for="subject">件名（必須）</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-contact" name="subject" value="{{ $contact->subject }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12" for="body">内容（必須）</label>
                            <div class="col-md-12">
                                <textarea class="form-control form-contact" name="body" rows="7" >{{ $contact->body }}</textarea>
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
    <div class="row">
       <div class="col-md-12 page-return">
           <button type="button" onclick="location.href='{{ action('ReadingPageController@toppage') }}' " class="btn-flat-border">HOMEへ</button>
       </div>
    </div>
</div>
@endsection
