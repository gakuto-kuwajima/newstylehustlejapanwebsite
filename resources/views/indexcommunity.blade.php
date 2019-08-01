@extends('layouts.indexcommunity')

@section('content')
    <div class="container">
    <hr class="style">
        <div class="section3">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="section-h1" id="pref-title">
                        <h1>Japan Communities</h1>
                    </div>
              　    <div class="section3-text col-md-9 mx-auto">
                  　   <p>全国にあるニュースタイルハッスルのコミュニティの一覧です。<br>住んでいる地域、または訪れる予定がある場所の近くにコミュニティがあったらぜひのぞいてみてください。</p>
              　    </div>
                    <div class="pref col-md-9 mx-auto">
                        <div class="pref-container">
                            <div class="hokkaido region">
                                <h3 class="region-name">北海道地方</h3>
                                <p>コミュニティなし</p>
                            </div>
                            <div class="tohoku region">
                        　      <h3 class="region-name">東北地方</h3>
                          　    <div class="tohoku-list">
                            　　    <a href="http://127.0.0.1:8000/community/page/1" class="tohoku-btn">宮城</a>
                                </div>
                            </div>
                            <div class="kanto region">
                                <h3 class="region-name">関東地方</h3>
                                <div class="kanto-list">
                                    <a href="#" class="kanto-btn-tokyo"><span class="pref-btn1">TYO</span><br><span class="pref-btn2">(東京)</span></a>
                                    <a href="#" class="kanto-btn-tokyo"><span class="pref-btn1">Zabu&Eri<br></span><span class="pref-btn2">(東京)</span></a>
                                    <a href="#" class="kanto-btn">千葉</a>
                                    <a href="#" class="kanto-btn">埼玉</a>
                                    <a href="#" class="kanto-btn">栃木</a>
                                </div>
                            </div>
                            <div class="chubu region">
                                <h3 class="region-name">中部地方</h3>
                                <div class="chubu-list">
                            　      <a href="#" class="chubu-btn">愛知</a>
                            　      <a href="#" class="chubu-btn">山梨</a>
                                </div>
                            </div>
                            <div class="kansai region">
                                <h3 class="region-name">関西地方</h3>
                                <div class="kansai-list">
                                    <a href="#" class="kansai-btn">大阪</a>
                                </div>
                            </div>
                            <div class="chugoku region">
                                <h3 class="region-name">中国地方</h3>
                                <div class="chugoku-list">
                            　       <a href="#" class="chugoku-btn">広島</a>
                                </div>
                            </div>
                            <div class="shikoku region">
                          　    <h3 class="region-name">四国地方</h3>
                                <div class="chugoku-list">
                          　　      <a href="#" class="shikoku-btn">愛媛</a>
                                </div>
                            </div>
                            <div class="kyushu-okinawa region">
                          　    <h3 class="region-name">九州・沖縄地方</h3>
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
    </div>
@endsection
