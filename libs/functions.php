<?php
/**
 * Created by PhpStorm.
 * User: alexx
 * Date: 13.06.19
 * Time: 13:51
 */

function classData(ReflectionClass $class){
    $details = "";
    $name = $class->getName();

    if($class->isUserDefined()){
        $details .= "$name --class defines by user<br>";
    }

    if($class->isInternal()){
        $details .= "$name --integration class<br>";
    }

    if($class->isInterface()){
        $details .="$name --it is interface <br>";
    }

    if($class->isAbstract()){
        $details .="$name -- it is adstrract class <br>";
    }

    if($class->isFinal()){
        $details .="$name --it is final class \n";
    }

    if($class->isInstantiable()){
        $details .= "$name -- you can create exemplar of class <br>";
    }else{
        $details ="$name -- you can't create exemplar of class <br>";
    }

    if($class->isCloneable()){
        $details .="$name -- can clone <br>";
    }else{
        $details .="$name -- can't clone <br>";
    }

    return $details;

}


function methodData(ReflectionMethod $method){
    $details ="";

    $name= $method->getName();

    if($method->isUserDefined()){
        $details .= "methode defined by User <br>";
    }

    if($method->isInternal()){
        $details .="$name --inside method <br>";
    }

    if($method->isAbstract()){
        $details .="$name --abstract method<br>";
    }

    if($method->isPublic()){
        $details .="$name --public method <br>";
    }

    if($method->isProtected()){
        $details .="$name --protected methos <br>";
    }

    if($method->isPrivate()){
        $details .="$name --cloused method <br>";
    }
    if($method->isStatic()){
        $details .="$name --static method <br>";
    }

    if($method->isFinal()){
        $details .="$name --finale method <br>";
    }

    if($method->isConstructor()){
        $details .="name --method constructor <br>";
    }

    if($method->returnsReference()){
        $details .="$name --method return reference not value <br>";
    }
    return $details;
}

