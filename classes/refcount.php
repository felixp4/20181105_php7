<?php ## Проблемы алгоритма со счетчиком ссылок (page 438)
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 05.11.18
 * Time: 20:37
 */

class Father
{
    public $children = [];

    function __destruct() { echo "Father dead. <br />"; }
}

class Child
{
    public $father;

    function __construct(Father $father) { $this->father = $father; }
    function __destruct() { echo "Child dead. <br />"; }
}

$father = new Father;
$child = new Child($father);

// $father->children = $child;

var_dump($father);
var_dump($child);

echo "Пока что все живы ... Убиваем всех <br />";
$father = $child = null;

echo "Все умерли. Конец программы. <br />";