<?php
	/*
 * Template name: Landing Page Forum
 */

get_header('forum');
?>

<style>

.navbar-fixed-top {
	display: none;
}

h1, h2, h3, h4, .landing-page-nav-container h5 {
	font-family: Muli-Black;
	font-weight: 400 !important;
}


h1 {
	font-size: 70px;
}


h2 {
	font-size: 60px;
	margin-bottom: 25px;
}


h3 {
	font-size: 35px;
}


h5 {
	font-size: 20px;
}

p, li {
	font-size: 20px;
}

.container-logo .row {
	margin-left: 0;
	margin-right: 0;
}

.img-logo-centrum {
	max-height: 70px;
	margin-left: 70px;
	margin-bottom: 0px;
}


.title-container, .first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .previous-edition, .contact, .logos {
	width: 98%;
	margin-left: auto;
	margin-right: auto;
}

.title-container {
	background-image: url(<?php  echo the_field('main-image') ?>);
	background-repeat: no-repeat;
	background-size: 100%;
	padding-bottom: 95px;
}

.white-title h1{
	color: #FFFFFF;
	padding-top: 100px;
	padding-left: 120px;
	padding-bottom: 30px;
}
sup {
	color: #FFFFFF;
}

.white-title h3{
	color: #F8C55C;
	padding-left: 120px;
	margin-bottom: 0px;
}

/* title block */

@media only screen and (max-width: 1400px) {

	.title-container {
		padding-bottom: 80px;
	}

	.white-title h1 {
		font-size: 60px;
		padding-left: 100px;

	}
	.white-title h3{
		font-size: 30px;
		padding-left: 100px;
	}

}

@media only screen and (max-width: 1241px) {
	.title-container {
		padding-bottom: 50px;
	}

	.white-title h1 {
		font-size: 50px;
		padding-left: 80px;
		padding-top: 80px;

	}
	.white-title h3{
		font-size: 25px;
		padding-left: 80px;
	}

}

@media only screen and (max-width: 1030px) {
	.title-container {
		padding-bottom: 30px;
	}

	.white-title h1 {
		font-size: 40px;
		padding-left: 80px;
		padding-top: 60px;
		margin-bottom: 0;

	}
	.white-title h3{
		font-size: 20px;
		padding-left: 80px;
		margin-top: 0;
	}
}

@media only screen and (max-width: 840px) {
	.white-title h1 {
		font-size: 35px;
		padding-left: 60px;
		padding-top: 30px;
		padding-bottom: 20px;

	}
	.white-title h3{
		font-size: 20px;
		padding-left: 60px;
		
	}
}

@media only screen and (max-width: 768px) {
	.img-logo-centrum {
		max-width: 130%;
		height: auto;
	}
	.title-container {
		background-color: #213B87;
		background-size: 101%;
	}

}

@media only screen and (max-width: 640px) {
	
	.white-title h1 {
		font-size: 30px;
		padding-left: 40px;
		padding-top: 20px;
		padding-bottom: 10px;

	}
	.white-title h3{
		font-size: 18px;
		padding-left: 40px;
		
	}
	body.cookies-visible {
    		padding-top: 5px;
	}
	.img-logo-centrum {
		margin-left: 0px;
	}

}

@media only screen and (max-width: 530px) {
	.white-title h1 {
		font-size: 25px;
		padding-left: 30px;
		padding-top: 20px;
		padding-bottom: 10px;

	}
	.white-title h3{
		font-size: 16px;
		padding-left: 30px;
		
	}
}

@media only screen and (max-width: 460px) {
	.white-title h1 {
		font-size: 20px;
		padding-left: 25px;
		padding-top: 15px;
		padding-bottom: 10px;

	}
	.white-title h3{
		font-size: 15px;
		padding-left: 25px;
		
	}
}

@media only screen and (max-width: 380px) {
	.white-title h1 {
		font-size: 18px;
		padding-left: 25px;
		padding-top: 15px;
		padding-bottom: 5px;

	}
	.white-title h3{
		font-size: 14px;
		padding-left: 25px;
		
	}
}

