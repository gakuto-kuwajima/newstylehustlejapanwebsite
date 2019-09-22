@extends('layouts.lesson')

@section('title', 'レッスン')
@section('metadescription', 'ニュースタイルハッスルのレッスン情報です。東京におけるレッスン・セッション・パーティーを紹介します。')

@section('ogtitle', 'ニュースタイルハッスルのレッスン情報')
@section('ogurl'){{ url('/lesson') }}@endsection
@section('ogimage'){{ asset('img/lesson-information-eyecatch.png')}}@endsection


@section('content')
<div class="title_box">
   <h1>LESSON INFORMATION</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="information text-center">
                <p>※記載してる内容は東京の情報のみです。<br>各地域の情報は<a href="/community">こちら</a>からご確認ください。</p>
            </div>
            <div class="row calendar col-md-12 mx-auto">
              <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTokyo&amp;src=NDBwMHZpNTZrb3M1cG5yb2R2bWQ5cjd2dG9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%234285F4&amp;color=%230B8043&amp;showTitle=0&showPrint=0&showTabs=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="section">
                <div class="h2-title-lesson">
                    <h2>レッスン</h2>
                </div>
                <div class="who">
                    <div class="h3-title-lesson">
                        <h3>Zabu&Eriレッスン</h3>
                    </div>
                    <div class="lesson">
                        <h4 class="h4-title-lesson"><i class="fas fa-circle h4-title-lesson-before"></i>レギュラーclass</h4>
                        <div class="lesson-description">
                            <p>基本のステップを練習したあと、いくつか技を組み合わせて踊るオープンクラス<br>（日によって場所など変更する場合があるので、<a href="https://www.facebook.com/ZabuEri.NSH/">スケジュール</a>要確認）</p>
                        </div>
                        <div class="detail">
                            <div class="detail-css">
                              <p><i class="fas fa-chevron-circle-right"></i>日時</p>
                              <p>毎週月曜日 21:15〜22:45</p>
                            </div>
                            <div class="detail-css">
                              <p><i class="fas fa-chevron-circle-right"></i>料金</p>
                              <p>2,000円（リードとフォロワーのペアで3,000円）</p>
                            </div>
                            <div class="detail-css">
                              <p><i class="fas fa-chevron-circle-right"></i>場所</p>
                              <p>新宿ﾏｲｽﾀｼﾞｵ5B<br><a href="http://shinjukustudio.jp/access/index.html">（http://shinjukustudio.jp/access/index.html）</a></p>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.2409129583043!2d139.69857506550247!3d35.695688736785904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd63a036d8b%3A0xc711fed0636fd85b!2z5paw5a6_44Oe44Kk44K544K_44K444Kq!5e0!3m2!1sja!2sjp!4v1566286922106!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="lesson">
                        <h4 class="h4-title"><i class="fas fa-circle h4-title-lesson-before"></i>超基礎クラス（Eriのみ）</h4>
                        <div class="lesson-description">
                            <p>基本のステップと簡単なルーティーンをひらすらひたすら練習する初心者向け、少人数なクラス</p>
                        </div>
                        <div class="detail">
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>日時</p>
                                <p>金曜日 21:15〜22:45<br>（毎月1回のみ。カレンダー要確認）</p>
                            </div>
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>料金</p>
                                <p>体験2回まで1,500円、その後はスタジオチケット</p>
                            </div>
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>場所</p>
                                <p>三鷹 emotionS Dance Studio<br><a href="http://dance-studio-emotions.com">（http://dance-studio-emotions.com）</a></p>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103703.21101161434!2d139.48923889459718!3d35.68376428460022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018efb022342975%3A0x459c377bc849d328!2semotionS+Dance+Studio!5e0!3m2!1sja!2sjp!4v1566297287758!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="lesson">
                        <h4 class="h4-title"><i class="fas fa-circle h4-title-lesson-before"></i>練習会&基本レクチャー（Eri & Hiro ( from ALMA)）</h4>
                        <div class="lesson-description">
                            <p>基本の動きにどうダンスらしさを入れられるか、フォロワー目線のアドバイスやHiroさん目線のリードのスタイリングなどを伝えて反復練習をしていくクラスです</p>
                        </div>
                        <div class="detail">
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>日時</p>
                                <p>金曜日 19:30〜20:45<br>（基本隔週です。カレンダー要確認）</p>
                            </div>
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>料金</p>
                                <p>料金：1500円</p>
                            </div>
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>場所</p>
                                <p>場所：Raise up studio<br><a href="https://www.raiseup-studio.com">（https://www.raiseup-studio.com）</a></p>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.7385745704214!2d139.6683914152859!3d35.609514741509216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f51f8a2c21c5%3A0xf1117007f50d3474!2zUkFJU0UgVVAgU1RVRElPIOiHqueUseOBjOS4mCDjg6zjg7Pjgr_jg6vjgrnjgr_jgrjjgqo!5e0!3m2!1sja!2sjp!4v1566298447320!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="lesson">
                        <h4 class="h4-title"><i class="fas fa-circle h4-title-lesson-before"></i>ハスモ -NSH Morning-（Zabuのみ）</h4>
                        <div class="lesson-description">
                            <p>日曜日の朝に行う、New Style Hustleのレクチャーと練習会です。時間帯で難易度をわけてあるので、経験者の方も初めての方やゆっくりベーシックをやりたい方もじっくりできます&#9836;</p>
                        </div>
                        <div class="detail">
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>日時</p>
                                <p>日曜日<br>（カレンダー要確認）</p>
                                <p><Time Table>&#9312;10:00-11:00 初中級<br>&#9313;11:00-12:00 入門<br>&#9314;12:00-13:00 練習会</p>
                            </div>
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>料金</p>
                                <p>2000円＋場所代500円<br>※&#9312;、&#9313;片方受講の方も、両方受講の方も同額です。<br>※練習会のみ参加の方は場所代500円のみでOK！</p>
                            </div>
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>場所</p>
                                <p>Roppongi Dance Lab.六本木エルビル4F<br><a href="https://lab.dance">（https://lab.dance）</a></p>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.535716503825!2d139.7297439152872!3d35.6638089385346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b7808340001%3A0x6d3c7b09d208deaa!2sRoppongi+Dance+Lab!5e0!3m2!1sja!2sjp!4v1566298606480!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <p>Zabu&Eriレッスンの詳細はFacebookページをご覧ください。</p>
                    <div class="sns_btn_wrapper">
                        <a href="" class="sns_btn_fb"><i class="fab fa-facebook-f"></i>Zabu&Eri FBページ</a>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="h2-title-session">
                    <h2>セッション</h2>
                </div>
                <div class="who">
                    <div class="h3-title-session">
                        <h3>NEW STYLE HUSTLE TYO</h3>
                    </div>
                    <div class="lesson">
                        <h4 class="h4-title"><i class="fas fa-circle h4-title-session-before"></i>WKLY Session TYO</h4>
                        <div class="lesson-description">
                            <p>New Style Hustleの楽しさをシェアするための集まりです！<br>初心者でも一人参加でもWELCOME！<br>2時間通しで踊り続けられるセッションです！</p>
                        </div>
                        <div class="detail">
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>日時</p>
                                <p>毎週火曜日 21:00-23:00</p>
                            </div>
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>料金</p>
                                <p>500円</p>
                            </div>
                            <div class="detail-css">
                                <p><i class="fas fa-chevron-circle-right"></i>場所</p>
                                <p>六本木 レンタルスタジオ フォルトゥーナ<br><a href="http://roppongi.studiosquare.jp/map.html">（http://roppongi.studiosquare.jp/map.html）</a></p>
                            </div>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.5139713052904!2d139.7273114155018!3d35.664344538504906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b79aaaa176d%3A0xd35d0b9274c1f888!2z5YWt5pys5pyoIOODleOCqeODq-ODiOOCpeODvOODiiDjg6zjg7Pjgr_jg6vjgrnjgr_jgrjjgqo!5e0!3m2!1sja!2sjp!4v1566347616441!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <p>NEW STYLE HUSTLE TYOの詳細はウェブサイトをご覧ください。</p>
                    <div class="sns_btn_wrapper">
                        <a href="" class="sns_btn_tyo"><i class="fas fa-laptop"></i>NEW STYLE HUSTLE TYO</a>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="h2-title-party">
                    <h2>パーティー</h2>
                </div>
                <div class="who">
                    <div class="h3-title-party">
                        <h3>HUSTLE BREAK TOKYO</h3>
                    </div>
                    <div class="lesson">
                        <h4 class="h4-title"><i class="fas fa-circle h4-title-party-before"></i>WKLY Session TYO</h4>
                        <div class="lesson-description">
                            <p>毎月第3水曜日に行なっているNEW STYLE HUSTLEのパーティー</p>
                        </div>
                        <div class="detail">
                            <p>詳細はFacebookページにてご覧ください。</p>
                            <div class="sns_btn_wrapper">
                                <a href="" class="sns_btn_hbt"><i class="fab fa-facebook-f"></i>HUSTLE BREAK TOKYO</a>
                            </div>
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
