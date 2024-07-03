<?php
/*
Template Name: privacy-policy
*/
?>

<?php get_header(); ?>

<main role="main">

    <div id="privacy-policy" class="container">
        <div class="section-name">
            <div class="title-text">
                <p class="en-title">Privacy Policy</p>
                <p class="jp-title">プライバシーポリシー</p>
            </div>
            <div class="title-decoration">
                <span></span>
            </div>
        </div>



        <div class="contents-area">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>