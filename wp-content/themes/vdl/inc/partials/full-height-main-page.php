<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 27.9.2015.
 * Time: 18:31
 */

?>

<script>
    var css = '.container-block-1 { height: '+window.innerHeight+'px; }',
        head = document.head || document.getElementsByTagName('head')[0],
        style = document.createElement('style');

    style.type = 'text/css';
    if (style.styleSheet){
        style.styleSheet.cssText = css;
    } else {
        style.appendChild(document.createTextNode(css));
    }

    head.appendChild(style);
</script>

