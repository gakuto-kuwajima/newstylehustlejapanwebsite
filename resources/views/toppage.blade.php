@extends('layouts.toppage')

@section('content')
    <div class="container">
        <div class="top">
            <div class="row no-gutters">
                <div class="top-image">
                    <video src="{{ asset('movies/newstylehustlejapan2017.mp4')}}" muted autoplay loop class="img-fluid" id="top-movie"></video>
                    <img src="{{ asset('img/newstylehustlejapan-white.png')}}" class="img-fluid" id="top-icon">
                    <h1>NEW STYLE HUSTLE<br>JAPAN WEBSITE</h1>
                </div>
            </div>
        </div>
        <div class="section1">
            <div class="row no-gutters">
                <div class="text col-md-6">
                    <div class="section-h2">
                        <h2>ABOUT<br>NEW STYLE HUSTLE</h2>
                    </div>
                    <div class="section-text">
                        <p>世界中で踊られている最新のペアダンス、それがニュースタイルハッスル。<br>1970年代に流行したディスコダンス「ハッスル」を元に、2009年ごろにニューヨークで誕生しました。<br>自由な発想で、自分たちの好きな音楽をパートナーと表現します。</p>
                    </div>
                    <div class="section1-link">
                        <a href="#" class="section1-button">
                            <i class="fa fa-caret-right"></i> もっと詳しく
                        </a>
                    </div>
                </div>
                <div class="image col-md-6">
                    <img src="{{ asset('img/zabueri_example.jpg')}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="section2">
            <div class="row no-gutters">
                <div class="text col-md-6 order-md-2">
                    <div class="section-h2">
                        <h2>NEW STYLE HUSTLE<br>JAPAN WEBSITE</h2>
                    </div>
                    <div class="section-text">
                        <p>日本でも大きな広がりを見せるニュースタイルハッスル。<br>2017年には創始者Jeff Selby(ジェフ・セルビー)とRobyn Baltzer（ロビン・バルツァー）が来日。<br>（※動画参照）<br>このサイトでは日本のニュースタイルハッスルの情報を紹介します。</p>
                    </div>
                </div>
                <div class="image col-md-6 order-1-md-1">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3hbyl5Hfmqc?rel=0" allowfullscreen></iframe>
                    </div>
               </div>
            </div>
        </div>
        <div class="section4">
            <div class="row no-gutters">
                <div class="col-md-12 section4-title">
                    <div class="section-h2 sectin4-h2">
                        <h2>NEWS</h2>
                    </div>
                </div>
                <div class="posts col-md-9 mx-auto section4-news-title">

                   @foreach($posts as $post)
                   <a href="http://127.0.0.1:8000/news/{{ $post->news_permalink }}" class="post-link">
                   <div class="post post-wrapper">
                       <div class="ribbon16-content">
                           <span class="ribbon16">NEW</span>
                       </div>
                        <div class="post">
                            <div class="caption">
                                <div class="news-image mx-auto">
                                    @if ($post->news_eyecatch_path)
                                        <img src="{{ asset('storage/image/' . $post->news_eyecatch_path) }}" class="img-fluid object-fit-img">
                                    @else
                                        <img src="{{ asset('img/no_image.png') }}" class="img-fluid object-fit-img">
                                    @endif
                                </div>
                            </div>
                            <div class="search-text-container">
                                <div class="search-text">
                                    <div class="date">
                                        <p>{{ $post->created_at->format('Y年m月d日') }}</p>
                                    </div>
                                    <div class="post-title">
                                        <p class="title mx-auto">{{ str_limit($post->news_title, 100) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </a>
                  @endforeach
                  <div class="section4-link">
                      <a href="http://127.0.0.1:8000/news/" class="section4-button">
                          <i class="fa fa-caret-right"></i> NEWS一覧へ
                      </a>
                  </div>
                </div>
            </div>
        </div>
        <div class="section3">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="section-h2" id="pref-title">
                        <h2>Japan Communities</h2>
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
    </div>
@endsection
