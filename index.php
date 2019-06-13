<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 12.06.19
 * Time: 13:25
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('APP', './classes');

echo "Index";

function startingincludeWithCase($classname){
    $file = APP."/{$classname}.php";
    if(file_exists($file)){
        require_once ($file);
    }
}

require_once ('libs/functions.php');



spl_autoload_register('startingincludeWithCase');
    $writer = new ShopProductWriter();

 $product  =  new ShopProduct("Balck gade", "Harry","hanter",12.99);



 print  $product->getProduser();

 $product1 = new CDProduct("losted","team","DDT",10.99, 60.33);

 if(get_class($product1)=='CDProduct'){
     print "CDProducts object";
 }

 //var_dump(get_class_methods('CDProduct'));
 //var_dump(get_class_vars('CDProduct'));
 //var_dump(get_parent_class('CDProduct'));
//
$prod_class = new ReflectionClass('CDProduct');
// Reflection::export($prod_class);

//print ReflectionUntil::getClassSource(new ReflectionClass('CDProduct'));

$methods = $prod_class->getMethods();

foreach ($methods as $method){
    print methodData($method);

    print "<br>";
}

print  ReflectionUntil::getMethodSource($method);




