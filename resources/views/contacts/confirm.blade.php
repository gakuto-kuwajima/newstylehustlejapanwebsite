@extends('layouts.contact')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
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
                        <input type="submit" class="btn-primary" value="送信">
                    </form>
                    <div class="return-button">
                        <input type="button" onclick="history.back()" class="btn-flat-border" value="戻る">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
