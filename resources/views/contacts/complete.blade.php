@extends('layouts.contact')

@section('title', 'お問い合わせ送信完了')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto contact-form">
            <div class="panel panel-default">
                <div class="section-h1">
                    <h1>お問い合わせ</h1>
                </div>
                <div class="panel-body">
                    <p class="well well-lg text-center introduction">お問い合わせを送信いたしました</p>
                    <p>この度はNEW STYLE HUSTLE JAPANへお問い合わせいただきありがとうございます。<br>お問い合わせいただきました内容を確認後、担当者より改めてご連絡いたします。</p>
                    <p>通常3日以内にお問い合わせの返信をさせて頂きますが、お問い合わせ内容や混雑状況等によって前後する場合もございますので予めご了承ください。</p>
                    <p>また、ご記入いただいたメールアドレス宛にお問い合わせの確認メールを送信させていただきました。<br>お問い合わせ受付確認の自動返信メールが24時間以内に届かない場合は、メールアドレスの入力ミス等が考えられます。<br>その場合は大変お手数ですが、再度お問い合わせ画面にてご連絡いただきますようよろしくお願いいたします。<br>※迷惑メールフォルダに受信されている場合もございますので一度ご確認ください。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
   <div class="col-md-12 page-return">
       <button type="button" onclick="location.href='{{ action('ReadingPageController@toppage') }}' " class="btn-flat-border">HOMEへ</button>
   </div>
</div>
@endsection
