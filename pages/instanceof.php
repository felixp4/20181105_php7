<?php ## Оператор instanceof

require_once "StaticPage.php";

function echoPage($obj)
{
    $class = "Page";

    if(!($obj instanceof $class))
        die("Argument 1 must be a instance of $class. <br />");

    $obj->render();
}

$page = new StaticPage(3);
echoPage($page);