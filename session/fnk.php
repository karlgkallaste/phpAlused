<?php
/**
 * Created by PhpStorm.
 * User: karl-gustav.kallaste
 * Date: 24.01.2019
 * Time: 14:17
 */
function htmlFromFile($fileName){
    $fileName = 'html/'.$fileName.'.html';
    $fp = fopen($fileName,'r');
    $content = fread($fp,filesize($fileName));
    fclose($fp);
    return $content;

}