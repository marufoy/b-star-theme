<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <picture>
                    <source media="(min-width: 768px)"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pc-logo.svg"
                        type="image/svg+xml">
                    <source media="(max-width: 767px)"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sp-logo.svg"
                        type="image/svg+xml">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc-logo.svg"
                        alt="<?php bloginfo('name'); ?>" type="image/png">
                </picture>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">ABOUT</a></li>
                <li><a href="<?php echo esc_url(home_url('/service')); ?>">SERVICE</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">CONACT</a></li>
            </ul>
        </nav>
    </header>