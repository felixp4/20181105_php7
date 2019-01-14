<?php ## Класс комплексных чисел

class MathComplex3
{
    private $re;
    private $im;

    public function __construct($re, $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    public function add(MathComplex3 $obj)
    {
        $this->re += $obj->re;
        $this->im += $obj->im;
    }

    public function __toString()
    {
        return "Re: {$this->re}, im: {$this->im}.<br />";
    }
}