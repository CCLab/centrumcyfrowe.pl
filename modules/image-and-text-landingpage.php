<?php
    $obrazek = get_sub_field('obrazek');

    $tooltipEnabled = false;
    if(get_field('licencja', $obrazek['ID']) && get_field('licencja', $obrazek['ID']) !== 'none'){
        $tooltipEnabled = true;
    }

?>
<div class="row">
<div class="col-md-offset-2 col-md-8">
<div class="row image image-side">
    <div class="col-md-5<?php if($tooltipEnabled): ?> tooltip-enabled<?php endif; ?>">
        <a href="<?php echo $obrazek['url'] ?>" data-fancybox="gallery">
            <img src="<?php echo $obrazek['url'] ?>" alt="<?php echo $obrazek['title'] ?>">
        </a>
        <?php cc_tooltip($obrazek); ?>
        <div class="image-description"><?php the_sub_field('podpis') ?></div>
    </div>
    
    <div class="col-md-7">
        <p><?php the_sub_field('tekst_obok_obrazka') ?></p>
    </div>
 </div>
</div>
</div>