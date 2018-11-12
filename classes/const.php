<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 14:00
 */

class cls
{
    const NAME = "cls";

    public function method()
    {
        // echo $this->NAME;
        echo self::NAME;
        echo "<br />";

        echo cls::NAME;
        echo "<br />";
    }
}

echo cls::NAME . "<br />";

$cls1 = new cls();
$cls1->method();