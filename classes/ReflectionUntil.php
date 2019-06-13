<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 13.06.19
 * Time: 15:16
 */

class ReflectionUntil
{   static function getClassSource(ReflectionClass $class){
        $patch = $class->getFileName();
        $lines =@file($patch);
        $from = $class->getStartLine();
        $to =$class->getEndLine();
        $len =$to-$from+1;
        return implode(array_slice($lines,$from-1,$len));
    }

    static  function getMethodSource(ReflectionMethod $method){
        $patch = $method->getFileName();
        $lines = @file($patch);
        $from = $method->getStartLine();
        $to =$method->getEndLine();
        $len = $to-$from+1;
        return implode(array_slice($lines,$from-1,$len));
    }

}