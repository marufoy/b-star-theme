<?php
/*
Template Name: service
*/
?>

<?php get_header(); ?>

<main role="main">


    <div class="container">

        <section id="service">
            <div class="section-name">
                <div class="title-text">
                    <p class="en-title">SERVICE</p>
                    <p class="jp-title">サービス紹介</p>
                </div>
                <div class="title-decoration">
                    <span></span>
                </div>
            </div>

            <div class="tab-area">
                <div id="tabs">
                    <ul>
                        <li>Web制作</li>
                        <li>動画制作</li>
                    </ul>
                    <div>
                        <div class="number" id="01">
                            01.
                        </div>
                        <div class="content">
                            <div class="text-content">
                                <div class="title-text">
                                    <div class="title">
                                        <h3>もっと「知りたい」と思わせる</h3>
                                        <h3>心に届くUI設計とデザイン</h3>
                                    </div>
                                </div>

                                <div class="text">
                                    <div class="issue">
                                        <ul>
                                            <li>
                                                <h4>よくある課題</h4>
                                            </li>
                                            <li>アクセス数が少ない</li>
                                            <li>かっこいいデザインにしたい</li>
                                            <li>使い勝手が悪い、</li>
                                            <li>スマートフォンに対応したHPが欲しい</li>
                                            <li>採用活動におけるミスマッチ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="image-content">
                                <picture>
                                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/web.png" type="image/png">
                                    <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/web.png" type="image/png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web.png" alt="<?php bloginfo('name'); ?>" type="image/png">
                                </picture>
                                <a href="<?php echo esc_url(home_url('/contact')); ?>">
                                    <button class="contact-button">
                                        資料請求
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="solution">
                            <p>UI設計、デザイン制作、映像制作など、それぞれ組み合わせ抱える課題を解決いたします。<br>
                                企業サイトや採用サイトなどのweb制作はお任せください。</p>
                        </div>


                    </div>
                    <div>
                        <div>
                            <div class="number" id="02">
                                02.
                            </div>
                            <div class="content">
                                <div class="text-content">
                                    <div class="title">
                                        <h3>圧倒的に印象に残る動画で</h3>
                                    </div>

                                    <div class="text">
                                        <div class="issue">
                                            <ul>
                                                <li>
                                                    <h4>よくある課題</h4>
                                                </li>
                                                <li>SNSアカウントは立ち上げたが投稿が止まっている</li>
                                                <li>SNS運用をしていきたいが動画制作ノウハウがない</li>
                                                <li>会社紹介など動画を作ってみたいが何からはじめていいのかわからない</li>
                                                <li>動画がどのように活用できるのかわからない</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="image-content">
                                    <picture>
                                        <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/video.png" type="image/png">
                                        <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/video.png" type="image/png">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video.png" alt="<?php bloginfo('name'); ?>" type="image/png">
                                    </picture>
                                    <a href="<?php echo esc_url(home_url('/contact')); ?>">
                                        <button class="contact-button">
                                            資料請求
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="solution">
                                <p>動画の企画から構成、SNSなどの投稿に適した縦型動画から横型動画まで最適な方法で
                                    効果的なアプローチを実現します。</p>
                            </div>



                            <ul class="slider" id="js-slider">
                                <li><a href="<?php echo esc_url("google.com"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/value.png" alt="<?php bloginfo('name'); ?>" type="image/png"></a></li>
                                <li><a href="<?php echo esc_url("google.com"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission.png" alt="<?php bloginfo('name'); ?>" type="image/png"></a></li>
                                <li><a href="<?php echo esc_url("google.com"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.png" alt="<?php bloginfo('name'); ?>" type="image/png"></a></li>

                            </ul>
                            <div class="dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="service-sp">
            <div class="section-name">
                <div class="title-text">
                    <p class="en-title">SERVICE</p>
                    <p class="jp-title">サービス紹介</p>
                </div>
                <div class="title-decoration">
                    <span></span>
                </div>
            </div>

            <div id="web">
                <div id="web-title" class="service-title">
                    <h2>もっと「知りたい」と思わせる心に届くUI設計とデザイン</h2>
                </div>

                <div class="text-area">
                    <div class="text-title">
                        <span class="number">01.</span>
                        <h3>WEB制作</h3>
                    </div>
                    <div class="text">
                        <p>よくある課題</p>
                        <ul>
                            <li>アクセス数が少ない</li>
                            <li>かっこいいデザインにしたい</li>
                            <li>使い勝手が悪く情報更新がしにくい</li>
                            <li>採用活動におけるミスマッチ</li>
                        </ul>
                    </div>

                    <div class="solution">
                        <p>
                            UI設計、デザイン制作、映像制作など、それぞれ組み合わせ抱える課題を解決いたします。
                            企業サイトや採用サイトなどのweb制作はお任せください。
                        </p>
                    </div>
                </div>
            </div>

            <div id="movie">
                <div id="movie-title" class="service-title">
                    <h2>圧倒的に印象に残る動画で</h2>
                </div>

                <div class="text-area">
                    <div class="text-title">
                        <span class="number">02.</span>
                        <h3>動画制作</h3>
                    </div>
                    <div class="text">
                        <p>よくある課題</p>
                        <ul>
                            <li>SNSアカウントは立ち上げたが投稿が止まっている</li>
                            <li>SNS運用をしていきたいが動画制作ノウハウがない</li>
                            <li>会社紹介など動画を作ってみたいが何からはじめていいのかわからない</li>
                            <li>動画がどのように活用できるのかわからない</li>
                            <li>サービスの認知拡大やブランディングをしていきたいが効果がでていない</li>
                        </ul>
                    </div>

                    <div class="solution">
                        <p>
                            動画の企画から構成、SNSなどの投稿に適した縦型動画から横型動画まで最適な方法で
                            効果的なアプローチを実現します。
                        </p>
                    </div>

                    <button class="contact-button">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a>
                    </button>
                    <div class="achievements">
                        <h3>参考動画</h3>

                        <ul class="slider" id="js-slider-sp">
                            <li><a href="<?php echo esc_url("google.com"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/value.png" alt="<?php bloginfo('name'); ?>" type="image/png"></a></li>
                            <li><a href="<?php echo esc_url("google.com"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission.png" alt="<?php bloginfo('name'); ?>" type="image/png"></a></li>
                            <li><a href="<?php echo esc_url("google.com"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.png" alt="<?php bloginfo('name'); ?>" type="image/png"></a></li>
                        </ul>
                        <div class="dots"></div>

                    </div>



                </div>
            </div>

        </section>

        <section id="result">
            <div class="section-name">
                <div class="title-text">
                    <p class="en-title">RESULT</p>
                    <p class="jp-title">得られる効果</p>
                </div>
                <div class="title-decoration">
                    <span></span>
                </div>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="card-icon">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <div class="card-title">
                        ブランディング
                    </div>
                    <div class="card-text">
                        ブランドを構築し、自社の経営理念に共感したお客様を獲得
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <i class="fa-solid fa-laptop"></i>
                    </div>
                    <div class="card-title">
                        WEBサイトの強化
                    </div>
                    <div class="card-text">
                        ニーズに合わせたWebサイトを構築し、集客力をアップ
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <div class="card-title">
                        優良顧客の獲得
                    </div>
                    <div class="card-text">
                        効果的なデザインでWebサイトを構築、ターゲットへのアプローチを強める

                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                    <div class="card-title">
                        採用力アップ
                    </div>
                    <div class="card-text">
                        採用要件に合致する方へリーチさせ
                        一緒に働きたいと心躍るサイトを作り採用力アップ
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div class="card-title">
                        効果的な情報発信
                    </div>
                    <div class="card-text">
                        映像を使用し、文字だけでは伝えられない情報を視覚化
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <div class="card-title">
                        コスト削減
                    </div>
                    <div class="card-text">
                        効果的なHPや動画の制作により
                        採用活動や広告における費用の削減
                    </div>
                </div>
            </div>
        </section>

        <section id="flow">
            <div class="section-name">
                <div class="title-text">
                    <p class="en-title">FLOW</p>
                    <p class="jp-title">進行の流れ</p>
                </div>
                <div class="title-decoration">
                    <span></span>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="check-mark"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="card-icon">
                        <i class="fa-solid fa-ear-listen"></i>
                    </div>
                    <div class="card-title">
                        ヒアリング
                    </div>
                    <div class="card-text">
                        お客様の課題や目的を
                        ヒアリング、スケジュール、
                        概算費用をおまとめします
                    </div>
                </div>
                <div class="triangle">
                    <i class="fa-solid fa-play"></i>
                </div>
                <div class="card">
                    <div class="check-mark"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="card-icon">
                        <i class="fa-regular fa-comment"></i>
                    </div>
                    <div class="card-title">
                        要件定義
                    </div>
                    <div class="card-text">
                        web制作や動画制作の目的や
                        ゴールの設定
                        必要な機能要件を定義し解決策をご提案します
                    </div>
                </div>
                <div class="triangle">
                    <i class="fa-solid fa-play"></i>
                </div>
                <div class="card">
                    <div class="check-mark"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="card-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="card-title">
                        開発・クリエイティブ
                    </div>
                    <div class="card-text">
                        モックアップ制作・動画の撮影・作成し完成イメージを確認し詳細をすり合わせて調整していきます
                    </div>
                </div>
                <div class="triangle">
                    <i class="fa-solid fa-play"></i>
                </div>
                <div class="card">
                    <div class="check-mark"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="card-icon">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <div class="card-title">
                        納品
                    </div>
                    <div class="card-text">
                        システム保守など運用をサポートします
                    </div>
                </div>

            </div>
        </section>
    </div>

</main>

<?php get_footer(); ?>