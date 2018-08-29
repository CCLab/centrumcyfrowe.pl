<footer>

    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <h5><?php the_field('footer-naglowek', pll_current_language('slug')); ?></h5>
                <p><?php the_field('footer-adres', pll_current_language('slug')); ?></p>
                <ul class="socials-menu">
                    <li><a href="<?php the_field('footer-social-facebook', pll_current_language('slug')); ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php the_field('footer-social-twitter', pll_current_language('slug')); ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php the_field('footer-social-youtube', pll_current_language('slug')); ?>"><i class="fa fa-youtube-play"></i></a></a></li>
                    <li><a href="<?php the_field('footer-social-github', pll_current_language('slug')); ?>"><i class="fa fa-github"></i></a></a></li>
		    <li><a href="<?php the_field('footer-social-RSS', pll_current_language('slug')); ?>"><i class="fa fa-rss-square"></i></a></a></li>
	
                </ul>
            </div>

            <hr class="hidden-lg hidden-md hidden-sm">

            <?php if (have_rows('footer-menu', pll_current_language('slug'))) : ?>
                <?php while (have_rows('footer-menu', pll_current_language('slug'))) : the_row(); ?>

                    <div class="col-md-2 hidden-sm hidden-xs">
                        <h5><?php the_sub_field('footer-menu-z-naglowkiem-naglowek'); ?></h5>

                        <?php if (have_rows('footer-menu-z-naglowkiem-odnosniki', pll_current_language('slug'))) : ?>
                            <ul class="temporary-menu">

                                <?php while (have_rows('footer-menu-z-naglowkiem-odnosniki', pll_current_language('slug'))) : the_row(); ?>
                                    <?php $link = get_sub_field('footer-menu-z-naglowkiem-odnosnik'); ?>
                                    <li><a href="<?php echo the_permalink($link->ID)?>"><?php echo $link->post_title ?></a></li>
                                <?php endwhile; ?>

                            </ul>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('footer-menu-pozostale', pll_current_language('slug'))) : ?>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <ul class="temporary-menu">

                <?php while (have_rows('footer-menu-pozostale', pll_current_language('slug'))) : the_row(); ?>

                    <li <?php if(get_sub_field('footer-menu-pozostale-tylko-na-wersji-mobilnej')):?> class="hidden-lg hidden-md" <?php endif; ?>>
                        <h5>
	                        <?php $link = get_sub_field('footer-menu-pozostale-odnosnik'); ?>
                            <a href="<?php echo the_permalink($link->ID)?>"><?php echo $link->post_title ?></a>
                        </h5>
                    </li>

                <?php endwhile; ?>

                    <li>
                        <h5>
                            <?php 
                                pll_the_languages(
                                    array(
                                        "hide_current"=>1
                                        )
                                ); 
                            ?> 
                        </h5>
                    </li>
                </ul>
            </div>

            <?php endif; ?>

        </div>
        <hr/>

        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12 cc-box">
                <p><?php the_field('footer-klauzula', pll_current_language('slug'))?></p>

                <a href="https://creativecommons.org/licenses/by/4.0/deed.pl" target="_blank">
                    <svg version="1.0" viewBox="0 0 80 15" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                    <defs><clipPath id="a"><rect x="172" y="239.12" width="20.614" height="12.484"/></clipPath></defs><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/></cc:Work></rdf:RDF></metadata><g transform="matrix(.9875 0 0 .93335 -323.9 -271.88)"><g transform="translate(158,54)"><rect x="170.5" y="237.86" width="80" height="15" fill="#fff" stroke="#000" stroke-width="1.0416"/><rect x="172" y="239.36" width="77" height="12"/><path d="m172 239.38v12h20.335c1.3086-1.7503 2.1918-3.7845 2.1918-6 0-2.2007-0.86793-4.2572-2.1605-6h-20.366z" fill="#abb1aa"/><g transform="matrix(.96125 0 0 .96125 6.8342 9.507)" clip-path="url(#a)"><path cx="296.35416" cy="264.3577" rx="22.939548" ry="22.939548" d="m190.06 245.36c0.0025 3.892-3.1509 7.0487-7.0426 7.0512-3.8917 0.00249-7.0489-3.1507-7.0512-7.0426v-0.00854c-0.00226-3.892 3.1509-7.0487 7.0426-7.0509 3.8922-0.00249 7.0489 3.1507 7.0512 7.0427v0.00826z" fill="#fff" type="arc"/><path d="m188.75 239.62c1.5627 1.5627 2.3441 3.4764 2.3441 5.7398 0 2.2639-0.76791 4.1571-2.3037 5.6796-1.6299 1.6036-3.5562 2.4051-5.7789 2.4051-2.1959 0-4.0888-0.795-5.6784-2.385-1.5898-1.5898-2.3845-3.4895-2.3845-5.6997 0-2.2097 0.79476-4.123 2.3845-5.7398 1.5491-1.5632 3.4421-2.3446 5.6784-2.3446 2.2634 0 4.1759 0.78145 5.7385 2.3446zm-10.365 1.0513c-1.3212 1.3344-1.9815 2.8976-1.9815 4.6907 0 1.7926 0.65381 3.3425 1.9612 4.6496 1.3076 1.3076 2.8642 1.9612 4.6704 1.9612 1.8062 0 3.3761-0.66007 4.7106-1.981 1.267-1.2269 1.9007-2.7694 1.9007-4.6298 0-1.8463-0.64403-3.4134-1.9313-4.7008-1.287-1.287-2.847-1.9308-4.68-1.9308-1.833 1e-5 -3.3834 0.64705-4.6501 1.9408zm3.4767 3.902c-0.20188-0.44014-0.50407-0.66034-0.9071-0.66034-0.71249 0-1.0686 0.47976-1.0686 1.4388 0 0.95924 0.35612 1.4385 1.0686 1.4385 0.47049 0 0.80654-0.23347 1.0082-0.70144l0.9876 0.5259c-0.47074 0.83638-1.177 1.2547-2.1187 1.2547-0.72627 0-1.3081-0.22269-1.745-0.66759-0.43763-0.44539-0.65581-1.0593-0.65581-1.842 0-0.76893 0.2252-1.3794 0.67587-1.8315 0.45067-0.45218 1.0119-0.67816 1.6848-0.67816 0.99538 0 1.7081 0.39225 2.139 1.176l-1.0689 0.54724zm4.6464 0c-0.20214-0.44014-0.49831-0.66034-0.88881-0.66034-0.72678 0-1.0904 0.47976-1.0904 1.4388 0 0.95924 0.36365 1.4385 1.0904 1.4385 0.47125 0 0.80127-0.23347 0.98963-0.70144l1.0097 0.5259c-0.46999 0.83638-1.1752 1.2547-2.1152 1.2547-0.72528 0-1.3058-0.22269-1.7425-0.66759-0.43587-0.44539-0.65429-1.0593-0.65429-1.842 0-0.76893 0.22168-1.3794 0.66483-1.8315 0.44289-0.45218 1.0067-0.67816 1.6918-0.67816 0.99362 0 1.7054 0.39225 2.1347 1.176l-1.0899 0.54724z"/></g></g><path d="m357.42 298.69c0.24548 1e-5 0.43161-0.05357 0.5584-0.16075 0.12678-0.10716 0.19017-0.26523 0.19018-0.4742-1e-5 -0.2063-0.0634-0.36303-0.19018-0.4702-0.12679-0.10984-0.31292-0.16476-0.5584-0.16477h-0.86186v1.2699h0.86186m0.0526 2.6243c0.31292 0 0.5476-0.06565 0.70407-0.19693 0.15915-0.13127 0.23873-0.32953 0.23873-0.59477 0-0.25988-0.07824-0.45412-0.23469-0.58272-0.15645-0.13128-0.39249-0.19691-0.70811-0.19692h-0.91446v1.5713h0.91446m1.4486-2.1581c0.33449 0.09645 0.59345 0.27461 0.7769 0.53449 0.18342 0.25988 0.27514 0.57869 0.27515 0.95646-1e-5 0.5787-0.19694 1.01-0.59077 1.294-0.39384 0.28399-0.9927 0.42598-1.7966 0.42598h-2.5856v-6h2.3388c0.83893 1e-5 1.4459 0.12593 1.8208 0.37777 0.37765 0.25185 0.56648 0.65506 0.56648 1.2096 0 0.29204-0.06878 0.5412-0.20635 0.74749-0.13758 0.20362-0.3372 0.355-0.59886 0.45413m0.91657-2.789h1.7035l1.3758 2.138 1.3757-2.138h1.7076l-2.3024 3.4722v2.5278h-1.5578v-2.5278l-2.3024-3.4722" fill="#fff"/></g>
                </svg>
                </a>
            </div>

            <div class="col-md-2 col-sm-6 col-xs-12 partner-box">
                <h5><?php the_field('footer-partnerzy-naglowek', pll_current_language('slug')) ?></h5>

                <div class="swiper-container swiper-footer-logos">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('partnerzy_-_lista', pll_current_language('slug'))) : ?>
                            <?php while (have_rows('partnerzy_-_lista', pll_current_language('slug'))) : the_row(); ?>
                                <div class="swiper-slide">
                                    <a href="<?php the_sub_field('link', pll_current_language('slug')) ?>" target="_blank">
                                        <img src="<?php echo get_sub_field('logo_partnera', pll_current_language('slug'))['url'] ?>" alt="<?php echo get_sub_field('logo_partnera', pll_current_language('slug'))['title'] ?>">
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-6 partner-box">
                <h5><?php the_field('footer-nalezymy-do-naglowek', pll_current_language('slug')) ?></h5>

                <div class="swiper-container swiper-footer-logos">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('nalezymy_do_-_lista', pll_current_language('slug'))) : ?>
                            <?php while (have_rows('nalezymy_do_-_lista', pll_current_language('slug'))) : the_row(); ?>
                                <div class="swiper-slide">
                                    <a href="<?php the_sub_field('link', pll_current_language('slug')) ?>" target="_blank">
                                        <img src="<?php echo get_sub_field('logo_partnera', pll_current_language('slug'))['url'] ?>" alt="<?php echo get_sub_field('logo_partnera', pll_current_language('slug'))['title'] ?>">
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div> 
        
    </div>

</footer>


<?php wp_footer(); ?>

</body>
</html>