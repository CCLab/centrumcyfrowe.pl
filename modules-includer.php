<div class="row">

	<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">
		<?php the_content() ?>
	</div>

</div>

<?php
if( have_rows('lista_modulow') ):
	while ( have_rows('lista_modulow') ) : the_row();

		if( get_row_layout() == 'obrazek' ):
			include(locate_template('modules/image.php'));

		elseif( get_row_layout() == 'kolumna_tekstowa' ):
			include(locate_template('modules/text-column.php'));

		elseif( get_row_layout() == 'pomaranczowy_naglowek' ):
			include(locate_template('modules/heading.php'));

		elseif( get_row_layout() == 'pozycja_w_spisie' ):
			include(locate_template('modules/contents-item.php'));
			
		elseif( get_row_layout() == 'galeria' ):
			include(locate_template('modules/gallery.php'));

		elseif( get_row_layout() == 'obrazek_z_tekstem' ):
			include(locate_template('modules/image-and-text.php'));

		endif;
	endwhile;
endif;
?>