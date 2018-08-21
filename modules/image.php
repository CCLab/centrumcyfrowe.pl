
<div class="row image-container">

	<?php 
		$rozmiar = get_sub_field('rozmiar_zdjecia');
		$obrazek = get_sub_field('zdjecie');

		$classes = "col-md-6 col-md-offset-3 image image-small ";
        if($rozmiar === 'medium'){
            $classes = 'col-md-8 col-md-offset-2 col-sm-offset-0 col-xs-offset-0 image image-medium ';
        }else if($rozmiar === 'big'){
            $classes = 'col-md-10 col-md-offset-1 image image-big ';
        }else if($rozmiar === 'jumbo'){
            $classes = 'col-md-12 image image-jumbo ';
        }

        $tooltipEnabled = false;
        if(get_field('licencja', $obrazek['ID']) && get_field('licencja', $obrazek['ID']) !== 'none'){
            $tooltipEnabled = true;
        }
    ?>

    <div class="<?php echo $classes ?> <?php echo $tooltipEnabled ? 'tooltip-enabled' : '' ?>">
        <img src="<?php echo $obrazek['url'] ?>" alt="<?php echo $obrazek['alt'] ?>">
        <?php cc_tooltip($obrazek) ?>
        <div class="image-description"> <?php the_sub_field('podpis') ?></div>
    </div>

	

</div>