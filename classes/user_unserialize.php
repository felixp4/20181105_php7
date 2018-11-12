<?php ## Восстановление объекта
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 18:03
 */

require_once("user.php");

$object = 'O:4:"user":3:{s:4:"name";s:4:"nick";'.
    's:8:"referrer";s:27:"/classes/user_serialize.php";'.
    's:4:"time";i:1448125787;}';

$obj = unserialize($object);

echo "<pre>";
print_r($obj);
echo "</pre>";