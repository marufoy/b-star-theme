<?php
//====================================================
//  Template Name: Footer
//====================================================
?>

<footer>
    <div class="container">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" type="image/png">
        </div>
        <div class="footer-nav">
            <div class="footer-overview">
                会社概要
            </div>

            <nav>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">ABOUT</a></li>
                    <li><a href="<?php echo esc_url(home_url('/service')); ?>">SERVICE</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">CONTACT</a></li>
                </ul>
            </nav>
        </div>

        <div class="info-area">
            <div class="info">
                <p>社名 B-STAR</p>
                <p>設立 2024.03.23</p>
            </div>

            <div class="info-2">
                <a href="/privacy-policy">プライバシーポリシー/利用規約</a>
            </div>

        </div>
        <span id="copy">&copy; B-STAR INC... </span>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>