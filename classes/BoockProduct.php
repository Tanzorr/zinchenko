<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 12.06.19
 * Time: 15:52
 */

class BoockProduct extends ShopProduct
{
    private $numbPages =0;

    public function __construct($title, $mainName, $FirstName, $price, $numPages)
    {
        parent::__construct($title, $mainName, $FirstName, $price);

        $this->numbPages  = $numPages;
    }

    public function getNumberOfPages(){
        return $this->numPages;
    }


    function getSummeryLine(){
        $base = parent::getSummeryLine();
        $base.="{$this->numPages}";
        return $base;
    }

    public  function getPrice()
    {
        parent::getPrice();
    }
}