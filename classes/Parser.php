<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 14.06.19
 * Time: 14:31
 */

require_once ("ParserInterface.php");

class Parser implements  ParserInterface
{

    public function progress($url, $tag)
    {
        // TODO: Implement progress() method.
        return[
            'just',
            'do',
            'it'
        ];
    }

}