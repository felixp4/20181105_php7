<?php ## Неявный вызов метода

require_once ("../lib/Complex2.php");

$addMethod = "add";
$a = new MathComplex3(101, 303);
$b = new MathComplex3(0, 6);

// Вызываем метод add() неявным способом
call_user_func([$a, $addMethod], $b);
// $a->add($b);

echo $a;