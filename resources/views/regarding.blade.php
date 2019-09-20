@extends('layouts.privacy_policy')

@section('title', '当サイトについて')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto contact-form">
            <div class="panel panel-default">
                <div class="section-h1">
                    <h1>当サイトについて</h1>
                </div>
                <div class="section-h2">
                    <h2>当サイトの目的</h2>
                    <p>当サイト「GAKUTOのニュースタイルハッスル情報部屋」は、ニュースタイルハッスルの情報を分かりやすく伝えることや、各地のコミュニティの活動を応援することを目的として作成されました。</p>
                </div>
                <div class="section-h2">
                    <h2>GAKUTOって誰？</h2>
                    <p>GAKUTOは、NEW STYLE HUSTLE MIYAGIの代表（2019年現在）であり、ニュースタイルハッスルが大好きなストリートダンサーです。（本名：桑嶋学人）<br><br>下記はGAKUTOの各SNSです。</p>
                    <p><a href="https://www.facebook.com/gakuto.kuwajima">Facebook</a>・<a href="https://twitter.com/mydance365">Twitter</a>・<a href="https://www.instagram.com/gakutototo/">instagram</a>・<a href="https://mydance365.com/">ブログ</a>
                </div>
                <div class="section-h2">
                    <h2>当サイトの情報について</h2>
                    <p>各コミュニティページは基本的に各コミュニティが執筆・編集しています。もし各コミュニティに質問などがある場合は<a href="/community">各コミュニティページ</a>を確認して、各コミュニティへ直接ご連絡していただけると幸いです。</p>
                </div>
                <div class="section-h2">
                    <h2>記載していただけるコミュニティを募集中！</h2>
                    <p>当サイトに記載していただけるニュースタイルハッスルのコミュニティを随時募集しています！<br>記載希望のコミュニティは大変お手数ですが<a href="/contact">お問い合わせフォーム</a>までご連絡ください。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-md-12 page-return news-page-return">
          <button type="button" onclick="history.back()" class="btn-flat-border">戻る</button>
       </div>
    </div>
    </div>
</div>
@endsection
