@extends('layouts.contact')

@section('title', 'お問い合わせの確認 | NEW STYLE HUSTLE JAPAN WEBSITE')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="panel panel-default">
                <div class="panel heading section-h1">
                    <h1>お問い合わせ</h1>
                </div>
                <div class="panel-body">
                    <p>誤りがないことを確認の上送信ボタンをクリックしてください。</p>

                    <table class="table table-responsive-md">
                        <tr>
                            <th>お名前</th>
                            <td>{{ $contact->name }}</td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th>件名</th>
                            <td>{{ $contact->subject }}</td>
                        </tr>
                        <tr>
                            <th>内容</th>
                            <td>{!! nl2br(e($contact->body)) !!}</td>
                        </tr>
                    </table>

                    <div class="correction-btn text-center">
                        <form action="{{ action('ContactsController@correct') }}" method="post" enctype="multipart/form-data">
                            <input class="form-control" name="name" type="hidden" value="{{ $contact->name }}" >
                            <input class="form-control" name="email" type="hidden" value="{{ $contact->email }}" >
                            <input class="form-control" name="subject" type="hidden" value="{{ $contact->subject }}" >
                            <input class="form-control" name="body" type="hidden" value="{{ $contact->body }}" >
                            {{ csrf_field() }}
                            <input type="submit" class="btn-flat-border" value="修正">
                        </form>
                    </div>
                    <div class="send-btn text-center">
                        <form action="{{ action('ContactsController@complete') }}" method="post" enctype="multipart/form-data">
                            @foreach($contact->getAttributes() as $key => $value)
                                @if(isset($value))
                                    @if(is_array($value))
                                        @foreach($value as $subValue)
                                            <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                                        @endforeach
                                    @else
                                        <input name="{{ $key }}" type="hidden" value="{{ $value }}">
                                    @endif
                                @endif
                            @endforeach
                            {{ csrf_field() }}
                            <input type="submit" class="btn-primary  button-css" value="送信">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
