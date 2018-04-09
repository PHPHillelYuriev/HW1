<?php 
class Max
{
    public function getSecondMax($arr)
    {
        $max = $arr[0];
        $secondMax = $arr[0]; 

        foreach ($arr as $int) {
            if ($int > $max) {
                $secondMax = $max;
                $max = $int;
            }
        }

        return $secondMax;
    }
}

$arr = [4, 3, 2, 10, 111, 555];

$obj = new Max;

var_dump($obj->getSecondMax($arr));