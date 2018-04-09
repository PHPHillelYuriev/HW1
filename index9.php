<?php
class StringMethod
{
    public function myStrpos($str, $needle)
    {
        $strLength = strlen($str);
        $needleLength = strlen($needle);
        $pos = 0;

        for ($i= 0; $i < $strLength; $i++) {
            if ($needle{0} == $str{$i}) {
                $pos = $i;
                $resStr = substr($str, $i, $needleLength);

                if ($resStr == $needle) {
                    return $pos;
                }
            }
        } 

        return false;
    }
}

$str = "tilho hello weldg hille hatlo hallo";
$str1 = "hi";

$obj = new StringMethod;

var_dump($obj->myStrpos($str, $str1));

