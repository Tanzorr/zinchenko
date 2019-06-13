<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 10.06.19
 * Time: 11:50
 */

class Product {
    public  $name;
    public  $price;
    function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;

    }
}

class ProcessSale {
    private $callbacks;

    function  registerCallBack($callback){
        if(!is_callable($callback)){
            throw  new Exception("Call back function can't be call");
        }
        $this->callbacks[] = $callback;
    }

    function  sale($product){
        print  "{$product->name}:in prouses...\n";
        foreach ($this->callbacks as $callback){
            call_user_func($callback ,$product);
        }
    }
}

 class Mailer {
    function  doMail($product){
        print "pacing ({$product->name})\n";
    }
 }

 class Totalizer {
    static  function warnAmount($amt){
        $count =0;
        return function ($product) use ( $amt ,& $count){
            $count +=$product->price;
            print ":sum $count \n";

            if($count . $amt){
                print "{ seling product for summ :{$count}\n";
            }
        };
    }
 }

//$logger = create_function('$product', 'print " Register...({$product->name})\n";');

$processor = new ProcessSale();

$processor->registerCallBack(Totalizer::warnAmount(8));
$processor->sale(new Product("Shose",6));
print "\n";
$processor->sale(new Product("Coffe",6));