<?php
	/*
 * Template name: Landing Page SpolTech Raport
 */

get_header('spoltech-raport');
?>

<style>

body {
	color: #000000 !important;
}

main.landing-page {
	background-color: #ffffff !important;
}

.landing-page-nav span {
	float: left !important;
}

@media (max-width: 1199px) {
 .landing-page-nav span {
	display: none;
	}
}

.row .wstep {
 	margin-bottom: 50px;
}

h1 {
	color: #000000;
}

h1.spoltech-raport-tytul {
	font-family: Steelfish;
	font-weight: normal;
	font-size: 60px;
	letter-spacing: 3px;
	margin-bottom: 80px;
	margin-left: 175px;
}

.okladka-raport-glowna {
	margin-left: 27px;
}

.raport-spoltech-podtytul {
	padding-top: 150px;
}

.header .content-box {
	padding-top: 100px;
}

p.przyszlosc {
	font-family: Steelfish;
 	font-size: 40px; 
	letter-spacing: 2px; 
	margin-top: 20px; 
	margin-bottom: 15px;"
}

p.zapisz-sie {
	font-family: Steelfish; 
	font-size: 40px; 
	letter-spacing: 2px; 
	margin-top: 50px; 
	margin-bottom: 15px;
}

.image img {
	background-color: transparent !important;
}

#mc_embed_signup form {
	padding-left: 0 !important;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
	h1.spoltech-raport-tytul {
	margin-left: 140px;
	}
	.raport-spoltech-podtytul {
	padding-top: 80px;
	}
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.logo img {
	padding-top: 15px;
	}
	h1.spoltech-raport-tytul {
	margin-left: 115px;
	margin-bottom: 50px;
	font-size: 55px;
	}
	.okladka-raport-glowna {
	width: 50%;
	}
	.raport-spoltech-podtytul {
	padding-top: 20px;
	}
	.raport-spoltech-podtytul-tekst {
	font-size: 25px;
	margin-right: 55px;
	}
	.nasze-raporty {
	width: 50%;
	margin-bottom: 15px;
	}

}


@media only screen and (min-width: 450px) and (max-width: 767px) {
	
	.logo img {
	max-width: 50%;
	}

	h1.spoltech-raport-tytul {
	margin-left: 0;
	margin-bottom: 50px;
	font-size: 45px;
	text-align: center;
	}
	.okladka-raport-glowna {
	margin-left: auto;
	margin-right: auto;
	width: 40%;
	}
	.raport-spoltech-podtytul {
	padding-top: 10px;
	}
	.raport-spoltech-podtytul-tekst {
	text-align: center;	
	}
	.button {
	margin-left: auto;
	margin-right: auto;
	}
	.nasze-raporty {
	width: 50%;
	margin-bottom: 15px;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;

	}
}

@media only screen and (max-width: 449px) {

	
	.logo {
	padding-left: 0;
	}
	.logo img {
	max-height: 72px;
	}
	.landing-page-nav svg {
	padding-bottom: 5px;
	max-height: 72px;
	}

	.nav .row>div:last-child #main-menu>ul>li>a{
	padding-left: 10px;
	}
	.nav .row>div:last-child #main-menu>ul>li .dropdown-menu a {
    	padding-left: 0 !important;
	font-size: 14px;
	}
	.nav .row>div:last-child #main-menu>ul>li .dropdown-menu li {
	padding-left: 0 !important;
	}

	p {
	margin-bottom: 15px !important;
	}

	row.wstep {
 	margin-bottom: 30px;
	}

	h1.spoltech-raport-tytul {
	margin-left: 0;
	margin-bottom: 50px;
	font-size: 45px;
	text-align: center;
	}
	.okladka-raport-glowna {
	margin-left: auto;
	margin-right: auto;
	width: 100%;
	}
	.raport-spoltech-podtytul {
	padding-top: 10px;
	}
	.button {
	margin-left: auto;
	margin-right: auto;
	height: 50px;	
	line-height: 45px;
	}

		
	p.przyszlosc {
	font-size: 30px; 
	letter-spacing: 1px; 
	margin-top: 20px; 
	margin-bottom: 15px;"
	}

	.nasze-raporty {
	width: 80%;
	margin-bottom: 15px;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	}
	p.zapisz-sie {
	font-family: Steelfish; 
	font-size: 30px; 
	letter-spacing: 1px; 
	margin-top: 30px; 
	margin-bottom: 15px;
	}


}
	

</style>


    <div class="landing-page-nav-container">
        <div class="container">
            <div class="row landing-page-nav">
                
                
            </div>
        </div>
    </div>

<header class="header-spoltech-raport" style="background-image: none;">

    
    <?php cc_tooltip($obrazek) ?>
</header>


<main class="landing-page" id="landing-page">
    <div class="container">
	<div class="content">
        <div class="content-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-8 col-xs-12">
                        <h1 class="spoltech-raport-tytul"><?php the_field('header-h1-text') ?></h1>
                        <h4><?php the_field('header-subtext') ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php include(locate_template("modules-includer.php")); ?>

    </div>
</main>



<?php get_footer(); ?>
