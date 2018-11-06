<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 06.11.18
 * Time: 9:19
 */

class Station {
    public $exit;

    function __destruct()
    {
        echo "Station dead. <br />";
    }
}

$theMobilAve = new Station;
// $theMobilAve->exit = $theMobilAve;

unset($theMobilAve);

echo "Объект уничтожен. <br />";