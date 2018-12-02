<?php ## Использование функции __autoload()

function __autoload($classname)
{
    $classname = str_replace("\\", "/", $classname);
    require_once (__DIR__ . "/$classname.php");
}

$page = new PHP7\Page('О нас', 'Содержимое страницы');
$page->tags();