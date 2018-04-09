<?php
class Number 
{
    public function getCountReplace($arr, $a)
    {
        $count = 0;
        $resArr = [];

        foreach ($arr as $int) {
            if ($int > $a) {
                $resArr[] = $a;
                $count++;
            } else {
                $resArr[] = $int;
            }
        }

        return $count;
    }
}

$arr = [1, 9, 3, 4, 15, 0, 20, 30];
$a = 15;

$obj = new Number;

echo "<pre>";
var_dump($obj->getCountReplace($arr, $a));