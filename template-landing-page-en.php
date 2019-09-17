<?php
	/*
 * Template name: Landing Page EN
 */

get_header();
?>

    <div class="landing-page-nav-container">
        <div class="container">
            <div class="row landing-page-nav">
                
                <div class="col-md-6 col-sm-7 col-xs-5 logo">
                   
                    <div>
                        <?php print_image(get_field('logotyp')) ?>

        
                        <span class="hidden-xs"><?php the_field('tekst_obok_logotypu') ?></span>
    
                    </div>
    
                </div>
                
                <div class="col-md-6 col-sm-5 col-xs-7">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <div>
                            <span class="light hidden-xs">Project of Centrum Cyfrowe</span>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" viewBox="0 0 47 42">
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="#FF5722" d="M23.722 24.693a4.605 4.605 0 0 1-3.195 1.294c-2.567 0-4.655-2.113-4.655-4.71s2.088-4.71 4.655-4.71c1.237 0 2.36.494 3.194 1.293l3.59-3.631a9.638 9.638 0 0 0-6.784-2.797c-5.365 0-9.73 4.417-9.73 9.845 0 5.428 4.365 9.845 9.73 9.845a9.637 9.637 0 0 0 6.784-2.798l-3.589-3.631z"/>
                                    <path fill="#2A2A2A" d="M40.218 3.216l-3.59 3.625c7.026 8.05 7.026 20.2 0 28.248l3.59 3.626c8.995-10.053 8.994-25.445 0-35.499zM32.39 30.811c4.712-5.678 4.712-14.012 0-19.691l-3.602 3.637c2.766 3.652 2.766 8.766 0 12.417l3.602 3.637zm-.64-21.13l3.579-3.614C31.578 2.327 26.429.013 20.754.013 9.31.013 0 9.413 0 20.966c0 11.553 9.31 20.953 20.754 20.953 5.675 0 10.824-2.314 14.575-6.055l-3.58-3.614c-2.833 2.815-6.716 4.556-10.995 4.556-8.651 0-15.69-7.106-15.69-15.84s7.039-15.84 15.69-15.84c4.279 0 8.161 1.74 10.994 4.555z"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
    $obrazek = get_field('header-image');
?>

<header class="header landing-page-header <?php $tooltip = get_field('header-tooltip-toggle'); if (is_tooltip_enabled_en($obrazek)) echo 'tooltip-enabled'; ?>"
    style="background-image: url('<?php echo $obrazek['url'] ?>')">

    <div class="content">
        <div class="content-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <h1><?php the_field('header-h1-text') ?></h1>
                        <h4><?php the_field('header-subtext') ?></h4>
                        <a href="#landing-page" class="button white">
                            <?php the_field('button-text') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php cc_tooltip_en($obrazek) ?>
</header>


<main class="landing-page" id="landing-page">
    <div class="container">
        
            <div class="col-md-2 col-sm-12 col-xs-12 hidden-lg hidden-md">
                <a href="<?php the_field('link_bannera') ?>" target="_blank">
                    <div class="banner banner-mobile">
                        <?php if (get_field('co_zawiera_banner') === 'tekst') : ?>
                            <div class="placeholder">
                                <span><?php the_field('banner-text') ?></span>
                            </div>
                        <?php elseif (get_field('co_zawiera_banner') === 'obrazek') : ?>
                            <img src="<?php echo get_field('banner-image')['url'] ?>" alt="<?php echo get_field('banner-image')['title'] ?>">
                        <?php endif; ?>
                    </div>
                </a>
            </div>
            <?php include(locate_template("modules-includer.php")); ?>

    </div>
</main>

<div class="content-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 hidden-xs">
                <ul id="content-nav-ul">
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    $("nav").css("display", "none");
</script>

<?php get_footer(); ?>