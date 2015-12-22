<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 17.7.2015.
 * Time: 13:20
 */

class Partial {


    private static function get_partial_path($type, $partial)
    {
        $file_path = TEMPLATEPATH . DIRECTORY_SEPARATOR . "inc" . DIRECTORY_SEPARATOR . "partials" . DIRECTORY_SEPARATOR . $type . DIRECTORY_SEPARATOR . $partial . ".php";
        if (!file_exists($file_path)) {
            throw new Exception("Partial file doesn't exist: " . $file_path);
        }
        return $file_path;
    }

    public static function getPartial($type, $partial, $data = null, $return = false)
    {
        $file_path = self::get_partial_path($type, $partial);
        if($return){
            return self::renderInternal($file_path, $partial, $data, $return);
        }
        self::renderInternal($file_path, $partial, $data, $return);
        return true;
    }

    private static function renderInternal($_viewFile_, $template, $_data_=null,$_return_=false)
    {
        // we use special variable names here to avoid conflict when extracting data
        if(is_array($_data_))
            extract($_data_,EXTR_OVERWRITE);
        else
            $data=$_data_;
        if($_return_)
        {
            ob_start();
            ob_implicit_flush(false);
            require($_viewFile_);
            return ob_get_clean();
        }
        else
        {
            require($_viewFile_);
            return true;
        }
    }


    private static function get_partial($partialName, $args = array(), $return_value = false)
    {
        extract($args);

        if($return_value) {
            ob_start();
        }

        $path = bu("partials") . "/" . $partialName . ".php";

        include_once $path;

        if($return_value) {
            return ob_get_clean();
        }

        return true;
    }
}