<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 17.7.2015.
 * Time: 13:28
 */

class ExceptionLoader {
    private $directory = "";

    private $files = array(
        "PartialException" => "PartialException",
    );

    public function ExceptionLoader()
    {
        $this->directory = INCLUDE_PATH . "exceptions/";
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

$shortcodeLoader = new ExceptionLoader();
$shortcodeLoader->loadFiles();