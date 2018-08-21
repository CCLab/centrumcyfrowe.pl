
<div class="row">
	<?php
	if (get_post_type() === 'projekty') {
		$odstep = " col-md-offset-0 col-sm-offset-0 col-xs-offset-0";
		$rozmiar_kolumny = 'col-md-12 col-sm-12 col-xs-12';
	}
	else {
		$odstep = " col-md-offset-2 col-sm-offset-2 col-xs-offset-0";
		$rozmiar_kolumny = 'col-md-8 col-sm-8 col-xs-12';
	}
	?>

    <div class="<?php echo $rozmiar_kolumny . $odstep ?>">
		<h3 class="orange">
			<?php the_sub_field('tresc_naglowka') ?>
		</h3>
	</div>
</div>