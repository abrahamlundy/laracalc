<?php

namespace Abrahamlundy\Laracalc;

class AdvancedCalculator{

    public static function decimaToBinary(int $number){
        return decbin($number);
    }

    public static function binaryToDecimal(string $string){
        return bindec($string);
    }

}

?>