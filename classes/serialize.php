<?php ## Сериализация объекта $obj класса cls
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 17:22
 */

require_once("cls.php");

$obj = new cls(100);
$text = serialize($obj);

var_dump($text);

$fd = fopen("text.obj", "w");
if(!$fd) exit("Невозможно открыть файл");

fwrite($fd, $text);
fclose($fd);