<?php
	/*
 * Template name: Landing Page KR21 konferencja
 */

get_header('kr21');
?>

<div class="page-container">
	<div class="title-container">	
		<div class="h1-container">
			<?php the_field('title')?>
			<p class="subtitle"><?php the_field('subtitle')?></p>
	       </div>
		<div class="place-date violet"><?php the_field('conf-date-place')?></div>	
		
		
	</div> <!-- END "title-container" -->
	
	<div class="short-desc-container main-column-2 conference-desc">
		<div class="menu-id"><?php the_field('krotki_opis_edycji')?></div>
		<?php $obrazek_w_tle = get_field('obrazek_w_tle'); ?>
		<img class="obrazek-w-tle" src="<?php echo $obrazek_w_tle['url']?>" alt="<?php echo $obrazek_w_tle['alt']?>"> 

<div class="row logo-z-linkiem">
	<div class="col-sm-12">	
	<div class="row">		
			<?php	
				if( have_rows('logos_and_links') ):
    				while ( have_rows('logos_and_links') ) : the_row();
					$opis = get_sub_field('opis_logotypu'); ?>
					<div class='col-sm-4 logos-org'><p><?php echo $opis ?></p>

						<?php if( have_rows('logo_list') ):
							while( have_rows('logo_list') ) : the_row();
								$logo = get_sub_field('logo');
        						$logo_link = get_sub_field('logo-link'); ?>

<a href="<?php echo $logo_link ?>" target="_blank"><img class='img-responsive logo logo-lista' src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>"></a>
		
					<?php endwhile;
					else :
    			// no rows found

				endif; ?>
				</div>
			<?php endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div>			
	</div>	
</div>
</div><!-- END "ikony-z-opisami" -->


	</div> <!-- END "short-desc-container" -->


	 <div class="coordination main-column-2">
			<div class="conference-h2"><?php the_field('registration_title')?></div>	

			<?php the_field('registration_desc')?>

			<a class="button-pink" href="<?php the_field('registration_button_link')?>" target="_blank"><?php the_field('registration_button_text')?></a>

			<div class="row ikony-z-opisami">
			<?php	
			if( have_rows('registration_icons_desc') ):
    			while ( have_rows('registration_icons_desc') ) : the_row();
			$ikona = get_sub_field('icon');
        		$opis_ikony = get_sub_field('icon-desc'); ?>
		    <div class='col-sm-3'> <img class='img-responsive icon' src="<?php echo $ikona['url']?>" alt="<?php echo $ikona['alt']?>"> <p class='icon-text'> <?php echo $opis_ikony ?></p></div>
    			<?php endwhile;
			else :
    			// no rows found
				endif;		
			?>		
		</div> <!-- END "ikony-z-opisami" -->



	<!--		<div class="row">

		<?php	
			if( have_rows('coordination_osoby') ):
    			while ( have_rows('coordination_osoby') ) : the_row();
				$coordination_foto = get_sub_field('coordination_foto');
				$coordination_name = get_sub_field('coordination_name');
        			$coordination_role = get_sub_field('coordination_role');
				$coordination_affil = get_sub_field('coordination_affil');
		?>		
		    <div class="col-sm-6 speaker-info">
				  	    <div class="row">
				  		    <div class="col-sm-4">
				  			    <img class="img-responsive speaker-foto" src="<?php echo $coordination_foto['url']?>" alt="<?php echo $coordination_foto['alt']?>"> 
				  		    </div>
						    <div class="col-sm-8">
						    <p class="speaker-name"> <?php echo $coordination_name ?> </p> 
						    <p class="speaker-affil"> <?php echo $coordination_role ?></p>
						    <p class="speaker-country"> <?php echo $coordination_affil ?></p>
					  	    </div>
				  	    </div>
                  </div>
			<?php	  
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>		  </div> -->
			
	</div> <!-- END "coordination" -->

<div class="programme main-column-2">
			<div class="conference-h2"><?php the_field('programme_naglowek')?></div>
			<p class="date violet"><?php the_field('date')?></p>
			<hr>
			<?php	
			if( have_rows('programme_elements') ):
    			while ( have_rows('programme_elements') ) : the_row();
			$punkty_programu = get_sub_field('punkty_programu');
        	
            	?> <div class="programme-elements"><?php echo $punkty_programu; ?></div>
			<hr>
		    
		<?php
    			 endwhile;
			else :
    			// no rows found
				endif;		
		?>

</div> <!-- END "programme -->