@media only screen and (max-width: 340px) {
	.white-title h1 {
		font-size: 16px;
		padding-left: 20px;
		padding-top: 10px;
		padding-bottom: 0px;

	}
	.white-title h3{
		font-size: 12px;
		padding-left: 20px;
	}
}

@media only screen and (min-width: 0px) {
	sup {
		display: inline;
	}
}


.first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .previous-edition, .contact {
	padding-left: 20%;
	padding-right: 20%;
}

/* .first-block-background {
	background-image: url(https://centrumcyfrowe.pl/wp-content/uploads/sites/16/2021/08/tlo_test.png);
	background-size: 104%;
	background-repeat: no-repeat;
	background-position: 50% 130%;
} */ 

.first-text-block {
	padding-top: 60px;
	padding-bottom: 60px;
}

.first-text-block p {
	font-family: Muli-Black;
	color: #213B87;
}

.about {
	font-family: Muli-SemiBold;
	color: #FFFFFF;
	background-color: #213B87;
	padding-top: 20px;
	padding-bottom: 60px;

}


.about br{
	display: none;
}

ul li::marker {
	color: #EC6631;
}

.orange-background {
	background-color: #EC6631;
	padding-top: 15px;
	padding-bottom: 15px;
	padding-left: 10px;
	padding-right: 20px;
}

.registration {
	color: #213B87;
	padding-bottom: 50px;
}
.registration h2 {
	padding-top: 30px;
}

.registration-link {
	background-color: #213B87;
	font-size: 25px;
	font-family: Muli-Black;
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 20px;
	padding-right: 20px;
	margin-top: 30px;

}

.registration a {
	color: #FFFFFF;
}


.registration-arrow {
	color: #F8C55C;
	float: right;
	padding-top: 7px;
}

.notes-row {
	margin-top: 50px;
	margin-bottom: 20px;
	display: flex;
	display: -webkit-flex;
  	flex-wrap: wrap;
	margin-left: 0px;
	margin-right: 0px;
	
}

.note-column-1, .note-column-2 {
	border: 1px solid #F8C55C;
	width: calc(50% - 5px);
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 40px;
	padding-bottom: 10px;
}

.note-column-1 {
	margin-right: 5px;
}


.note-column-2 {
	margin-left: 5px;
} 

.note {
	color: #F8C55C;
	font-family: Muli-Black;
	font-size: 40px;
	transform: rotate(-90deg);
	margin-top: 50px;
}

.registration-info {
	margin-top: 15px;
}

.info-1 {
	padding-left: 0px;
	padding-top: 20px;
}

.info-2 {
	color: #EC6631;
	border: solid 1px #EC6631;
	width: calc(50% - 5px);
	margin-left: 5px;
	padding-top: 50px;
	padding-left: 30px;
}

.info-2 br {
	display: none;
}

.programme {
	color: #213B87;
	padding-bottom: 50px;
}

.programme h4 {
	margin-bottom: 10px;
}

.programme h4:nth-child(2) {
	margin-top: 30px;
}

.programme p br {
	display: none;
}

.report-premiere {
	color: #213B87;
	background-color: #F8C55C;
	padding-top: 20px;
	padding-bottom: 15px;
}

.report-premiere p{
	font-family: Muli-Black;
}


.img-report-cover {
	max-width: 230%;
	transform: rotate(15deg);
	margin-top: 45px;
	margin-left: 50px;
}

@media only screen and (max-width: 1130px) {
	.img-report-cover {
		transform: rotate(0deg);
		margin-left: 35px;
	}
}

