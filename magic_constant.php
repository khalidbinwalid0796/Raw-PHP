<?php
//namespace MyNamespace;
//class MyClass
//{
//    public function getNamespace(){
//        return __NAMESPACE__;
//    }
//}
//$obj = new MyClass();
//echo $obj->getNamespace(); // Displays: MyNamespace


echo "<br>";
echo "Line number " . __LINE__ . "<br>"; // Displays: Line number
echo "Line number " . __LINE__ . "<br>"; // Displays: Line number


echo __FILE__ . "<br><br>"; //C:\xampp\htdocs\php\Raw_PHP\magic_constant.php \\file path dekhai


echo __DIR__ . "<br><br>"; //C:\xampp\htdocs\php\Raw_PHP \\file ar folder path dekhai


function myFunction(){
    echo  "The function name is - " . __FUNCTION__;
}
myFunction(); // Displays: The function name is - myFunction
echo "<br>";


class MyClass
{
    public function getClassName(){
        return __CLASS__;
    }
}
$obj = new MyClass();
echo $obj->getClassName(); // Displays: MyClass
echo "<br>";


class Sample
{
    public function myMethod(){
        echo __METHOD__;
    }
}
$obj = new Sample();
$obj->myMethod(); // Displays: Sample::myMethod

?>

