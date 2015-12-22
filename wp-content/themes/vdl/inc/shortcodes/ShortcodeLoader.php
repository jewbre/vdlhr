<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 21.6.2015.
 * Time: 12:22
 */

class ShortcodeLoader {

    private $directory = "";

    private $files = array(
        "test-shortcode" => "test-shortcode",

        "description-item" => "description-item",
    );

    public function ShortcodeLoader()
    {
        $this->directory = INCLUDE_PATH . "shortcodes/";
    }

    public function loadFiles()
    {
        foreach($this->files as $fileName => $filePath) {
            if(file_exists($this->directory . $filePath . ".php")) {
                require_once $this->directory . $filePath . ".php";
            }
        }
    }

}

$shortcodeLoader = new ShortcodeLoader();
$shortcodeLoader->loadFiles();