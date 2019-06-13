<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 12.06.19
 * Time: 14:15
 */

class ShopProduct
{
    private $title;
    private  $producermainName;
    private  $producerFirstname;
    private  $price;
    private $discont=0;



    function __construct($title,$mainName,$FirstName,$price,
                         $numPages = 0, $playLangth =0){
        $this->title= $title;
        $this->producerFirstNmae = $FirstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducerFirstme(){
        return $this->producerFirstname;
    }

    public function getProducerMainName(){
        $this->getProducerMainName();
    }

    public  function setDiscount($num){
        $this->discont =$num;
    }
    public function getDiscont(){
        return $this->discont;
    }

    public  function  getTitle(){
        return $this->title;
    }

    public  function  getPrice(){
        return ($this->price-$this->discont);
    }

    public function getProduser(){
        return "{$this->producerFirstNmae }"
            ."{$this->producerMainName}";
    }

    public function getSummeryLine(){
        $base = "$this->title ({ $this->producerMainName},";
        $base.="{$this->producerFirstNmae})";
        return $base;
    }
}