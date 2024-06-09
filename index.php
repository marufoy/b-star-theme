<?php get_header(); ?>

<main role="main">
    <!-- Main content area -->
    <section id="Top">
        <div class="video-background">
            <video autoplay muted loop>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/sample.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay-text">
                <h1>仕事って「楽しい」を</h1>
                <h1>一人でも多くの人が思える世界を</h1>

            </div>
        </div>
    </section>

    <div class="container">

        <section id="Context">
            <h2>最高にカッコいい大人たちの集団へ</h2>

            <div class="text">
                <p>つまらなそうに過ごす大人たちを仕事を通じて生き生きと「幸せ」な世界を実現したい<br>
                    そんなvisionを掲げている。<br>
                </p>

                <p>
                    そのために私たちは常に好奇心を忘れず前進し続けていく
                    世界の北極星となる会社を目指す。<br>
                </p>

                <p>
                    売上、利益、そんなものより「誰と」「何を」していくかが大切だ。<br>
                    企業ごとに思い描くvision実現の役に立ち、そこにいる人たちを一人でも幸せにしていきたい。<br>
                </p>
                <p>
                    私たちは感動的なストーリーテリングと技術を組み合わせ、人々の心に深く響く体験を創出できるイメージ制作をします。
                </p>

            </div>
        </section>

        <section id="About-us">

            <div class="section-name">
                <div class="title-text">
                    <p class="en-title">ABOUT US</p>
                    <p class="jp-title">私たちについて</p>
                </div>
                <div class="title-decoration">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="contents">
                <div class="content" id="mission">
                    <div class="text-content">
                        <div class="text-title">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yellow.png" alt="">
                            <h3>MISSION</h3>
                        </div>
                        <div class="text">
                            <h4>企業の発展を促進しビジョンの実現に貢献する</h4>
                            <p>日本中の誰もが生き生きと「幸せ」な世界の実現<br>
                                そのために日本経済の中核を担う中小企業の縁の下の力持ちとなり、企業のビジョンを実現します</p>
                        </div>
                    </div>



                    <div class="image-content">
                        <picture>
                            <source media="(min-width: 768px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sample3.jpg"
                                type="image/svg+xml">
                            <source media="(max-width: 767px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sample3.jpg"
                                type="image/svg+xml">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample3.jpg"
                                alt="<?php bloginfo('name'); ?>" type="image/png">
                        </picture>
                    </div>
                </div>
                <div class="content" id="vision">
                    <div class="text-content"></div>
                    <div class="image-content"></div>
                </div>
                <div class="content" id="value">
                    <div class="text-content"></div>
                    <div class="image-content"></div>
                </div>
            </div>

        </section>

    </div>
</main>

<?php get_footer(); ?>