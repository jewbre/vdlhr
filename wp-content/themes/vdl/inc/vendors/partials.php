<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubièan
 * Date: 18.8.2015.
 * Time: 9:56
 */

/**
* Return full path to the partial file
*
 * @param $type - folder fo the partial
* @param $partial - partial filename
*
 * @return string
* @throws Exception
*/
function get_partial_path($type, $partial){
    $file_path = TEMPLATEPATH . DIRECTORY_SEPARATOR . "inc" . DIRECTORY_SEPARATOR . "partials" . DIRECTORY_SEPARATOR . $type . DIRECTORY_SEPARATOR . $partial . ".php";
    if(!file_exists($file_path)){
        throw new Exception("Partial file doesn't exist: " . $file_path);
    }
    return $file_path;
}
/**
 * Return rendered template
 *
 * @param      $type - folder fo the partial
 * @param      $partial  - partial filename
 * @param null $data - data to inject to view (partial)
 * @param bool $return - if true return as variable, if false echo out
 *
 * @throws Exception
 */
function get_partial($type, $partial, $data = null, $return = false){
    $file_path = get_partial_path($type, $partial);
    if($return){
        return renderInternal($file_path, $partial, $data, $return);
    }
    renderInternal($file_path, $partial, $data, $return);
}
/**
 * Inject data to view and return view
 *
 * @param      $_viewFile_ - full path to the view
 * @param      $template - name of the template file
 * @param null $_data_ - data for view
 * @param bool $_return_ - if true return as variable, if false echo out
 *
 * @return string
 */
function renderInternal($_viewFile_, $template, $_data_=null,$_return_=false)
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
        require($_viewFile_);
}