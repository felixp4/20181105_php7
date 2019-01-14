<?php ## Отражение класса

$cls = new ReflectionClass('ReflectionException');
echo "<pre>", $cls, "</pre>";

echo $cls->getModifiers()."<br />";
echo Reflection::getModifierNames($cls->getModifiers());