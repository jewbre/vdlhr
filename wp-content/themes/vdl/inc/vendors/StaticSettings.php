<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 17.7.2015.
 * Time: 13:19
 */

class StaticSettings {

    private static $_show_full_main_block_page = false;

    public static function show_full_main_block_page($value = true)
    {
        self::$_show_full_main_block_page = $value;
    }

    public static function is_full_main_block_page()
    {
        return self::$_show_full_main_block_page;
    }

    public static function display_full_main_block_page_code()
    {
        Partial::getPartial("", "full-height-main-page");
    }
}
