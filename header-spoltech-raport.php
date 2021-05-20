<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php wp_title( '' ); ?>
    </title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles -->
    <link href="<?php echo get_template_directory_uri() ?>/dist/css/dependencies.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() ?>/dist/css/app.min.css" rel="stylesheet" />

    <!-- scripts -->
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/dependencies.min.js" rel="stylesheet"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/app.min.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">

    <script type="text/javascript">
        var template_dir = "<?php echo get_template_directory_uri() ?>";
    </script>	



	<!-- zdjêcie z posta zaci¹ga siê jako ilustracja na FB -->
	

<?php
		if( get_field('zdjecie') ){
			$image = get_field('zdjecie');
			$url = $image['url'];
			echo "<meta property=\"og:image\" content=$url>";
			}
		 

	
		elseif ( get_field('ikona') ){
			$image = get_field('ikona');
			$url = $image['url'];
			echo "<meta property=\"og:image\" content=$url>";
			}
		 


	
		elseif( have_rows('lista_modulow') ){

    			while( have_rows('lista_modulow') ) : the_row();
		
			$layout = get_row_layout();
		
			if( $layout === 'obrazek' ) {
			
				$image = get_sub_field('zdjecie');
				$url = $image['url'];
				echo "<meta property=\"og:image\" content=$url>";
			}

   		 endwhile;

		}
		else {
			echo "<meta property=\"og:image\" content='https://centrumcyfrowe.pl/wp-content/uploads/sites/16/2018/06/obserwujacy-ryby-e1529703309678.jpg'>";
		}
	?>

	

    <?php wp_head(); ?>

</head>

<?php
    $httpContext = stream_context_create([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false
        ]
    ]);

    $cookiesVisible = false;
    if(!isset($_COOKIE['centrumcyfrowe_cookie_accept']) || !$_COOKIE['centrumcyfrowe_cookie_accept'] === 1) {
        $cookiesVisible = true;
    }
?>
<body class="<?php echo $cookiesVisible ? 'cookies-visible' : '' ?>">

    <div class="loader-container">
        <div class="loader">
            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" viewBox="0 0 47 42">
                <g fill="none" fill-rule="evenodd">
                    <path fill="#FF5722" d="M23.722 24.693a4.605 4.605 0 0 1-3.195 1.294c-2.567 0-4.655-2.113-4.655-4.71s2.088-4.71 4.655-4.71c1.237 0 2.36.494 3.194 1.293l3.59-3.631a9.638 9.638 0 0 0-6.784-2.797c-5.365 0-9.73 4.417-9.73 9.845 0 5.428 4.365 9.845 9.73 9.845a9.637 9.637 0 0 0 6.784-2.798l-3.589-3.631z"
                    />
                    <path fill="#2A2A2A" d="M40.218 3.216l-3.59 3.625c7.026 8.05 7.026 20.2 0 28.248l3.59 3.626c8.995-10.053 8.994-25.445 0-35.499zM32.39 30.811c4.712-5.678 4.712-14.012 0-19.691l-3.602 3.637c2.766 3.652 2.766 8.766 0 12.417l3.602 3.637zm-.64-21.13l3.579-3.614C31.578 2.327 26.429.013 20.754.013 9.31.013 0 9.413 0 20.966c0 11.553 9.31 20.953 20.754 20.953 5.675 0 10.824-2.314 14.575-6.055l-3.58-3.614c-2.833 2.815-6.716 4.556-10.995 4.556-8.651 0-15.69-7.106-15.69-15.84s7.039-15.84 15.69-15.84c4.279 0 8.161 1.74 10.994 4.555z"
                    />
                </g>
            </svg>
        </div>
    </div>

    <?php if($cookiesVisible){ ?>
        <div class="cookies navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_field('polityka_prywatnosci', pll_current_language('slug')) ?> <i id="hide-cookies" class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

<nav class="nav <?php echo $cookiesVisible ? 'cookies-visible' : '' ?> navbar-fixed-top collapsed">
        <div class="container">
            <div class="row">
		<div class="col-md-2 col-sm-2 col-xs-5 logo">
                   
                    <div>
                        <img class="img-responsive logo-spoltech" <?php print_image(get_field('logotyp')) ?>    
                    </div>
    
                </div>
                
                <div class="col-md-3 col-sm-2 col-xs-2 logo-centrum-spoltech landing-page-nav">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" viewBox="0 0 47 42">
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="#FF5722" d="M23.722 24.693a4.605 4.605 0 0 1-3.195 1.294c-2.567 0-4.655-2.113-4.655-4.71s2.088-4.71 4.655-4.71c1.237 0 2.36.494 3.194 1.293l3.59-3.631a9.638 9.638 0 0 0-6.784-2.797c-5.365 0-9.73 4.417-9.73 9.845 0 5.428 4.365 9.845 9.73 9.845a9.637 9.637 0 0 0 6.784-2.798l-3.589-3.631z"/>
                                    <path fill="#2A2A2A" d="M40.218 3.216l-3.59 3.625c7.026 8.05 7.026 20.2 0 28.248l3.59 3.626c8.995-10.053 8.994-25.445 0-35.499zM32.39 30.811c4.712-5.678 4.712-14.012 0-19.691l-3.602 3.637c2.766 3.652 2.766 8.766 0 12.417l3.602 3.637zm-.64-21.13l3.579-3.614C31.578 2.327 26.429.013 20.754.013 9.31.013 0 9.413 0 20.966c0 11.553 9.31 20.953 20.754 20.953 5.675 0 10.824-2.314 14.575-6.055l-3.58-3.614c-2.833 2.815-6.716 4.556-10.995 4.556-8.651 0-15.69-7.106-15.69-15.84s7.039-15.84 15.69-15.84c4.279 0 8.161 1.74 10.994 4.555z"/>
                                </g>
                            </svg>
				<span class="light hidden-xs">Projekt Centrum Cyfrowego</span>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-7 col-sm-8 col-xs-5 only-mobile">
                    <div class="hamburger hamburger--spring js-hamburger menu-trigger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-9 col-xs-7">
                    
                    <?php
                        wp_nav_menu( array(
                            'menu'           => 'Raport Spo³-Tech Menu',
                            'theme_location' => 'landing-page-spoltech-raport',
                            'depth'          => 2,
                            'container'      => 'div',
                            // 'container_class'=> 'hidden',
                            'container_id'   => 'main-menu',
                            'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'         => new WP_Bootstrap_Navwalker()
                        ) );
				    ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- </nav> -->

    