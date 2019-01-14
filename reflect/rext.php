<?php ## Использование отражения библиотеки

var_dump(get_loaded_extensions());

$consts = [];
foreach(get_loaded_extensions() as $name) {
    $ext = new ReflectionExtension($name);
    $consts = array_merge($consts, $ext->getConstants());

    var_dump($ext->getConstants());
}

echo count($consts) . "<br />";
echo "<pre>" . var_export($consts, true) . "</pre>";