<div class="sessions main-column-2">
			<div class="conference-h2"><?php the_field('sessions_naglowek')?></div>
			<hr>
			<?php	
			if( have_rows('sessions_list') ):
    			while ( have_rows('sessions_list') ) : the_row();
			$lp = get_sub_field('lp'); 
			$session_title = get_sub_field('session_title');
			$session_desc = get_sub_field('session_desc'); 
			$date_naglowek = get_sub_field('date_naglowek');
			$date_text = get_sub_field('date_text');
			 echo "	<div class='toggle-description'><button class='plus-button'><img class='plus-icon' src='https://centrumcyfrowe.pl/wp-content/uploads/sites/16/2022/06/plus-icon.svg'><img class='minus-icon' src='https://centrumcyfrowe.pl/wp-content/uploads/sites/16/2022/06/minus-icon.svg'></button>
				<div class='row sessions-lista equal'>
				<div class='col-sm-2'>
					<p class='l-p black-number'>$lp</p>
				</div>	
				<div class='col-sm-10 '>
				  	
					<h4 class='lt-opis'>$session_title</h4>
					<div class='more-text' style='display: none;'><p>$session_desc</p>
						<div class='row'>
						<div class='col-sm-3 bold'><p class='date-session'>$date_naglowek</p></div>
						<div class='col-sm-9'><p class='date-session'>$date_text</p></div>	
						</div>
			
				
					</div> <!-- END more -->	
				</div>  
			</div></div> <hr>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
</div> <!-- END "sesions -->


