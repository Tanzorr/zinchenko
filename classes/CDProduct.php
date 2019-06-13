<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 12.06.19
 * Time: 15:51
 */

class CDProduct extends ShopProduct
{
    private $playLength =0 ;

    public function  __construct($title, $mainName, $FirstName, $price, $playLangth)
    {
        parent::__construct($title, $mainName, $FirstName, $price);

        $this->playLength = $playLangth;
    }

    public  function getPlayLength(){
        return $this->playLength;
    }

    public  function getSummeryLine(){
        $base = parent::getSummeryLine();
        $base.="time of saun - {$this->playLength}";
        return $base;
    }

}