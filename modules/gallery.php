<div class="row image image-gallery">
<?php // check if the repeater field has rows of data
    if (have_rows('galeria_obrazow')) :
        $licznik = 0;

            // loop through the rows of data
        while (have_rows('galeria_obrazow')) : the_row();
            ?>
    <?php
        $obrazek = get_sub_field('obrazek');
        if (get_post_type() === 'projekty') {
            $rozmiar_kolumny = 'col-md-6';
            $odstep = 'col-md-offset-0 col-sm-offset-0 col-xs-offset-0';
        } else {
            $rozmiar_kolumny = 'col-md-4';
            $odstep = ' col-md-offset-2 col-sm-offset-0 col-xs-offset-0';
        }


        $tooltipEnabled = false;
        if(get_field('licencja', $obrazek['ID']) && get_field('licencja', $obrazek['ID']) !== 'none'){
            $tooltipEnabled = true;
        }
    ?>

            <div class="<?php echo $rozmiar_kolumny; ?> <?php echo $licznik++%2 === 0 ? $odstep : ''; ?> image-gallery-item <?php echo $tooltipEnabled ? 'tooltip-enabled' : '' ?>">
            <div class="height-controller">
                <a data-fancybox="gallery" href="<?php echo $obrazek['url']?>"><img src="<?php echo $obrazek['sizes']['gallery-thumbnail'] ?>" alt="<?php echo $obrazek['sizes']['title'] ?>"></a>
            </div>
            <?php cc_tooltip($obrazek) ?>
            <div class="image-description">
                <?php the_sub_field('podpis') ?>
            </div>
        </div>

        <?php endwhile;

    else :

        // no rows found

    endif; 
?>        
    </div>