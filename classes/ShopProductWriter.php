<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 12.06.19
 * Time: 14:16
 */

class ShopProductWriter
{
    private $products = array();

    public  function  addProduct(ShopProduct $shopProduct){
        $this->products[]=$shopProduct;
    }

    public  function write(){
        $str = "";
        foreach ($this->products as $shopProduct){
            $str .= "{$shopProduct->title}:";
            $str .=$shopProduct->getProducer();
            $str .="({$shopProduct->getPric})\n";
        }
        print $str;
    }
}