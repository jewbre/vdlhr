<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 12.10.2015.
 * Time: 19:20
 */

$logos = array(
    "angular", "css3", "html5", "javascript", "jquery", "php", "wordpress", "yii"
);

?>

<div class="square-logo-holder">
    <?php
        foreach($logos as $logo) {
    ?>
    <img class="logo-<?=$logo?> knowledge-logo" src="<?=bu("static/images/small-logos/".$logo.".png")?>" />
    <?php
        }
    ?>
</div>