<div class="speakers main-column-2">
			<div class="conference-h2"><?php the_field('speakers_naglowek')?></div>	

			
			

		<div class="row speakers-about equal">
			<?php	
			if( have_rows('speakers_info') ):
    			while ( have_rows('speakers_info') ) : the_row();
				$speaker_foto = get_sub_field('speaker_foto');
				$speaker_name = get_sub_field('speaker_name');
        		$speaker_affil = get_sub_field('speaker_affil');
				$speaker_desc = get_sub_field('speaker_desc'); ?>
		    <div class="col-sm-3 speakers-column">
				  			<img class="img-responsive speaker-foto-conf" src="<?php echo $speaker_foto['url']; ?>" alt="<?php echo $speaker_foto['alt']; ?>"> 
						  <p class="speaker-name-conf"> <?php echo $speaker_name ?> </p> 
						  <p class="speaker-affil-conf"> (<?php echo $speaker_affil ?>)</p>
						  <p class="speaker-desc-conf"> <?php echo $speaker_desc ?></p>
					
				  	</div>
    			<?php endwhile;
			else :
    			// no rows found
				endif;		
			?>

			</div> <!-- END speakers-about -->
	</div> <!-- END "speakers" -->


	<div class="study main-column-2">
			<div class="conference-h2"><?php the_field('study_naglowek')?></div>

		<div class="row sdl-study">
			<div class="col-sm-4">
				<?php $study_cover = get_field('study_cover'); ?>
				<img class="img-responsive report-cover" src="<?php echo $study_cover['url'] ?>" alt="<?php echo $study_cover['url'] ?>">
			
			</div>

			<div class="col-sm-7">
				<div class="study-opis"><?php the_field('study_opis')?></div>
				<a class="button-pink button-report-2" href="<?php the_field('report_button_link')?>" target="_blank"><?php the_field('report_button_text')?></a>
			</div>


		</div>	
		<div class="row sdl-study sdl-study2">
			<div class="col-sm-4">
				<?php $study2_cover = get_field('study2_cover'); ?>
				<img class="img-responsive report-cover" src="<?php echo $study2_cover['url'] ?>" alt="<?php echo $study2_cover['url'] ?>">
			
			</div>

			<div class="col-sm-7">
				<div class="study-opis"><?php the_field('study2_opis')?></div>
				<a class="button-pink button-report-2" href="<?php the_field('report2_button_link')?>" target="_blank"><?php the_field('report2_button_text')?></a>
			</div>


		</div>	

	</div> <!-- END "study" -->


		<div class="contact main-column-2">
			<div class="conference-h2"><?php the_field('contact')?></div>
			<div class="row">
				<div class="col-sm-6 contact-details">
					<?php the_field('contact_text')?>
				</div>
				<div class="col-sm-6 flex-sm-icons">
				<?php	
					if( have_rows('ikony_sm') ):
    					while ( have_rows('ikony_sm') ) : the_row();
						$ikona_sm = get_sub_field('ikona_sm');
						$link_sm = get_sub_field('link_sm');
		    			echo "<a href='$link_sm' target='_blank'><img class='sm-icons' src='$ikona_sm'></a>";
    					endwhile;
					else :
    					// no rows found
					endif;		
					?>
				</div>
			</div>
			<hr class="hr-footer">
			
			<div class="license-info"><?php the_field('licencja_info')?></div>
					
				

			</div>



	</div> <!-- END "contact" -->


	<!-- 
	<div class="programme main-column">
			<h2 class="naglowek" id="<?php the_field('program_link')?>"><?php the_field('')?></h2>
			<div class="row equal hidden-xs">
				<div class="col-sm-6 blue-date">
					<p class="program-date"><?php the_field('dzien_pierwszy_data')?></p>
					<p><?php the_field('dzien_pierwszy_dzien')?></p>
				</div>
				<div class="col-sm-6 blue-date">
					<p class="program-date"><?php the_field('dzien_drugi_data')?></p>
					<p><?php the_field('dzien_drugi_dzien')?></p>
				</div>
			</div>
			<?php	
				if( have_rows('program_wiersze') ):
    				while ( have_rows('program_wiersze') ) : the_row();
					$wiersz_z_lewej_godzina = get_sub_field('wiersz_z_lewej_godzina');
        				$wiersz_z_lewej_opis = get_sub_field('wiersz_z_lewej_opis');
					$wiersz_z_prawej_godzina = get_sub_field('wiersz_z_prawej_godzina');
					$wiersz_z_prawej_opis = get_sub_field('wiersz_z_prawej_opis');
		   		 echo "<div class='row equal hidden-xs'>
						<div class='col-sm-6'>
							<hr class='hr-long'>
							<p class='blue-time'>$wiersz_z_lewej_godzina</p>
							$wiersz_z_lewej_opis
						</div>
						
						<div class='col-sm-6'>
							<hr class='hr-long'>
							<p class='blue-time'>$wiersz_z_prawej_godzina</p>
							$wiersz_z_prawej_opis
						</div>
						
    			  			</div>";
				endwhile;
				else :
    				// no rows found
				endif;		
				?>
				-->
			<!-- Programme only mobile -->

				<div class="blue-date visible-xs">
					<p class="program-date"><?php the_field('dzien_pierwszy_data')?></p>
					<p><?php the_field('dzien_pierwszy_dzien')?></p>
                		</div>
                    <?php	
				if( have_rows('program_wiersze') ):
    				while ( have_rows('program_wiersze') ) : the_row();
					$wiersz_z_lewej_godzina = get_sub_field('wiersz_z_lewej_godzina');
        			$wiersz_z_lewej_opis = get_sub_field('wiersz_z_lewej_opis');
		   		 echo "<div class='visible-xs'>
						
							<hr class='hr-long hr-programme'>
							<p class='blue-time'>$wiersz_z_lewej_godzina</p>
							$wiersz_z_lewej_opis
											
    			  			</div>";
				endwhile;
				else :
    				// no rows found
				endif;		
				?>

				<div class="blue-date visible-xs">
					<p class="program-date"><?php the_field('dzien_drugi_data')?></p>
					<p><?php the_field('dzien_drugi_dzien')?></p>
               			 </div>
                    <?php	
				if( have_rows('program_wiersze') ):
    				while ( have_rows('program_wiersze') ) : the_row();
					$wiersz_z_prawej_godzina = get_sub_field('wiersz_z_prawej_godzina');
        			$wiersz_z_prawej_opis = get_sub_field('wiersz_z_prawej_opis');
		   		 echo "<div class='visible-xs'>
						
							<hr class='hr-long hr-programme'>
							<p class='blue-time'>$wiersz_z_prawej_godzina</p>
							$wiersz_z_prawej_opis
						
    			  			</div>";
				endwhile;
				else :
    				// no rows found
				endif;		
				?>

			<!-- END Programme only mobile -->
			
		<!--	<div class="program-info"><?php the_field('program_info')?></div> -->
			<!-- <hr class='hr-programme'> -->
<!--	</div> --> <!-- END "programme" -->


	<!-- <div class="registration main-column">
			<h2 class="naglowek" id="<?php the_field('registration_link')?>"><?php the_field('registration_naglowek')?></h2>
			<div class="row registration-info equal">
			<div class="col-sm-4 col-xs-12">
				<a class="button-blue" href="<?php the_field('link_do_przycisku')?>" target="_blank"><?php the_field('napis_na_przycisku')?></a>
			</div>	
			<div class="col-sm-8">
				<?php the_field('rejestracja_daty')?>
			</div>
			</div>

	</div> <!-- END "registration" --> 
			
	
