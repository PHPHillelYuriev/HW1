<?php
class ArrayMethod 
{
    public function mySortArray($arr)
    { 
        $arrCount = count($arr);

        if ($arrCount <= 1 ) {
            echo "Введите массив минимум с 2 числами";
            return false;
        }

        $resCount = ($arrCount - 1);

        foreach ($arr as $int) {      
            for ($i = 0; $i < $resCount; $i++) {
                if ($arr[$i] > $arr[$i + 1]) {       
                    $buf = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $buf;        
                }
            }      
        }

        return $arr;
    }
} 


$arr = [77, 4, 10, 777, 1, 3, 2, -1, 0, 333, -500, 600, 600];

$obj = new ArrayMethod;

echo "<pre>";
var_dump($obj->mySortArray($arr));