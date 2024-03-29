<?php
    $obrazek = get_sub_field('obrazek');

    $tooltipEnabled = false;
    if(get_field('licencja', $obrazek['ID']) && get_field('licencja', $obrazek['ID']) !== 'none'){
        $tooltipEnabled = true;
    }

?>
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">
<div class="row image image-side">
    <div class="col-md-4 col-sm-4 col-xs-12<?php if($tooltipEnabled): ?> tooltip-enabled<?php endif; ?>">
        <a href="<?php echo $obrazek['url'] ?>" data-fancybox="gallery">
            <img class="img-responsive" src="<?php echo $obrazek['url'] ?>" alt="<?php echo $obrazek['title'] ?>">
        </a>
        <?php cc_tooltip($obrazek); ?>
        <div class="image-description"><?php the_sub_field('podpis') ?></div>
    </div>
    
    <div class="col-md-8 col-sm-8 col-xs-12">
        <p><?php the_sub_field('tekst_obok_obrazka') ?></p>
    </div>

</div>
</div>
</div>