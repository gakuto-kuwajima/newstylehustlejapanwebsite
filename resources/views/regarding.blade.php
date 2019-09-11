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
                    <h2>当サイトの目的と作成者</h2>
                    <p>当サイト「NEW STYLE HUSTLE JAPAN UNOFFICIAL WEBSITE」は、ニュースタイルハッスルの情報を分かりやすく伝えることや、各地のコミュニティの活動を応援することを目的として、NEW STYLE HUSTLE MIYAGIの代表（2019年現在）である桑嶋学人によって作成されました。</p>
                </div>
                <div class="section-h2">
                    <h2>当サイトの情報について</h2>
                    <p>各コミュニティページは基本的に各コミュニティが執筆・編集しています。もし各コミュニティに質問などがある場合は<a href="/community">各コミュニティページ</a>を確認して、各コミュニティへ直接ご連絡していただけると幸いです。</p>
                </div>
                <div class="section-h2">
                    <h2>UNOFFICIAL（非公式）を明記している理由</h2>
                    <p>当サイトはニュースタイルハッスル創始者のジェフとパートナーのロビンに許可をいただき、当初単純に情報を伝達するための目的で作成されていました。<br>しかし作成していく中で「公式サイトとして見られる可能性があり、記載漏れがあった場合、記載漏れのコミュニティが非公式と見られてしまうのではないか」というご指摘があったため、ならばいっそのこと当サイトを「非公式」としてしまおうということになりました。<br>ですがそもそも作成者はこのサイトを作成するにあたって公式、非公式などの考えは全くなく、当サイトに記載希望のニュースタイルハッスルのコミュニティはすべて記載させていただく考えであることもここに明記いたします。</p>
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
