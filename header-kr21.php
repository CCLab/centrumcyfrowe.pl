<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php wp_title( '' ); ?>
    </title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="icon" type="image/png" href="https://centrumcyfrowe.pl/wp-content/uploads/sites/16/2022/07/favicon-32x32-1-1.png?v=2"> -->	

    <!-- styles -->
    <link href="<?php echo get_template_directory_uri() ?>/dist/css/dependencies.min.css" rel="stylesheet" /> 
    <link href="<?php echo get_template_directory_uri() ?>/dist/css/kr21.css" rel="stylesheet" />

    <!-- scripts -->
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/dependencies.min.js" rel="stylesheet"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/app.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/kr.js"></script>		

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
    	
  	

    <script type="text/javascript">
        var template_dir = "<?php echo get_template_directory_uri() ?>";
    </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- zdjêcie na FB -->
	
  <meta property="og:image" content="<?php the_field('grafika_na_fb') ?>" />
  <meta property="og:description" content="<?php the_field('opis_linku') ?>" />	
	

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

    <?php if($cookiesVisible){ ?>
        <div class="cookies navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_field('polityka_forum')?> <i id="hide-cookies" class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
      </div>	
    <?php } ?>

    <nav class="nav <?php echo $cookiesVisible ? 'cookies-visible' : '' ?> navbar-fixed-top collapsed">
       <div class="landing-page-nav-container">
            <a href="<?php the_field('link_logo_centrum')?>">
		   <?php $logo_centrum_cyfrowego = get_field('logo_centrum_cyfrowego'); ?>	
                    <img class="img-responsive img-nav img-logo-centrum logo-dark" src="<?php echo $logo_centrum_cyfrowego['url']?>" alt="<?php echo $logo_centrum_cyfrowego['alt']?>">                 </a>

     	      <a href="<?php the_field('link_logo_kr21')?>">
			<?php $logo_kr21 = get_field('logo_kr21'); ?>
                    <img class="img-responsive img-nav img-logo-centrum logo-dark" src="<?php echo $logo_kr21['url']?>" alt="<?php echo $logo_kr21['alt']?>">                 </a>
		<button id="hamburger" class="hamburger hamburger-dark"><img class="img-responsive img-nav hamburger-icon" src="/wp-content/themes/cc2018/dist/images/strona_forum/hamburger_menu.svg"></button>
  		 <button id="cross" class="cross" style="display: none"><img class="img-responsive img-nav hamburger-icon cross-icon" src="/wp-content/themes/cc2018/dist/images/strona_forum/cross.svg"></button>
			<div class="menu">
    			<ul>
       			    <?php	
				if( have_rows('menu') ):
    				while ( have_rows('menu') ) : the_row();
					$napis_menu = get_sub_field('napis_menu');
        				$link_menu = get_sub_field('link_menu');
		   		 echo "<a href=#$link_menu><li>$napis_menu</li></a>";
               			 endwhile;
				else :
    				// no rows found
				endif;		
				?>

				<a href="<?php the_field('language_link')?>"><li><?php the_field('language_napis')?></li></a>
                		</ul>
    			</div>  

			<!-- menu mobile -->

			<div class="menu-mobile">
    			<ul>
       			    <?php	
				if( have_rows('menu') ):
    				while ( have_rows('menu') ) : the_row();
					$napis_menu = get_sub_field('napis_menu');
        				$link_menu = get_sub_field('link_menu');
		   		 echo "<a href=#$link_menu><li>$napis_menu</li></a>";
               			 endwhile;
				else :
    				// no rows found
				endif;		
				?>

				<a href="<?php the_field('language_link')?>"><li><?php the_field('language_napis')?></li></a>
                		</ul>
    			</div>

			<!-- END menu mobile -->

	</div>   <!-- END landing-page-nav-container -->
	          
  </nav> <!-- END nav -->