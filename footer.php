<?php
//====================================================
//  Template Name: Footer
//====================================================
?>

<footer>
    <div class="container">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.svg" alt="<?php bloginfo('name'); ?>" type="image/png">
        </div>
        <div class="footer-nav">
            <div class="footer-overview">
                会社概要
            </div>

            <nav>
                <ul>
                    <li><a href="/">TOP</a></li>
                    <li><a href="/">ABOUT US</a></li>
                    <li><a href="/">SERVICE</a></li>
                    <li><a href="/">CONTACT</a></li>
                </ul>
            </nav>
        </div>

        <div class="info-area">
            <div class="info">
                <p>社名 株式会社B-STAR</p>
                <p>設立 2024.03.23</p>
                <p>所在 山梨県甲府市</p>
            </div>

            <div class="info-2">
                <a href="" id="privacy-policy">プライバシーポリシー</a>
                <a href="" id="terms">利用規約</a>
            </div>

        </div>
        <span id="copy">&copy; B-STAR INC... </span>
    </div>
</footer>
</div><!--//class="wrap"-->
<?php wp_footer(); ?>
</body>

</html>