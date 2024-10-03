<?php

namespace Abrahamlundy\Laracalc;

class BasicCalculator{

    public static function tambah(array $data){
        return array_sum($data);
    }

    public static function kali(array $data){
        return array_product($data);
    }

}

?>