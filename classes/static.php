<?php ## Использование статических членов класса
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 06.11.18
 * Time: 10:42
 */

class Counter
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }

    public static function getCount()
    {
        return self::$count;
    }
}

for($objs = [], $i=0; $i < 6; $i++)
    $objs[] = new Counter();

var_dump($objs);
echo "Сейчас существует {$objs[0]->getCount()} объектов.";

$objs[5] =  null;

var_dump($objs);
echo "А сейчас - {$objs[0]->getCount()} объектов.";

$objs = [];

var_dump($objs);
echo "Под конец осталось - " . Counter::getCount() . " объектов.";