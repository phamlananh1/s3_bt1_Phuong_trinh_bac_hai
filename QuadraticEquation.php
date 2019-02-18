<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-24
 * Time: 11:22
 */

class QuadraticEquation
{
public $a;
public $b;
public $c;
public function __construct($a,$b,$c)
{
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
}

    /**
     * @param mixed $a
     */
    public function getA($a)
    {
        $this->a = $a;
    }

    /**
     * @param mixed $b
     */
    public function getB($b)
    {
        $this->b = $b;
    }

    /**
     * @param mixed $c
     */
    public function getC($c)
    {
        $this->c = $c;
    }
    public function delta(){
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }
}
