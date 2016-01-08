<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/8/16
 * Time: 2:11 PM
 */

Class Autoloader
{
    public static function myAutoload($pClassName)
    {

        $pathParts = explode('\\', $pClassName);
        $fileName = DIR_TO_CLASSES . $pathParts[sizeof($pathParts) - 1] . ".php";
        if (file_exists($fileName)) {
            require_once $fileName;
            return true;
        };
        echo 'Class: ' . $fileName . ' not found';
        return false;
    }
}