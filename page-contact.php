<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<main role="main">
    <section id="contact">
        <div class="section-name">
            <div class="title-text">
                <p class="en-title">CONTACT</p>
                <p class="jp-title">お問い合わせ</p>
            </div>
            <div class="title-decoration">
                <span></span>
            </div>
        </div>

        <div class="content">
            <div class="text-area">
                <div class="contact-logo">
                    B-STAR
                </div>

                <div class="message">
                    仕事のご依頼やご相談の方は必要情報を入力して<br>
                    お気軽にお問い合わせください。
                </div>
            </div>
            
            <div class="form-area">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
        </div>

    </section>
</main>

<?php get_footer(); ?>