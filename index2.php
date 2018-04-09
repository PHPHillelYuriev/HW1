<?php
class Fibonachi
{
    public function fibo($int)
    {    
        $result = [0, 1];

        for ($i = 1; $i < ($int - 1); $i++) { 
            $result[] = $result[$i] + $result[$i - 1];
        }

        return $result;
    }
}

$int = 10;

$obj = new Fibonachi;

echo "<pre>";
var_dump($obj->fibo($int));
