@extends('layouts.video')

@section('title', 'ニュースタイルハッスルの動画特集')
@section('metadescription', 'ニュースタイルハッスルの動画特集です。日本はもちろん、世界中のニュースタイルハッスルの動画を紹介します。')
@section('ogtitle', 'ニュースタイルハッスルの動画特集')
@section('ogurl'){{ url('/featured-video') }}@endsection
@section('ogimage'){{ asset('img/featured-video-eyecatch.png')}}@endsection


@section('content')
    <div class="title_box">
        <h1>FEATURED VIDEO</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="section-introduction">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-text">
                                <p>このページではニュースタイルハッスルの動画を紹介します。<br>ここでは特に有名なものやニュースタイルハッスルが盛んな地域の動画の一部を紹介します。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>世界中のニュースタイルハッスル</h2>
                            </div>
                            <div class="video-introduction-facebook">
                                <div class="section-h3">
                                    <h3>NEW STYLE HUSTLE WORLD WIDE</h3>
                                </div>
                                <div class="section-text">
                                    <p>ニュースタイルハッスルを作ったJeffとRobynで企画して作成された動画です。<br>アメリカ、イギリス、イタリア、オランダ、ポーランド,チェコ、スロバキア、オーストリア、
                                      フィンランド、ベトナム、台湾、そして日本と様々な国や地域の人たちがニュースタイルハッスルを踊っていることが分かります。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/LUToU1eOHTg?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="sns">
                                <div class="sns-section text-center">
                                    <div class="section-text">
                                        <p>NEW STYLE HUSTLE WORLD WIDEのInstagramアカウントです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.instagram.com/newstylehustleworldwide/?hl=ja" class="sns_btn_insta"><span><i class="fab fa-instagram"></i>NEW STYLE HUSTLE WORLD WIDE</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>アメリカ</h2>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Jeff&Nicole</h3>
                                </div>
                                <div class="section-text">
                                    <p>創始者JeffとパートナーのNicoleの動画。<br>最も有名なニュースタイルハッスルニュースタイルハッスルの動画の1つです。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/iGFKTiqBOBs?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Jeff&Robyn</h3>
                                </div>
                                <div class="section-text">
                                    <p>JeffとパートナーのRobynの動画です。<br>Jeff&Robynによって、世界中にニュースタイルハッスルが広まりました。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/EWYVg9shvF0?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>NYで行われたNEW STYLE HUSTLE COMPETITION</h3>
                                </div>
                                <div class="section-text">
                                    <p>2019年にはJeff主催のコンペが開催され、ニュースタイルハッスル発祥の地ニューヨークに世界中からダンサーたちが集まりました。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/trB9kxVv1LI?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Jeff’s Lesson Video</h3>
                                </div>
                                <div class="section-text">
                                    <p>世界中でワークショップを行なっているJeff。ニューヨークでは毎週レッスンを行なっています。<br>ニューヨークに行く機会がある方はぜひ！</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube-nocookie.com/embed/icEIjnAw06M?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction-end-nosns">
                                <div class="section-h3">
                                    <h3>Robyn in サンフランシスコ</h3>
                                </div>
                                <div class="section-text">
                                    <p>Robynは今主にサンフランシスコなど西海岸を中心に活動中。<br>以下はサンフランシスコのイベントの様子です。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/QE700YFGwMg?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>日本</h2>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>NEW STYLE HUSTLE JAPAN</h3>
                                </div>
                                <div class="section-text">
                                    <p>2017年にJeffとRobynが来日した際に作成された動画です。<br>NEW STYLE HUSTLE TYOを創立したKENJIとパートナーのAMANDA、ストリートダンサーのGENKIとKAZANE、そしてZabu&Eriらが出演しています。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/3hbyl5Hfmqc?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>NEW STYLE HUSTLE JAPAN SHOW</h3>
                                </div>
                                <div class="section-text">
                                    <p>NEW STYLE HUSTLE JAPANとして2016年に踊られたショーです。<br>日本で当時活躍していたメンバーが集結しました。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/Wqn16RqhXAI?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>NEW STYLE HUSTLE TOKYO</h3>
                                </div>
                                <div class="section-text">
                                    <p>東京のダンサーが集まって作成された動画です。NEW STYLE HUSTLE TYOのメンバーやZabu&ERIが出演しています。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/iCl-WXIW7dA?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Zabu&Eri</h3>
                                </div>
                                <div class="section-text">
                                    <p>今最も日本で活躍しているのがストリートダンサーであるZabuとバレエダンサーEriのペア、Zabu&Eri。</p>
                                    <ul>
                                      <li>フジテレビ「ミュージックステーション」KREVA ダンサー出演</li>
                                      <li>NHK Eテレ「Eダンスアカデミー」ゲスト出演</li>
                                      <li>EXILE USA 主催「Dance Earth Festival 2017」出演</li>
                                      <li>嵐アルバム「Untitled」リード曲「未完」MV振り付け</li>
                                    </ul>
                                    <p>などの経歴があり、日本のニュースタイルハッスルの普及に尽力しています。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/uWVrNrikIfI?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Zabu&Eri in 台湾</h3>
                                </div>
                                <div class="section-text">
                                    <p>Zabu&Eriの台湾でのショー。<br>彼らは今や世界を舞台に活躍しています。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/QkWD8JE1ulQ?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction-end">
                                <div class="section-h3">
                                    <h3>Zabu&Eri in ヨーロッパ</h3>
                                </div>
                                <div class="section-text">
                                    <p>2017年にはヨーロッパのイベントに招待され、2018年にはヨーロッパツアーを行いました。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fsdkeurope%2Fvideos%2F10155197855284457%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="sns">
                                <div class="sns-section text-center">
                                    <div class="section-text">
                                        <p>NEW STYLE HUSTLE TYOのInstagramアカウントです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.instagram.com/newstylehustletyo/?hl=ja" class="sns_btn_insta"><span><i class="fab fa-instagram"></i>NEW STYLE HUSTLE TYO</span></a>
                                    </div>
                                </div>
                                <div class="sns-section2 text-center">
                                    <div class="section-text">
                                        <p>Zabu&EriのFacebookページです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.facebook.com/ZabuEri.NSH/" class="sns_btn_fb"><span><i class="fab fa-facebook-f"></i>Zabu&Eri Facebookページ</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>ヨーロッパ</h2>
                            </div>
                            <div class="video-introduction-end">
                                <div class="section-h3">
                                    <h3>ヨーロッパのイベントの様子</h3>
                                </div>
                                <div class="section-text">
                                    <p>ヨーロッパは現在最もニュースタイルハッスルが盛んな地域と言えるかもしれません。<br>後で紹介するイギリス、チェコ、ポーランドは特に盛んです。<br>以下はポーランドで開催されたイベントの様子。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/bGP1pw6a8VQ?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>ヨーロッパのダンサーたち</h3>
                                </div>
                                <div class="section-text">
                                    <p>ヨーロッパ各国はお互い地理的に近いこともあり、コラボすることもよくあります。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/LwtnlKfv0l8?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction-end-nosns">
                                <div class="section-h3">
                                    <h3>ヨーロッパのダンサーたちとJeffによるショー</h3>
                                </div>
                                <div class="section-text">
                                    <p>ヨーロッパで行われるダンスイベント「SDK」ではヨーロッパのダンサーとJeffが一緒にショーをしました。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/d_wjiwBe10w?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>イギリス</h2>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>T-Boy&Inga</h3>
                                </div>
                                <div class="section-text">
                                    <p>イギリスのT-Boy&Ingaペアは有名です。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/PKz6xW9rSPk?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction-end">
                                <div class="section-h3">
                                    <h3>T-Boy&Inga in JAPAN</h3>
                                </div>
                                <div class="section-text">
                                    <p>T-Boy&Ingaは、過去ストリートダンスのイベントの際に数回来日しており、ショーやワークショップを行いました。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/RfiQ28Li2KM?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="sns">
                                <div class="sns-section text-center">
                                    <div class="section-text">
                                        <p>ロンドンのハッスルのコミュニティのInstagramアカウントです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.instagram.com/hustlinglondon/?hl=ja" class="sns_btn_insta"><span><i class="fab fa-instagram"></i>hustlinglondon</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>チェコ</h2>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>都市ブルノの人たち</h3>
                                </div>
                                <div class="section-text">
                                    <p>チェコはニュースタイルハッスルがとても盛んです。<br>特にチェコ共和国第2の都市ブルノには活躍してるダンサーが大勢います。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/njGdojPq-LQ?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Rohlik&Kufa</h3>
                                </div>
                                <div class="section-text">
                                    <p>ブルノコミュニティには人気のあるニュースタイルハッスルのダンサー多いです。<br>以下のRohlik&Kufaのクリエイティブなダンス動画は有名です。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/NMcCkcoihBk?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Denis&Hana</h3>
                                </div>
                                <div class="section-text">
                                    <p>ブルノのDenisとHanaの動画です。とてもミュージカリティ。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/MttwRtYhBgg?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Emilio&Hana</h3>
                                </div>
                                <div class="section-text">
                                    <p>ブルノのEmilioと上の動画でも踊っていたHanaの動画です。スキルフルなダンス！</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/GDZ2TXFL7BA?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction-end">
                                <div class="section-h3">
                                    <h3>プラハのSushi&Bibi</h3>
                                </div>
                                <div class="section-text">
                                    <p>またチェコには首都プラハにもコミュニティがあります。<br>プラハを代表するのがSushi&Bibi!</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/Zy86p8Da_Zc?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="sns">
                                <div class="sns-section text-center">
                                    <div class="section-text">
                                        <p>NEW STYLE HUSTLE BRNOのFacebookページです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.facebook.com/hustlebrno/" class="sns_btn_fb"><span><i class="fab fa-facebook-f"></i>NEW STYLE HUSTLE BRNO</span></a>
                                    </div>
                                </div>
                                <div class="sns-section2 text-center">
                                    <div class="section-text">
                                        <p>NEW STYLE HUSTLE PRAHAのInstagramアカウントです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.instagram.com/newstylehustlepraha/?hl=ja" class="sns_btn_insta"><span><i class="fab fa-instagram"></i>NEW STYLE HUSTLE PRAHA</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>ポーランド</h2>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>イベントが盛んに行われている！</h3>
                                </div>
                                <div class="section-text">
                                    <p>以下の動画はポーランドの都市、ヴロツワフで開催されたイベントの様子です。<br>このようにポーランドはチェコに並んでニュースタイルハッスルが盛りあがっている国で、イベントもかなり多く開催されています。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/4QwSXo7aUyY?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Stazy&Marcelina</h3>
                                </div>
                                <div class="section-text">
                                    <p>ポーランドのコミュニティ「NEW STYLE HUSTLE POLAMD」を率いているのがこの2人、Stazy&Marcelina。<br>イベントの開催や世界中のダンサーとのコラボなどとても精力的に活動しているペアです。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/QwvTdaJtiW4?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Stazy&Marcelina × Zabu&Eri</h3>
                                </div>
                                <div class="section-text">
                                    <p>日本のZabu&Eriとコラボした作品。それぞれのダンススタイルが表現されているところや、上空からのドローンの撮影が見どころ。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/OwLHB8lbzVc?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>Stazy&Marcelina × Jeff&Robyn</h3>
                                </div>
                                <div class="section-text">
                                    <p>Jeff&Robynとコラボした作品。ポーランドの首都ワルシャワの綺麗な街並みと、2組のペアが鏡のようにムーブを繰り広げているところが見どころです。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/Qowhh7MPXz4?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction-end">
                                <div class="section-h3">
                                    <h3>Kido&Sara</h3>
                                </div>
                                <div class="section-text">
                                    <p>もちろんポーランドには他にも素晴らしいダンサーがいます。<br>中でもKido&Saraは人気で、コンペでも良い成績を収めています。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/VHFSpd2Yksw?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="sns">
                                <div class="sns-section text-center">
                                    <div class="section-text">
                                        <p>NEW STYLE HUSTLE POLANDのInstagramアカウントです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.instagram.com/newstylehustle.poland/?hl=ja" class="sns_btn_insta"><span><i class="fab fa-instagram"></i>NEW STYLE HUSTLE POLAND</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>台湾</h2>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>HustleHustle TW</h3>
                                </div>
                                <div class="section-text">
                                    <p>台湾のハッスルのコミュニティが「HustleHustle TW」です。<br>厳密に言えばニュースタイルハッスルだけでなくオリジナルの「ハッスル」のコミュニティですが、若い人たちが多く、フレキシブルなコミュニティです。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/7LlK1OBJdKU?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction-end">
                                <div class="section-h3">
                                    <h3>HustleHustle TW in JAPAN</h3>
                                </div>
                                <div class="section-text">
                                    <p>2018年にはHustleHustle TWのメンバーが来日し、日本のイベント「Hustle Lab」でショーを行いました。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/y9jYQaL09fk?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="sns">
                                <div class="sns-section text-center">
                                    <div class="section-text">
                                        <p>Hustle Hustle TWのInstagramアカウントです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.instagram.com/p/B1vIlKVn4mg/" class="sns_btn_insta"><span><i class="fab fa-instagram"></i>HustleHustle TW</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>韓国</h2>
                            </div>
                            <div class="video-introduction">
                                <div class="section-h3">
                                    <h3>NEW STYLE HUSTLE KOREA</h3>
                                </div>
                                <div class="section-text">
                                    <p>韓国のコミュニティが「NEW STYLE HUSTLE KOREA」です。<br>お隣韓国でもニュースタイルハッスルは踊られており、ショーや練習会が積極的に行われています。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/Ne35h-Ghj1E?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="video-introduction-end">
                                <div class="section-h3">
                                    <h3>NEW STYLE HUSTLE KOREA × NEW STYLE HUSTLE TOKYO</h3>
                                </div>
                                <div class="section-text">
                                    <p>NEW STYLE HUSTLE TOKYOのメンバーが韓国を訪れ、NEW STYLE HUSTLE KOREAのメンバーとショーをしました。</p>
                                </div>
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/AmSGtrsjf9o?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="sns">
                                <div class="sns-section text-center">
                                    <div class="section-text">
                                        <p>NEW STYLE HUSTLE KOREAのInstagramアカウントです。</p>
                                    </div>
                                    <div class="sns_btn_wrapper">
                                        <a href="https://www.instagram.com/newstylehustlekorea/?hl=ja" class="sns_btn_insta"><span><i class="fab fa-instagram"></i>NEW STYLE HUSTLE KOREA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-end">
                    <div class="row">
                        <div class="text col-md-12">
                            <div class="section-h2">
                                <h2>最後に</h2>
                            </div>
                            <div class="section-text">
                                <p>ここでは厳選した動画を紹介しました。<br>もっと紹介したかったのですが、時間がなく、、<br>もちろん他にもとても素晴らしい動画がYoutubeやSNSにあげられていますのでぜひ見てみてください！</p>
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
