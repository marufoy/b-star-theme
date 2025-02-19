<?php
/*
Template Name: top
*/
?>


<?php get_header(); ?>

<main role="main">
    <!-- Main content area -->
    <section id="Top">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video-bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay-text">
                <h1>仕事って「楽しい」を</h1>
                <h1>一人でも多くの人が思える世界を</h1>

            </div>
        </div>
    </section>

    <section id="Context">
        <div class="container">
            <h2 id="vision-statement">最高にカッコいい大人たちの集団へ</h2>

            <div class="text" id="top-text">
                <p>
                    つまらなそうな顔をして日々過ごしていないだろうか？<br>
                    なにをするにも「環境と仲間」が大切だ。<br>
                </p>

                <p>
                    企業ごとに思い描くvision実現のため、<br>
                    活気溢れる会社つくりに貢献<br>
                    そこにいる人たちを一人でも生き生きと。<br>
                </p>

                <p>
                    そのために私たちは常に好奇心を忘れず、<br>
                    前進し続ける北極星のような会社を目指す。
                </p>
            </div>
        </div>
    </section>


    <section id="works">
        <div class="container">
            <div class="section-name">
                <div class="title-text">
                    <p class="en-title">WORKS</p>
                    <p class="jp-title">実績紹介</p>
                </div>
                <div class="title-decoration">
                    <span></span>
                </div>
            </div>
            <div class="contents">
                <div class="achievements">

                    <ul class="slider" id="js-slider-top">
                        <li>
                            <video class="slick-video" autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video_1.mp4" type="video/mp4">
                                お使いのブラウザは video タグをサポートしていません。
                            </video>
                        </li>
                        <li>
                            <video class="slick-video" autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video_2.mp4" type="video/mp4">
                            </video>
                        </li>
                        <li>
                            <video class="slick-video" autoplay loop muted playsinline>
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video_3.mp4" type="video/mp4">
                            </video>
                        </li>
                    </ul>
                    <div class="dots"></div>

                </div>
            </div>
        </div>
    </section>

    <section id="About-us">
        <div class="container">
            <div class="section-name">
                <div class="title-text">
                    <p class="en-title">ABOUT US</p>
                    <p class="jp-title">私たちについて</p>
                </div>
                <div class="title-decoration">
                    <span></span>
                </div>
            </div>

            <div class="contents">
                <div class="content" id="mission">

                    <div class="text-content">
                        <div class="text-title">
                            <h3>MISSION</h3>
                        </div>
                        <div class="text">
                            <h4>会社の「創造する未来」を共に築き
                                ステークホルダーの生活を豊かに活気溢れるものに
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="content" id="vision">

                    <div class="text-content">
                        <div class="text-title">
                            <h3>VISION</h3>
                        </div>
                        <div class="text">
                            <h4>会社の発展に貢献し信頼される、成長し続ける企業</h4>
                        </div>
                    </div>
                    <div class="image-content">
                    </div>
                </div>
                <div class="content" id="value">
                    <div class="text-content">
                        <div class="text-title">
                            <h3>VALUE</h3>
                        </div>
                        <div class="text">
                            <h4>社会に価値を創造し続け、社会の発展に貢献する</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cycle">
        <div class="container">
            <div class="text-content">
                <div class="title-text">
                    <h3>私たちが目指す</h3>
                    <h3>理想の循環</h3>
                </div>
                <div class="subtext">
                    <p>
                        企業と従業員が共通のBe（理想の状態）に向けて並走し、企業の成長が従業員の幸せに繋がる。<br>
                        そんな理想の循環を目指しています。<br>
                        好循環を生み出すことで働く人が生き生きと幸せな世界を実現できると考えています。
                    </p>
                </div>
            </div>

            <div class="cycle-discription">
                <div class="cycle-text">
                    <div class="cycle-title" id="c-01">
                        <h3><span>01.</span>目標の一致</h3>
                        <p>目標が一致することで団結し、会社作りに一体感が生まれます。<br>
                            社員全員が同じ目標を共有することで、正しい方向に物事を進めることができます。</p>
                    </div>
                    <div class="cycle-title" id="c-04">
                        <h3><span>04.</span>生活の質の向上</h3>
                        <p>仕事が楽しいと感じることで、人生を削る時間ではなく、人生の柱となる時間に変わります。<br>
                            これにより、生活の質が向上します。</p>
                    </div>
                </div>
                <div class="image-content">
                    <picture>
                        <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cycle.png" type="image/svg+xml">
                        <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cycle.png" type="image/svg+xml">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cycle.png" alt="理想の循環のイメージ画像" type="image/png">
                    </picture>
                </div>
                <div class="cycle-text">
                    <div class="cycle-title" id="c-02">
                        <h3><span>02.</span>会社の成長</h3>
                        <p>会社が成長することで、手当の増加ややりがいを感じる機会が増えます。<br>
                            その結果、従業員の満足度が向上します。</p>
                    </div>
                    <div class="cycle-title" id="c-03">
                        <h3><span>03.</span>満足度の上昇</h3>
                        <p>満足度が上がると社員のやる気が高まり、<br>
                            活発なコミュニケーションで成果も向上し、働くことが楽しくなります。
                        </p>
                    </div>
                </div>
            </div>

            <div class="cycle-discription-sp">

                <div class="image-content">
                    <picture>
                        <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cycle.png" type="image/svg+xml">
                        <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cycle.png" type="image/svg+xml">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cycle.png" alt="理想の循環のイメージ画像" type="image/png">
                    </picture>
                </div>
                <div class="cycle-text">
                    <div class="cycle-title" id="c-01-sp">
                        <h3><span>01.</span>目標の一致</h3>
                        <p>目標が一致することで団結し、会社作りに一体感が生まれます。<br>
                            社員全員が同じ目標を共有することで、正しい方向に物事を進めることができます。</p>
                    </div>
                    <div class="cycle-title" id="c-02-sp">
                        <h3><span>02.</span>会社の成長</h3>
                        <p>会社が成長することで、手当の増加ややりがいを感じる機会が増えます。<br>
                            その結果、従業員の満足度が向上します。</p>
                    </div>
                </div>

                <div class="cycle-text">
                    <div class="cycle-title" id="c-03-sp">
                        <h3><span>03.</span>満足度の上昇</h3>
                        <p>満足度が上がると社員のやる気が高まり、<br>
                            活発なコミュニケーションで成果も向上し、働くことが楽しくなります。
                        </p>
                    </div>
                    <div class="cycle-title" id="c-04-sp">
                        <h3><span>04.</span>生活の質の向上</h3>
                        <p>仕事が楽しいと感じることで、人生を削る時間ではなく、人生の柱となる時間に変わります。<br>
                            これにより、生活の質が向上します。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>