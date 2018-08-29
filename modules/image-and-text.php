<?php
    $obrazek = get_sub_field('obrazek');

    $tooltipEnabled = false;
    if(get_field('licencja', $obrazek['ID']) && get_field('licencja', $obrazek['ID']) !== 'none'){
        $tooltipEnabled = true;
    }

?>
<div class="row image image-side">
    <div class="col-md-4 col-sm-4 col-xs-12<?php if($tooltipEnabled): ?> tooltip-enabled<?php endif; ?>">
        <a href="<?php echo $obrazek['url'] ?>" data-fancybox="gallery">
            <img src="<?php echo $obrazek['url'] ?>" alt="<?php echo $obrazek['title'] ?>">
        </a>
        <?php cc_tooltip($obrazek); ?>
        <div class="image-description"><?php the_sub_field('podpis') ?></div>
    </div>
    
    <div class="col-md-6 col-sm-6 col-xs-12">
        <p><?php the_sub_field('tekst_obok_obrazka') ?></p>
    </div>

</div>