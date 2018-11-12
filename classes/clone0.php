<?php ## Встроенное клонирование объектов
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 16:33
 */

class MathComplex2
{
    private $re;
    private $im;

    public function __construct($re, $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    public function __toString()
    {
        return "{re = {$this->re}, im = {$this->im}} <br />";
    }

    public function add(MathComplex2 $obj)
    {
        $this->re += $obj->re;
        $this->im += $obj->im;
    }
}

$a = new MathComplex2(101, 314);
$x = new MathComplex2(0, 0);

$y = clone $x;

// $y = $x;
$y->add($a);

echo "x = ", $x, " y = ", $y;