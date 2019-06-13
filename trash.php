<?php
//// Your code here!
///
///
///
///
///
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//interface IdetifyObject{
//    public  function  generateId();
//}
//
//trait  IdentyTreit{
//    public  function gnerateId(){
//        return uniqid();
//    }
//}
//
//trait PriceUtilites {
//    private  static  $taxerate =17;
//
//    static  function  clculateTax($price){
//        return (self::$taxerate/100)*$price;
//    }
//}
//
//trait  TaxTools {
//    function  clculateTax($price){
//        return 222;
//    }
//}
//
//abstract  class Service {
//
//}
//
//class UtilityService  extends  Service{
//        use PriceUtilites, TaxTools {
//            TaxTools::clculateTax insteadof PriceUtilites;
//            PriceUtilites::clculateTax as basicTax;
//        }
//
//
//}

//$u =  new UtilityService();
//
//print  $u::basicTax();
//print  $u->basicTax(100)."<br>";




class ShopProduct{

//    use PriceUtilites, IdentyTreit;

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

//$product  = new ShopProduct('title',"firstname","mainName", 34);
//
//print $product->getProduser();
//
//
//print  $product->clculateTax(100)."<br>";
//print  $product->gnerateId();



class ShopProductWriter{
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

class CDProduct extends ShopProduct {
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


class BookProduct extends ShopProduct{
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


//abstract class ShopProductWriter{
//    protected $products  = array();
//
//    public  function  addProduct(ShopProduct $shopProduct){
//        $this->products[]=$shopProduct;
//    }
//
//    abstract public function write();
//}


//
//class XmlProductWriter extends ShopProductWriter{
//    public function write(){
//        $writer = new XMLWriter();
//        $writer->openMemory();
//        $writer->startDocument('1.0','UTF-8');
//        $writer->startElement("products");
//        foreach ($this->products as $shopProduct){
//            $writer->startElement("product");
//            $writer->writeAttribute("title", $shopProduct->getTitle());
//            $writer->startElement("summery");
//            $writer->text($shopProduct->getSummeryLine());
//            $writer->endElement();
//            $writer->endElement();
//
//        }
//        $writer->endElement();
//        $writer->endDocument();
//        print $writer->flush();
//
//
//    }
//}
//
//class TextProductWriter extends ShopProductWriter{
//    public  function  write(){
//        $str = "GODS :\n";
//        foreach ($this->products as $shopProduct){
//            $str .=$shopProduct->getSummaryLine()."\n";
//        }
//
//        print $str;
//    }
//}


//
 //$product  = new CDProduct("losted","team","DDT",10.99, null, 60.33);


require "anonim_f.php";










echo  "test";
?>
