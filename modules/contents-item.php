<?php
    $section = get_sub_field('nazwa_sekcji');
 
$polish = array('ą', 'ę', 'ć', 'ł', 'ń', 'ś', 'ó', 'ź', 'ż', ' ');
$english  = array('a', 'e', 'c', 'l', 'n', 's', 'o', 'z', 'z','-');

$section_id = str_ireplace($polish, $english, $section);
?>
<span id="<?php echo $section_id ?>" data-section="<?php echo $section ?>" class="contents-item"></span>