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
                <span></span>
                <span></span>
            </div>
        </div>

        <div>
            <?php echo do_shortcode('[mwform_formkey key="10"]'); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>