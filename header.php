<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fabicon.png">

	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X2WJL4PV2Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X2WJL4PV2Q');
</script>
	
	
	
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <picture>
                    <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" type="image/svg+xml">
                    <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sp-logo.svg" type="image/svg+xml">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="会社のロゴ" type="image/svg+xml">
                </picture>
            </a>
        </div>
        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>


        <nav class="nav-menu">
            <ul>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <li>ABOUT</li>
                </a>
                <a href="<?php echo esc_url(home_url('/service')); ?>">
                    <li>SERVICE</li>
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>">
                    <li>CONACT</li>
                </a>
            </ul>
        </nav>
    </header>