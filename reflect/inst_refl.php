<?php ## Создание объекта неизвестного класса (reflection API)

require_once "../lib/Complex2.php";

$classname = "MathComplex3";
$args = [1, 2];

$class = new ReflectionClass($classname);
$obj = $class->newInstance(101, 303);
echo "Первый объект: $obj<br />";

$obj = call_user_func_array([$class, "newInstance"], $args);
echo "Второй объект: $obj<br />";