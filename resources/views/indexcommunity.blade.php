@extends('layouts.indexcommunity')

@section('content')
    <div class="title_box">
        <h1 class="title">Japan Communities</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
          　    <div class="section3-text mx-auto">
              　   <p>全国にあるニュースタイルハッスルのコミュニティの一覧です。<br>住んでいる地域、または訪れる予定がある場所の近くにコミュニティがあったらぜひのぞいてみてください。</p>
          　    </div>
                <div class="pref mx-auto">
                    <div class="pref-container">
                        <div class="hokkaido region">
                            <div class="region-name">
                                <p>北海道地方</p>
                            </div>
                            <p>コミュニティなし</p>
                        </div>
                        <div class="tohoku region">
                            <div class="region-name">
                                <p>東北地方</p>
                            </div>
                      　    <div class="tohoku-list">
                        　　    <a href="http://127.0.0.1:8000/community/page/1" class="tohoku-btn">宮城</a>
                            </div>
                        </div>
                        <div class="kanto region">
                            <div class="region-name">
                                <p>関東地方</p>
                            </div>
                            <div class="kanto-list">
                                <a href="#" class="kanto-btn-tokyo"><span class="pref-btn1">TYO</span><br><span class="pref-btn2">(東京)</span></a>
                                <a href="#" class="kanto-btn-tokyo"><span class="pref-btn1">Zabu&Eri<br></span><span class="pref-btn2">(東京)</span></a>
                                <a href="#" class="kanto-btn">千葉</a>
                                <a href="#" class="kanto-btn">埼玉</a>
                                <a href="#" class="kanto-btn">栃木</a>
                            </div>
                        </div>
                        <div class="chubu region">
                            <div class="region-name">
                                <p>中部地方</p>
                            </div>
                            <div class="chubu-list">
                        　      <a href="#" class="chubu-btn">愛知</a>
                        　      <a href="#" class="chubu-btn">山梨</a>
                            </div>
                        </div>
                        <div class="kansai region">
                            <div class="region-name">
                                <p>関西地方</p>
                            </div>
                            <div class="kansai-list">
                                <a href="#" class="kansai-btn">大阪</a>
                            </div>
                        </div>
                        <div class="chugoku region">
                            <div class="region-name">
                                <p>中国地方</p>
                            </div>
                            <div class="chugoku-list">
                        　       <a href="#" class="chugoku-btn">広島</a>
                            </div>
                        </div>
                        <div class="shikoku region">
                            <div class="region-name">
                                <p>四国地方</p>
                            </div>
                            <div class="chugoku-list">
                      　　      <a href="#" class="shikoku-btn">愛媛</a>
                            </div>
                        </div>
                        <div class="kyushu-okinawa region">
                            <div class="region-name">
                                <p>九州・沖縄地方</p>
                            </div>
                            <div class="kyushu-okinawa-list">
                    　　        <a href="#" class="kyushu-okinawa-btn">沖縄</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
       <div class="col-md-12 page-return">
           <button type="button" onclick="history.back()" class="btn-flat-border">戻る</button>
       </div>
    </div>
@endsection
