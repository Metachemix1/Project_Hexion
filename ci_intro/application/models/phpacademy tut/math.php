<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 21/01/14
 * Time: 22:17
 */

class Math extends CI_Model
{
    public function  add($val1, $val2)
    {
        return $val1 + $val2;
    }

    public function sub($val1, $val2)
    {
        return $val1 - $val2;
    }
}