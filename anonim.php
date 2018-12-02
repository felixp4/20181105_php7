<?php ## Использование анонимной функции
spl_autoload_register(
    function ($classname) {
        $classname = str_replace("\\", "/", $classname);
        require_once (__DIR__ . "/$classname.php");
    }
);

$page = new PHP7\Page('О нас', 'Содержимое страницы');
$page->tags();