<!--	<div class="participation main-column">
			
			<h2 class="naglowek"><?php the_field('participation_naglowek')?></h2>
			
			<?php	
			if( have_rows('participation_type') ):
    			while ( have_rows('participation_type') ) : the_row();
			$particip_data = get_sub_field('participation_data');
        		$type = get_sub_field('type');
			$particip_deadline = get_sub_field('participation_deadline');
			$particip_opis = get_sub_field('participation_opis');
		    echo "<div class='particip-type-column'><div class='particip-data'>$particip_data</div><div class='particip-type'>$type</div><div class='particip-deadline'>$particip_deadline</div><div class='particip-opis'>$particip_opis</div></div><hr class='hr-long'>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		
			</div> <!-- END "particip-type-column" -->

	</div>  <!-- END "participation" -->

	<!-- <div class="report main-column">
			<h2 class="naglowek" id="<?php the_field('report_link')?>"><?php the_field('report_naglowek')?></h2>
			<div class="row">
				<div class="col-sm-3">
					<img class="img-responsive okladka-raportu" src="<?php the_field('report_okladka')?>">
				</div>
				<div class="col-sm-9 opis-raportu">
					<?php the_field('report_opis')?>
					<a class="button-report" href="<?php the_field('link_do_przycisku_report')?>" target="_blank"><?php the_field('napis_na_przycisku_report')?></a>
					</div>
				</div>
			<h4 class="report-speakers"><?php the_field('speakers_naglowek')?></h4>
			<div class="row speakers-about">
			<?php	
			if( have_rows('speakers_osoby') ):
    			while ( have_rows('speakers_osoby') ) : the_row();
				$speaker_foto = get_sub_field('speaker_foto');
				$speaker_name = get_sub_field('speaker_name');
        		$speaker_affil = get_sub_field('speaker_affil');
				$speaker_country = get_sub_field('speaker_country');
		    echo "<div class='col-sm-6'>
				  	<div class='row'>
				  		<div class='col-sm-4'>
				  			<img class='img-responsive speaker-foto' src='$speaker_foto'> 
				  		</div>
						  <div class='col-sm-8'>
						  <p class='speaker-name'> $speaker_name </p> 
						  <p class='speaker-affil'> $speaker_affil</p>
						  <p class='speaker-country'> $speaker_country</p>
					  	</div>
				  	</div>
				  </div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>

			</div> <!-- END speakers-about -->

	</div> <!-- END "report" -->
	
<!--	<div class="lt-talks main-column">
			<h2 class="naglowek" id="<?php the_field('lttalks_link')?>"><?php the_field('lightning_talks_naglowek')?></h2>
			<div class="row">
				<div class="col-sm-8">
					<h4 class="lt-opis"><?php the_field('lightning_talks_-_opis')?></h4>
				</div>
			</div>

			<div class="row speakers-lt equal">
			<?php	
			if( have_rows('Lightning talks_osoby') ):
    			while ( have_rows('Lightning talks_osoby') ) : the_row();
				$lt_title = get_sub_field('lt_title');
				$lightning_talks_foto = get_sub_field('lightning_talks_foto');
        			$lightning_talks_name = get_sub_field('lightning_talks_name');
				$lightning_talks_affil = get_sub_field('lightning_talks_affil');
				$lightning_talks_country = get_sub_field('lightning_talks_country');
		    echo "<div class='col-sm-6'>
					<hr class='hr-long hr-short'>
					<p class='speaker-name'>$lt_title</p>
				  	<div class='row lt-speaker-info'>
				  		<div class='col-sm-4'>
				  			<img class='img-responsive speaker-foto' src='$lightning_talks_foto'>
				  		</div>
						  <div class='col-sm-8'>
						  <p>$lightning_talks_name</p> 
						  <p class='lt-affil'>$lightning_talks_affil</p>
						  <p class='speaker-country'>$lightning_talks_country</p>
					  	</div>
				  	</div>
				  </div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>

			</div> <!-- END speakers-lt -->

	</div> <!-- END "lt-talks" -->

