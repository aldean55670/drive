<?php
namespace Drive\Drivetest ;
class sayHello{
    private $name ;
    static function hello ($name){
         
        return $name ;
    }
}
$dv = new sayHello;

var_dump($dv :: hello('hoss'));
;