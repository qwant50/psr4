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

        //$pathParts = explode('\\', $class);
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

<!--$letters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890';
$word_lenght = 5;
$size_letters = strlen($letters)-1;
for($i=0;$i<5;$i++){
while($word_lenght--){
$pass.=$letters[rand(0,$size_letters)];
}
$word_lenght = 5;
$password.=$pass.'-';
$pass = '';
}
$password = substr($password,0,strlen($password)-1);
pre($password);  -->
