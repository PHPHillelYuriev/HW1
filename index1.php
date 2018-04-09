<?php
class Number 
{
    public function getPositiveEvenNumbers($int)
    { 
        $result = [];

        for ($i = 0; $i < $int; $i += 2) { 
            $result[] = $i;
        }

        return $result;
    }
} 

$int = 29;

$obj = new Number;

echo "<pre>";
var_dump($obj->getPositiveEvenNumbers($int));