<!--	<div class="events main-column">
			<div class="events-naglowek"><h2 class="naglowek" id="<?php the_field('events_link')?>"><?php the_field('events_naglowek')?></h2></div>
				<?php	
			if( have_rows('events_list') ):
    			while ( have_rows('events_list') ) : the_row();
				$l_p = get_sub_field('l_p');
				$event_type = get_sub_field('event_type');
        		$event_title = get_sub_field('event_title');
				$event_description = get_sub_field('event_description');
				$date_naglowek = get_sub_field('date_naglowek');
				$date_tekst = get_sub_field('date_tekst');
				$led_by_naglowek = get_sub_field('led_by_naglowek');
				$led_by_tekst = get_sub_field('led_by_tekst');
				$est_time_naglowek = get_sub_field('est_time_naglowek');
				$est_time_tekst = get_sub_field('est_time_tekst');
		    echo "<hr class='hr-long hr-short'>
			<div class='row events-lista'>	
				<div class='col-sm-3'>
					<p class='l-p'>$l_p</p>
				</div>	
				<div class='col-sm-9 toggle-description'>
				  	<p class='event-type speaker-country'>$event_type</p><button class='plus-button'><img class='plus-icon' src='https://centrumcyfrowe.pl/wp-content/uploads/sites/16/2022/06/plus-icon.svg'><img class='minus-icon' src='https://centrumcyfrowe.pl/wp-content/uploads/sites/16/2022/06/minus-icon.svg'></button>
					<h4 class='lt-opis'>$event_title</h4>
					<div class='more-text' style='display: none;'><p>$event_description</p>
					<hr class='hr-long hr-short'>
					<div class='row equal'>
						<div class='col-sm-3'>
							<p class='speaker-name'>$date_naglowek</p>
						</div>
						<div class='col-sm-9'>
							<p>$date_tekst</p>
						</div>
					</div> 
					<hr class='hr-long hr-short'>
					<div class='row equal'>
						<div class='col-sm-3'>
							<p class='speaker-name'>$led_by_naglowek</p>
						</div>
						<div class='col-sm-9 led-by-tekst'>
							$led_by_tekst
						</div>
					</div>
					<hr class='hr-long hr-short'>
					<div class='row equal'>
						<div class='col-sm-3'>
							<p class='speaker-name'>$est_time_naglowek</p>
						</div>
						<div class='col-sm-9'>
							<p>$est_time_tekst</p>
						</div>
					</div>
					</div> <!-- END more -->	
				</div>  
			</div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>			
	</div> <!-- END "events" -->

<!--	<div class="promotion main-column">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="naglowek"><?php the_field('promotion_naglowek')?></h2>
				</div>
				<div class="col-sm-6 promotion-text">
					<p><?php the_field('promotion_tekst')?></p>
					<p class='hashtags'><?php the_field('promotion_hashtags')?></p>
				</div>

			</div>
	</div> <!-- END "promotion" -->

<!--	<div class="editions main-column">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="naglowek previous-edit-h2"><?php the_field('previous_editions_naglowek')?></h2>
				</div>
				<div class="col-sm-6 previous-edit-text">
			<?php	
				if( have_rows('previous_editions_tekst') ):
    					while ( have_rows('previous_editions_tekst') ) : the_row();
					$prev_title = get_sub_field('previous_edition_title');
					$prev_link = get_sub_field('previous_edition_link');
		    			echo "<p><a href='$prev_link' target='_blank'>$prev_title</a></p>";
    					endwhile;
					else :
    					// no rows found
						endif;		
					?>
					</div>
					</div>
	</div> <!-- END "editions" -->

<!--	<div class="partners main-column">
			<div class="row equal">
				<div class="col-md-5 col-sm-4">
					<span class="partner"><?php the_field('organiser_naglowek')?></span>
					<a href="<?php the_field('organiser_link')?>"><img class="img-responsive org-logo" src="<?php the_field('organiser_logo')?>"></a>
				</div>
				<div class="col-md-7 col-sm-8">
					<span class="partner"><?php the_field('partners_naglowek')?></span>
					<div class="flex-partners"><?php	
						if( have_rows('partners_logo') ):
    						while ( have_rows('partners_logo') ) : the_row();
						$logo_partnera= get_sub_field('logo_partnera');
						$partner_link = get_sub_field('partner_link');
		    			echo "<a href='$partner_link' target='_blank'><img class='partner-logo' src='$logo_partnera'></a>";
    					endwhile;
					else :
    					// no rows found
					endif;		
					?></div>
				</div>
			</div>
			<div class="info-text"><?php the_field('info_text')?></div>

	</div> <!-- END "partners" -->



	
	        
</div> <!-- END "page-container" -->

<?php wp_footer(); ?>



