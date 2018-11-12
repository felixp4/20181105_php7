<?php ## Перехват обращений к членам класса
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 14:29
 */

class Hooker
{
    public $opened = 'opened';

    public function method() {
        echo "Whoa, deja vu. <br />";
    }

    private $vars = array();

    public function __get($name)
    {
        echo "Перехват: получаем значение $name. <br />";

        return isset($this->vars[$name]) ? $this->vars[$name] : null;
    }

    public function __set($name, $value)
    {
        echo "Перехват: устанавливаем значение $name равным '$value'. <br />";

        return $this->vars[$name] = trim($value);
    }

    public function __call($name, $args)
    {
        echo "Вызываем $name с аргументами: ";

        var_dump($args);
        return $args[0];
    }
}

$obj = new Hooker();

echo "<b> Получаем значение обычного свойства. </b><br />";
echo "Значение: {$obj->opened} <br />";

echo "<b> Вызываем обычный метод. </b> <br />";
$obj->method();

echo "<b>Присваивание несуществующему свойству. </b><br />";
$obj->nonExistent = 103;
var_dump($obj);

echo "<b> Получение значения несуществующего свойства. </b> <br />";
echo "Значение: {$obj->nonExistent} <br />";

echo "<b> Обращение к несуществующему методу. </b><br />";
echo "{$obj->nonExistent(6)}";