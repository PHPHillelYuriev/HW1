<?php 
class Max
{
    public $arr;

    function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function getSecondMax()
    {
        $max = $this->arr[0];
        $secondMax = $this->arr[0]; 

        foreach ($this->arr as $int) {
            if ($int > $max) {
                $secondMax = $max;
                $max = $int;
            }
        }

        return $secondMax;
    }
}

$arr = [4, 3, 2, 10, 111, 555, 777];

$obj = new Max($arr);

var_dump($obj->getSecondMax());