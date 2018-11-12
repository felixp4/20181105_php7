<?php ## Восстановление объекта из строки
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 17:40
 */

require_once("cls.php");

$fd = fopen("text.obj", "r");
if(!$fd) exit("Невозможно открыть файл");

$text = fread($fd, filesize("text.obj"));
fclose($fd);

$obj = unserialize($text);

echo "<pre>";
print_r($obj);
echo "</pre>";