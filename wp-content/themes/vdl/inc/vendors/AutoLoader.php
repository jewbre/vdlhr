<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 21.6.2015.
 * Time: 11:28
 */

class AutoLoader {

    private $files = array(
        "global" => "global",
        "ShortcodeLoader" => "shortcodes/ShortcodeLoader",
        "StaticSettings" => "vendors/StaticSettings",
        "Partial" => "vendors/Partial",
        "ExceptionLoader" => "exceptions/ExceptionLoader",
        "query-loop" => "vendors/query-loop",
        "custom-post-types" => "custom-post-types",
     );


    public function loadFiles()
    {
        foreach($this->files as $fileName => $filePath) {
            if(file_exists(INCLUDE_PATH . $filePath . ".php")) {
                require_once INCLUDE_PATH . $filePath . ".php";
            }
        }
    }

}

$autoLoader = new AutoLoader();
$autoLoader->loadFiles();