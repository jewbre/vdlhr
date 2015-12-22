<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 17.7.2015.
 * Time: 13:45
 */

StaticSettings::show_full_main_block_page();

get_header();

?>

<div class="container-block-1 container">
    <div id="particlesBackground"></div>

    <div class="scroll-down-alert">
        <p>
            <?php _e( 'Scroll down', 'vdl' ); ?>
        </p>
        <i class="fa fa-chevron-down fa-3x"></i>
    </div>
</div>

<?php
    Partial::getPartial("", "knowledge-base");
?>
<?php
get_footer();
