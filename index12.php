<?php
class StringMethod
{
    public function myExplode($del, $str)
    {
        $length = strlen($str);
        $pos = 0;
        $arr = [];

        for ($i = 0; $i < $length; $i++) {     
            if ($str{$i} == $del) {
                $lengthElement = ($i - $pos);
                $resStr = substr($str, $pos, $lengthElement);
                $pos = ($i + 1);
                $arr[] = $resStr;         
            }
        }

        $resStr = substr($str, $pos);
        $arr[] = $resStr;    

        return $arr;
    }
}

$str = "tildho!hello!world!lo, world!qwe!fghfg! ret";
$del = "!";

$obj = new StringMethod;

echo "<pre>";
var_dump($obj->myExplode($del, $str));  