<?php ## Документирование

/**
 * Документация для следующей
 * функции (после "/**" не должно быть пробелов!)
 */
function func() {}

$obj = new ReflectionFunction('func');
echo "<pre>" . $obj->getDocComment() . "</pre>";