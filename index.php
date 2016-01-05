<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/5/16
 * Time: 3:58 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

//use A\MyClass1;

function myAutoload($pClassName) {

        $fileName = __DIR__ . DIRECTORY_SEPARATOR ."classes". DIRECTORY_SEPARATOR. $pClassName . ".php";
        if (file_exists($fileName)) {
            require_once $fileName;
            return true;
        };
        echo 'Class: '. $fileName .' not found';
        return false;
};

spl_autoload_extensions(".php");
spl_autoload_register("myAutoload");

echo __NAMESPACE__;

$myClass1 = new MyClass1();
echo $myClass1->field;

?>