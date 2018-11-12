<?php ## Проверка существования констант класса
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 14:09
 */

require_once("const.php");

if(defined("cls::NAME"))
    echo "Константа определена. <br />";
else
    echo "Константа не определена. <br />";

if(defined("cls::POSITION"))
    echo "Константа определена. <br />";
else
    echo "Константа не определена. <br />";