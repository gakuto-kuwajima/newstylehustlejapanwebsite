@extends('layouts.indexcommunity')

@section('title', '全国のニュースタイルハッスルのコミュニティ')
@section('metadescription', '日本のニュースタイルハッスルのコミュニティ一覧です。')

@section('ogtitle', '全国のニュースタイルハッスルのコミュニティ')
@section('ogurl'){{ url('/community') }}@endsection
@section('ogimage'){{ asset('img/japan-communities-eyecatch.png')}}@endsection


@section('content')
    <div class="title_box">
        <h1>JAPAN COMMUNITIES</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
          　    <div class="section3-text mx-auto">
              　   <p>全国にあるニュースタイルハッスルのコミュニティの一覧です。<br>お住まいの地域、または訪れる予定がある場所の近くにコミュニティがあったらぜひチェックしてみてください。</p>
          　    </div>
                <div class="pref mx-auto">
                    <div class="pref-container">
                        <div class="hokkaido region">
                            <div class="region-name">
                                <p>北海道地方 (Hokkaido region)</p>
                            </div>
                            <p>コミュニティなし</p>
                        </div>
                        <div class="tohoku region">
                            <div class="region-name">
                                <p>東北地方 (Tohoku region)</p>
                            </div>
                      　    <div class="tohoku-list">
                        　　    <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'miyagi'])}}" class="tohoku-btn"><span class="pref-btn1">宮城</span><br><span class="pref-btn2">(Miyagi)</span></a>
                            </div>
                        </div>
                        <div class="kanto region">
                            <div class="region-name">
                                <p>関東地方 (Kanto region)</p>
                            </div>
                            <div class="kanto-list">
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tyo'])}}" class="kanto-btn"><span class="pref-btn1">TYO</span><br><span class="pref-btn2">(Tokyo)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'zabueri'])}}" class="kanto-btn-tokyo"><span class="pref-btn1">Zabu&Eri<br></span><span class="pref-btn2">(Tokyo)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'chiba'])}}" class="kanto-btn"><span class="pref-btn1">千葉</span><br><span class="pref-btn2">(Chiba)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'saitama'])}}" class="kanto-btn"><span class="pref-btn1">埼玉</span><br><span class="pref-btn2">(Saitama)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tochigi'])}}" class="kanto-btn"><span class="pref-btn1">栃木</span><br><span class="pref-btn2">(Tochigi)</span></a>
                            </div>
                        </div>
                        <div class="chubu region">
                            <div class="region-name">
                                <p>中部地方 (Chubu region)</p>
                            </div>
                            <div class="chubu-list">
                        　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'aichi'])}}" class="chubu-btn"><span class="pref-btn1">愛知</span><br><span class="pref-btn2">(Aichi)</span></a>
                        　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'yamanashi'])}}" class="chubu-btn"><span class="pref-btn1">山梨</span><br><span class="pref-btn2">(Yamanashi)</span></a>
                            </div>
                        </div>
                        <div class="kansai region">
                            <div class="region-name">
                                <p>関西地方 (Kansai region)</p>
                            </div>
                            <div class="kansai-list">
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'osaka'])}}" class="kansai-btn"><span class="pref-btn1">大阪</span><br><span class="pref-btn2">(Osaka)</span></a>
                            </div>
                        </div>
                        <div class="chugoku region">
                            <div class="region-name">
                                <p>中国地方 (Chugoku region)</p>
                            </div>
                            <div class="chugoku-list">
                        　       <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'hiroshima'])}}" class="chugoku-btn"><span class="pref-btn1">広島</span><br><span class="pref-btn2">(Hiroshima)</span></a>
                            </div>
                        </div>
                        <div class="shikoku region">
                            <div class="region-name">
                                <p>四国地方 (Shikoku region)</p>
                            </div>
                            <div class="chugoku-list">
                      　　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'ehime'])}}" class="shikoku-btn"><span class="pref-btn1">愛媛</span><br><span class="pref-btn2">(Ehime)</span></a>
                            </div>
                        </div>
                        <div class="kyushu-okinawa region">
                            <div class="region-name">
                                <p>九州・沖縄地方 (kyushu & Okinawa region)</p>
                            </div>
                            <div class="kyushu-okinawa-list">
                    　　        <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'okinawa'])}}" class="kyushu-okinawa-btn"><span class="pref-btn1">沖縄</span><br><span class="pref-btn2">(Okinawa)</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12 page-return">
               <button type="button" onclick="location.href='/' " class="btn-flat-border">HOMEへ</button>
           </div>
        </div>
    </div>
@endsection
