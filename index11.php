<?php
class StringMethod
{
    public function mySubstrCount($str, $needle)
    {
        $pos = 0;
        $counter = 0;

        if ($needle === "") {
            echo "Вы не задали подстроку";
            return $counter;
        }

        if (strpos($str, $needle, $pos) === 0) {
            $counter++;
            $pos = $pos + 1;
        }

        while ($pos = strpos($str, $needle, $pos)) {
            $counter++;
            $pos = $pos + 1;
        }

        return $counter;
    }
}

$str = "lotildho hello world llo, worldllo";
$str1 = "lo";

$obj = new StringMethod;

var_dump($obj->mySubstrCount($str, $str1));  