@media only screen and (max-width: 768px) {
	.img-report-cover {
		max-width: 70%;
		width: 70%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	
	.h2-speakers {
		margin-top: 50px;
	}
}


.download-report {
	color: #FFFFFF;
	font-family: Muli-Black;
}

.download-report:visited, .download-report:hover {
	color: #FFFFFF;
}


.report-link-text {
	background-color: #EC6631;
	text-align: center;
	font-size: 15px;
	letter-spacing: 3px;
	margin-top: 60px;
	margin-left: 55px;
	padding-left: 35px;
	padding-right: 35px;
	padding-top: 7px;
	padding-bottom: 7px;
	position: absolute;
}


@media only screen and (max-width: 768px) {
	.report-link-text {
		margin-top: 40px;
		display: block;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 30px;
		width: calc(100% - 100px);
		padding-top: 20px;
		padding-bottom: 20px;
		position: relative;
		padding-left: 30px;
		padding-right: 30px;
	}

}


.report-premiere > .row > .col-sm-10 > h2 {
	margin-top: 40px;
}

.report-premiere > .row > .col-sm-10 {
	margin-bottom: 25px;
}


.h2-speakers {
	margin-left: 15px;
}

.report-speakers {
	background-color: #F8C55C;
	padding-bottom: 30px;
}

.report-speakers > .row > .col-sm-3:nth-child(4n+1) {
    clear: both;
	margin-bottom: 40px;
}

.img-speaker-foto {
	max-width: 85%;
	border: 3px solid #9C79B3;
	border-radius: 50%;
}

.speaker-name {
	font-family: Muli-Black;
	color: #213B87;
	margin-top: 20px;
	margin-bottom: 5px;
}

.speaker-country {
	font-family: Muli-Black;
	color: #213B87;
	margin-top: 5px;
	margin-bottom: 5px;
	text-transform: uppercase;
}

.lightning-talks {
	color: #213B87;
	background-color: #DBC9E8;
	padding-top: 15px;
	padding-bottom: 25px;
}

.lightning-talks h2{
	margin-top: 40px;	
}


.lightning-talks p {
	font-family: Muli-Black;
	margin-top: 40px;
}

.lt-speakers {
	color: #213B87;
	background-color: #DBC9E8;
	padding-bottom: 25px
}

.lt-speakers > .row > .col-sm-3:nth-child(4n+1) {
    clear: both;
}

.lt-speakers > .row > .col-sm-3 {
	margin-bottom: 30px;
}


.lt-speaker-country {
	color: #213B87;
}

.lt-speaker-name {
	color: #213B87;
}

.workshops {
	color: #213B87;
	background-color: #F8C55C;
	padding-bottom: 35px;
	padding-top: 25px;

}

.workshops h2{
	margin-bottom: 35px;
}

.workshops h4{
	margin-top: 50px;
	margin-bottom: 40px;
}


.previous-edition {
	color: #FFFFFF;
	background-color: #EC6631;
	padding-bottom: 30px;
	padding-top: 30px;

}

.contact {
	color: #FFFFFF;
	background-color: #213B87;
	padding-bottom: 15px;
	padding-top: 20px;
}

.contact p br {
	display: none;
}

.logos {
	padding-left: 12%;
	padding-right: 12%;
}


.flex-container {
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-evenly;
  height: 130px;
}

.flex-item {
  margin: auto;
}

.partner-logo {
	max-width: 120px;
}


@media only screen and (max-width: 1241px) {
	h2 {
		font-size: 50px;
	}
	p, li {
	font-size: 18px;
	}

}


@media only screen and (max-width: 960px) {
	.info-2 {
		padding-left: 5px;
		font-size: 16px;
	}
	.note-column-1 p, .note-column-2 p, .info-1 p, .info-2 p {
		font-size: 16px;
	}
	.note {
		font-size: 30px !important;
	}
}


@media only screen and (max-width: 768px) {
	h2 {
		font-size: 30px;
	}

	h3 {
		font-size: 26px;
	}

	h4 {
		font-size: 22px;
	}

	.title-container, .first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .previous-edition, .contact, .logos {
	width: 100%;
	}

	.first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .previous-edition, .contact {
	padding-left: 10%;
	padding-right: 10%;
	}


	.first-text-block {
    		padding-top: 40px;
    		padding-bottom: 40px;
	}

	.note-column-1, .note-column-2 {
		width: 100%;
		padding-top: 30px;
	}

	.note-column-1 {
		margin-right: 0;
		margin-bottom: 10px;
	}

	
	.note-column-2 {
		margin-left: 0;
	}

	.note-column-1 .row, .note-column-2 .row {
		display: flex;
	}
	.note {
		margin-top: 20px;
	}
	


	.note-column-1 p, .note-column-2 p, .info-1 p, .info-2 p {
		font-size: 18px;
	}

	.info-2 {
		width: 100%;
		padding-top: 20px;
		padding-left: 10px;
	}


	.programme h2 {
		margin-top: 0;
	}

	.report-speakers > .row > .col-sm-3:nth-child(4n+1) {
        	margin-bottom: 0px;
	}

	.speaker-country {
		margin-bottom: 40px;
	}

	.img-speaker-foto {
		margin-left: auto;
		margin-right: auto;
	}
	.speaker-name, .speaker-country, .lt-theme {
		text-align: center;
	}

	.speaker-country {
		margin-bottom: 40px;
	}
	.lt-speaker-country {
		margin-bottom: 0px;
	}

	.lt-theme {
		margin-bottom: 40px;
	}
	.logos {
		padding-left: 0;
		padding-right: 0;
		margin-bottom: 50px;
	}
	.flex-container {
		display: block;
		width: 50%;
		height: auto;
		margin-left: auto;
		margin-right: auto;

	}
	.partner-logo {
		max-width: 100%;
		height: auto
		width: 100%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 30px;
	}

}

@media only screen and (max-width: 576px) {
	.first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .previous-edition, .contact {
		padding-left: 5%;
		padding-right: 5%;
	}

	.note-column-1 .col-sm-2, .note-column-2 .col-sm-2 {
		padding-right: 0;
		padding-left: 0;

	}
	.note-column-1 .col-sm-10, .note-column-2 .col-sm-10 {
		padding-left: 0;
	}
	.note {
		margin-top: 25px;
	}


	.img-speaker-foto {
		border: 2px solid #9C79B3;
	}
}

@media only screen and (max-width: 400px) {
	.registration-link {
		font-size: 22px;
	}
}

@media only screen and (max-width: 393px) {
	.info-2 p {
		white-space: normal;
		margin-bottom: 10px;
	}
}


@media only screen and (max-width: 351px) {
	.registration-link {
		font-size: 20px;
		padding-right: 10px;
		padding-left: 10px;
	}
}

@media only screen and (max-width: 297px) {
	.registration-arrow {
		display: none;
	}
	.registration-link {
		font-size: 18px;
		
	}
}


</style>


    <div class="landing-page-nav-container">
        <div class="container-logo">
            <div class="row">
                                
                <div class="col-sm-3 col-sm-4 col-xs-5">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <div>
                           
    			<img class="img-responsive img-logo-centrum" src="https://centrumcyfrowe.pl/wp-content/uploads/sites/16/2021/07/CC_logopoziom_RGB-scaled.jpg">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

   <div class="page-container">

	<div class="title-container white-title">
		<?php the_field('event-title')?>
		<?php the_field('event-date')?>
	</div> <!-- END title-container> -->

	<div class="first-block-background">
	<div class="first-text-block">
		<?php the_field('first-text-block')?>
	</div> <!-- END first-text-block> -->
	</div> <!-- END first-block-background> -->

	<div class="about">
		<?php the_field('about')?>
	</div> <!-- END about> -->

	<div class="registration">
		<?php the_field('registration')?>
		<a target="_blank" href="<?php the_field('registration-link')?>"><p class="registration-link"><?php the_field('registration-button')?><i class="fa fa-caret-right registration-arrow"></i></p></a>
	<div class="row notes-row">
	<div class="col-sm-6 note-column-1">
	<div class="row">
	<div class="col-sm-2">
		<p class="note">Note</p>
	</div>
	<div class="col-sm-10">
		<?php the_field('note-1')?>
	</div>
	</div>
	</div>
	<div class="col-sm-6 note-column-2">
	<div class="row">
	<div class="col-sm-2">
		<p class="note">Note</p>
	</div>
	<div class="col-sm-10">
		<?php the_field('note-2')?>
	</div>
	</div>
	</div>
	</div> <!-- END notes-row -->
	
	<div class="row notes-row registration-info">
	<div class="col-sm-6 info-1">
		<?php the_field('registration-info')?>
	</div>
	<div class="col-sm-6 info-2">
		<?php the_field('registration-contact')?>
	</div>
	</div> <!-- END registration-info -->
	</div> <!-- END registrationt> -->

	<div class="programme">
		<?php the_field('programme')?>
	</div> <!-- END programme -->
	
	<div class="report-premiere">
	<div class="row">
	<div class="col-sm-10">
		<?php the_field('report-premiere')?>
	</div>
	 <div class="col-sm-2">
		<img class="img-responsove img-report-cover" src="<?php the_field('report-cover')?>">
		<a class="download-report" href="<?php the_field('report-button-link')?>"><p class="report-link-text"><?php the_field('report-button-text')?></p></a>
	</div> 
	 <h2 class="h2-speakers">Speakers</h2>
	</div> <!-- END row -->
	</div> <!-- END report-premiere -->

	<div class="report-speakers">

	
		<div class="row"> 
			<?php	
			if( have_rows('speakers') ):
    			while ( have_rows('speakers') ) : the_row();
			$speaker_foto = get_sub_field('speaker-foto');
        		$speaker_name = get_sub_field('speaker-name');
			$speaker_country = get_sub_field('speaker-country');
        		echo "<div class='col-sm-3'> <img class='img-responsive img-speaker-foto' src='$speaker_foto'> <p class='speaker-name'> $speaker_name </p> <p class='speaker-country'> $speaker_country</p> </div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- END row -->
	</div> <!-- END report-speakers -->
	
	<div class="lightning-talks">
		<?php the_field('lightning-talks')?>

	</div> <!-- END lightning-talks -->


	<div class="lt-speakers">
		<div class="row"> 
			<?php	
			if( have_rows('lt-speakers') ):
    			while ( have_rows('lt-speakers') ) : the_row();
			$lt_speaker_foto = get_sub_field('lt-speaker-foto');
        		$lt_speaker_name = get_sub_field('lt-speaker-name');
			$lt_speaker_country = get_sub_field('lt-speaker-country');
			$lt_theme = get_sub_field('lt-theme');
        		echo "<div class='col-sm-3'> <img class='img-responsive img-speaker-foto' src='$lt_speaker_foto'> <p class='speaker-name lt-speaker-name'> $lt_speaker_name </p> <p class='speaker-country lt-speaker-country'> $lt_speaker_country</p> <p class='lt-theme'> $lt_theme</p> </div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- END row -->
	</div> <!-- END lt-speakers -->

	<div class="workshops">
		<?php the_field('workshops')?>

	</div> <!-- END workshops -->
	
	<a target="_blank" href="<?php the_field('previous-edition-link')?>"><div class="previous-edition">
		<h3><?php the_field('previous-edition-text')?></h3>

	</div> <!-- END previous-edition --></a>

	<div class="contact">
		<?php the_field('contact')?>
	</div> <!-- END contact -->

	<div class="logos">
		<div class="flex-container"> 
			<?php	
			if( have_rows('partner-logos') ):
    			while ( have_rows('partner-logos') ) : the_row();
			$partner_logo = get_sub_field('partner-logo');
        		echo "<div class='flex-item'> <img class='img-responsive partner-logo' src='$partner_logo'> </div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- END flex-container -->
	</div> <!-- END logos -->

  </div> <!-- END page-container -->		

<div class="content-nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-12 hidden-xs">
                <ul id="content-nav-ul">
			<li><a href="#about">about</a></li>
			<li><a href="#registration">registration</a></li>
			<li><a href="#programme">programme</a></li>
			<li><a href="#report">report premiere</a></li>
			<li><a href="#talks">lightening talks</a></li>
			<li><a href="#workshops">workshops</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

 


<?php get_footer(); ?>
