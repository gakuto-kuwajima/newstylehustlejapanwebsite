@extends('layouts.about')

@section('title', 'ニュースタイルハッスルとは')
@section('metadescription', 'ニュースタイルハッスルとはハッスル（ダンス）をベースとして、パートナーと音楽を感じながら自由にクリエイトできるダンスです。ジェフがハッスルにストリートダンスのフレーバーを組み込んでニュースタイルハッスルが誕生し、世界中で踊られることによって更なる進化を続けています。')

@section('ogtitle', 'ニュースタイルハッスルとは')
@section('ogurl'){{ url('/about-newstylehustle') }}@endsection
@section('ogimage'){{ asset('img/about-newstylehustle-eyecatch.png')}}@endsection


@section('content')
    <div class="title_box">
        <h1 class="title">NEW STYLE HUSTLEとは</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="section1">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>ニュースタイルハッスルって何？</h2>
                            </div>
                            <div class="section-text">
                                <p>「ニュースタイルハッスル（NEW STYLE HUSTLE）」というダンスをご存知ですか？<br>聞いたことがない方も多いかもしれません。<br><br>それもそのはず。ニュースタイルハッスル最近できたばかりの新しいペアダンスだからです。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section2">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>まずは動画で確認！</h2>
                            </div>
                            <div class="section-text">
                                <p>一度どんなダンスか動画で確認してみましょう！<br>以下はニュースタイルハッスルを作ったジェフ（Jeff Selby）と当時のパートナーであるニコル（Nicole）の動画です。</p>
                            </div>
                            <div class="video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/iGFKTiqBOBs?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="section-text text-top">
                                <p>どうですか!?<br>もしかしたら今まで皆さんが思っていたペアダンスとイメージが違うかもしれません。<br><br>ニュースタイルハッスルはとっても自由度が高いペアダンスなんです。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section3">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>ニュースタイルハッスルの誕生</h2>
                            </div>
                            <div class="section-text">
                                <p>ニュースタイルハッスルは2009年ごろにニューヨークで、「ハッスル」というペアダンスを元に誕生しました。（※）<br><br>先ほど動画でも紹介したストリートダンサーであるジェフが、従来のハッスルとは異なったスタイルで踊り始めます。<br><br>当時従来のハッスルとは違う踊り方であるという指摘もあったため、ジェフは新しいスタイルのハッスル、つまり「ニュースタイルハッスル（NEW STYLE HUSTLE）」と名付けました。</p>
                            </div>
                            <div class="video-bottom">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/yxYoCOpnYZw?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="section-text">
                                <p>その後ジェフと、パートナーのロビン（Robyn Baltzer）が普及活動を行います。</p>
                            </div>
                            <div class="video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/EWYVg9shvF0?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="section-image">
                                <img src="{{ asset('img/newstylehustle_jeff_robyn.jpg')}}" class="img-fluid" alt="ニュースタイルハッスル創始者のJeffとパートナーのRobynの写真">
                            </div>
                            <div class="image-text">
                                <p>※右がジェフ(Jeff Selby)、左がパートナーのロビン(Robyn Baltzer)</p>
                            </div>
                            <div class="section-text">
                                <p>自由度が高いニュースタイルハッスルは様々な世代に受け入れられ、世界中で踊られるようになりました。</p>
                            </div>
                            <div class="video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/DRfApB8x19E?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="section3-h3">
                                <h3>※ハッスルとは</h3>
                                <div class="section-text">
                                    <p>Hustle （ハッスル）とは1970年代に流行したディスコダンスです。ディスコミュージックやクラブミュージックで踊られ、ターンやスピンが多く、疾走感とダイナミックな流れが特徴的なペアダンスです。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section4">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>ニュースタイルハッスルとは</h2>
                            </div>
                            <div class="section-text">
                                <p>改めてニュースタイルハッスルとは、ハッスル（ダンス）をベースとして、パートナーと音楽を感じながら自由にクリエイトできるダンスです。<br><br>ジェフがハッスルにストリートダンスのフレーバーを組み込んでニュースタイルハッスルが誕生し、また世界中で踊られることによって更なる進化を続けています。</p>
                            </div>
                            <div class="video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/d_wjiwBe10w?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="section-text">
                                <p>以下では、その特徴をもう少し説明します。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section5">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>ニュースタイルハッスルの特徴</h2>
                            </div>
                            <div class="section-h3">
                                <h3>①動きが自由！</h3>
                                <div class="section-text">
                                    <p>動きはハッスルを元にしていますが、自分たちで様々な動きを創り出していいのがニュースタイルハッスルの大きな特徴です。<br>他のダンスの動きや自分たちが考えた動きが取り入れられてきました。</p>
                                </div>
                                <div class="video-end">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/NMcCkcoihBk?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="section-h3">
                                <h3>②音楽が自由！</h3>
                                <div class="section-text">
                                    <p>ニュースタイルハッスルには音楽の制限はありません。<br>自分たちの好きな曲で踊っていいんです。<br>今までもHouseやFunk、HIP HOP、R&Bなどのクラブミュージックはもちろん、Rockやクラシックなど様々な音楽で踊られてきました。</p>
                                </div>
                                <div class="video-end">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/NdMqhdWXats?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="section-h3-end">
                                <h3>③老若男女みんなが楽しめるダンス！</h3>
                                <div class="section-text">
                                    <p>見ているだけだと難しく感じるかもしれませんが、いざやってみると意外と短い時間でも楽しめてしまうのがニュースタイルハッスルです。<br>世界中で子供からご高齢の方まで楽しんでいます。<br>ニュースタイルハッスルを踊っている方で、それまではダンス未経験だった方も少なくありません。</p>
                                </div>
                                <div class="video-end">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/MLXUBIGVyrQ?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="box1">
                                <span class="box-title">もっと詳しく知りたい方は</span>
                                <p>2017年にNEW STYLE HUSTLE TYOがジェフとロビンにインタビューした記事にはニュースタイルハッスルがどういうダンスか更に詳しく書かれています。<br>ぜひそちらを参照してください。</p>
                                <p><a href="https://goo.gl/8Lon5S">Jeff Selby（ジェフ）インタビュー</a></p>
                                <p><a href="https://goo.gl/mt5qJn">Robyn Baltzer（ロビン）インタビュー</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-h2">
                                <h2>世界のニュースタイルハッスル</h2>
                            </div>
                            <div class="section-h3">
                              　<h3>様々な国で踊られているニュースタイルハッスル</h3>
                                <div class="section-text">
                                    <p>今や数多くの地域や国で踊られているニュースタイルハッスル。<br>以下の動画だけでも、アメリカ、イギリス、イタリア、チェコ、スロバキア、ポーランド、フィンランド、オーストリア、ベトナム、台湾、そして日本と多くの国で踊られていることが分かります。</p>
                                </div>
                                <div class="video-end">
                                    <div class="video-end embed-responsive embed-responsive-16by9">
                                        <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/LUToU1eOHTg?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="section-h3-end">
                              　<h3>国境を越えてのコラボ</h3>
                                <div class="section-text">
                                    <p>また以下の動画では日本のZabu&EriペアとポーランドのStazy&Malcelinaペアがコラボしています。<br>ニュースタイルハッスルは国境を越えて世界中の人々をつなげています。</p>
                                </div>
                                <div class="video-end">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/OwLHB8lbzVc?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section7">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>日本のニュースタイルハッスル</h2>
                            </div>
                            <div class="section-h3">
                              　<h3>NEW STYLE HUSTLE JAPAN</h3>
                                <p>以下の動画はジェフとロビンが来日した際に撮影したものです。<br><br>NEW STYLE HUSTLE TYOを創立し、いち早くニュースタイルハッスルを日本に広めたKENJIとパートナーのAMANDA、ストリートダンス界の第一線に立っているGENKIとKAZANE、そして現在日本で最も活躍してるであろうZabu&Eriらが出演しています。</p>
                                <div class="video-end">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/3hbyl5Hfmqc?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="section-h3">
                              　<h3>日本でも多くの人が踊っています</h3>
                                <p>日本でも全国にニュースタイルハッスルの輪が広がっています。<br><br>特に有名なコミュニティは東京の</p>
                                <ul>
                                  <li>毎週練習会やセッションを開催している<a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tyo'])}}"><span class="pref-btn1">NEW STYLE HUSTLE TYO</a></li>
                                  <li>毎週レッスンや月1でパーティーを開催している<a href="{{ action('ReadingPageController@communityshow',['permalink' => 'zabueri'])}}"><span class="pref-btn1">Zabu&Eriペア</a></li>
                                </ul>
                                <p>です。<br>東京にお住いの方、もしくは東京に行く機会がある方はぜひこの2つのコミュニティを訪れてみてください。</p>
                            </div>
                            <div class="section-h3">
                              　<h3>芸能界でも！</h3>
                                <p>またZabu&Eriペアは</p>
                                <ul>
                                  <li>フジテレビ「ミュージックステーション」KREVA ダンサー出演</li>
                                  <li>NHK Eテレ「Eダンスアカデミー」ゲスト出演</li>
                                  <li>EXILE USA 主催「Dance Earth Festival 2017」出演</li>
                                  <li>嵐アルバム「Untitled」リード曲「未完」MV振り付け</li>
                                </ul>
                                <p>などの経歴があり、彼らの尽力によって芸能界にも広がりをみせています。</p>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="youtube" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fsdkeurope%2Fvideos%2F10155197855284457%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                                    </div>
                                </div>
                                <div class="video-end">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="youtube" class="embed-responsive-item" data-src="https://www.youtube.com/embed/QkWD8JE1ulQ?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                              　<h3>全国のコミュ二ティ</h3>
                                <p>もちろん東京以外でも各地方で練習会やパーティーが開催され始めています。<br>あなたもこの機会に踊ってみませんか？？<br>ぜひ以下から各地方のコミュニティの活動をのぞいてみてください。</p>
                                <div class="pref">
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
                                        　　    <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'miyagi'])}}" class="tohoku-btn">宮城</a>
                                            </div>
                                        </div>
                                        <div class="kanto region">
                                          <div class="region-name">
                                              <p>関東地方</p>
                                          </div>
                                            <div class="kanto-list">
                                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tyo'])}}" class="kanto-btn-tokyo"><span class="pref-btn1">TYO</span><br><span class="pref-btn2">(東京)</span></a>
                                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'zabueri'])}}" class="kanto-btn-tokyo"><span class="pref-btn1">Zabu&Eri<br></span><span class="pref-btn2">(東京)</span></a>
                                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'chiba'])}}" class="kanto-btn">千葉</a>
                                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'saitama'])}}" class="kanto-btn">埼玉</a>
                                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tochigi'])}}" class="kanto-btn">栃木</a>
                                            </div>
                                        </div>
                                        <div class="chubu region">
                                          <div class="region-name">
                                              <p>中部地方</p>
                                          </div>
                                            <div class="chubu-list">
                                        　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'aichi'])}}" class="chubu-btn">愛知</a>
                                        　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'yamanashi'])}}" class="chubu-btn">山梨</a>
                                            </div>
                                        </div>
                                        <div class="kansai region">
                                          <div class="region-name">
                                              <p>関西地方</p>
                                          </div>
                                            <div class="kansai-list">
                                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'osaka'])}}" class="kansai-btn">大阪</a>
                                            </div>
                                        </div>
                                        <div class="chugoku region">
                                          <div class="region-name">
                                              <p>中国地方</p>
                                          </div>
                                            <div class="chugoku-list">
                                        　       <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'hiroshima'])}}" class="chugoku-btn">広島</a>
                                            </div>
                                        </div>
                                        <div class="shikoku region">
                                          <div class="region-name">
                                              <p>四国地方</p>
                                          </div>
                                            <div class="chugoku-list">
                                      　　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'ehime'])}}" class="shikoku-btn">愛媛</a>
                                            </div>
                                        </div>
                                        <div class="kyushu-okinawa region">
                                          <div class="region-name">
                                              <p>九州・沖縄地方</p>
                                          </div>
                                            <div class="kyushu-okinawa-list">
                                    　　        <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'okinawa'])}}" class="kyushu-okinawa-btn">沖縄</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box2">
                                <span class="box-title">注目！</span>
                                <p>ニュースタイルハッスルの動画を集めた特集ページもあります。</p>
                                <p><a href="/featured-video">FEATURED VIDEO</a></p>
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
