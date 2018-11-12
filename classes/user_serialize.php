<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 17:55
 */

require_once("user.php");

$obj = new user("nick", "password");

echo "<pre>";
print_r($obj);
echo "</pre>";

$object = serialize($obj);
echo $object;