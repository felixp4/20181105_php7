<?php ## Использование вирутальных массивов

/*
 * Класс представляет собой массив, ключи которого нечувствительны
 * к регистру символов. Например, ключи "key", "kEy" и "KEY" с точки
 * зрения данного класса выглядят идентичными (в отличие от стандартных
 * массивов PHP, в которых они различаются).
 */

class InsensitiveArray implements ArrayAccess
{
    // Здесь будем хранить массив элементов в нижнем регистре
    private $a = [];

    public function offsetExists($offset)
    {
        $offset = strtolower($offset);
        $this->log("offsetExists('$offset')");
        return isset($this->a[$offset]);
    }

    public function offsetGet($offset)
    {
       $offset = strtolower($offset);
       $this->log("offsetGet('$offset')");
       return $this->a[$offset];
    }

    public function offsetSet($offset, $data)
    {
        $offset = strtolower($offset);
        $this->log("offsetSet('$offset', '$data')");
        $this->a[$offset] = $data;
    }

    public function offsetUnset($offset)
    {
        $offset = strtolower($offset);
        $this->log("offsetUnset('$offset')");
        unset($this->a[$offset]);
    }

    public function log($str)
    {
        echo "$str<br />";
    }
}

$a = new InsensitiveArray();

$a->log("## Устанавливаем значения (оператор =).");
$a['php'] = 'There is more than one way to do it.';
$a['php'] = 'Это значение должно переписаться поверх предыдущего.';

$a->log("## Получаем значение элемента (оператор []).");
$a->log("<b>значение:</b> '{$a['php']}'.");

$a->log("## Проверяем существование элемента (оператор isset()).");
$a->log("<b>exists:</b> " . (isset($a['php']) ? "true" : "false"));
var_dump($a);

$a->log("## Уничтожаем элемент (оператор unset()).");
unset($a['php']);

var_dump($a);