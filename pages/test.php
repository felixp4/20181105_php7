<?php ## Тестирование классов

require_once "Page.php";
require_once "StaticPage.php";

$obj  = new Page("START", "Testing start page");
$obj->render();

$id = 3;
$page = new StaticPage($id);
$page->render();
echo $page->id($id);