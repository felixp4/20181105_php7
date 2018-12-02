<?php ## Использование функции spl_autoload_register()
spl_autoload_register();

$page = new Page('О нас', 'Содержимое страницы');
$page->tags();