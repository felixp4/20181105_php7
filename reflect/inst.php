<?php ## Создание объекта неизвестного класса

require_once "../lib/Complex2.php";

$classname = "MathComplex3";

$obj =  new $classname(1, 6);
echo "Созданный объект: $obj";