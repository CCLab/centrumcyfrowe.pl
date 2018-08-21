<?php
    $section = get_sub_field('nazwa_sekcji');
    $section_id = str_replace(' ', '-', $section);
?>
<span id="<?php echo $section_id ?>" data-section="<?php echo $section ?>" class="contents-item"></span>