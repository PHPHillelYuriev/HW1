<?php
class StringMethod
{
    public function MySbstr($str, $start, $length)
    {
        $resPos = ($start + $length);
        $result = "";

        for ($i = $start; $i < $resPos; $i++) { 
            $result .= $str{$i};
        }

        return $result;
    }
}

$str = "hello world again";
$start = 9;
$len = 5;

$obj = new StringMethod;

echo "<pre>";
var_dump($obj->MySbstr($str, $start, $len));