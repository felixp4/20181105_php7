<?php ## Переопределение функции клонирования
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 16:57
 */

class Human
{
    private static $i = 25550690;

    public $dna;
    public $text;

    public function __construct()
    {
        $this->dna = self::$i++;
        $this->text = "There is no spoon?";
    }

    public function __clone()
    {
        $this->dna = $this->dna."(cloned)";
    }
}

$neo = new Human;
$virtual = clone $neo;

var_dump($neo);
var_dump($virtual);
// var_dump(Human::$i);

echo "Neo DNA id: {$neo->dna}, text: {$neo->text} <br />";
echo "Virtual twin id: {$virtual->dna}, text: {$virtual->text} <br />";