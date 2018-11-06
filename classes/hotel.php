<?php ## page 441
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 06.11.18
 * Time: 9:25
 */

class Hotel
{
    public $exit;
    public function escape()
    {
        echo "Let's go through the {$this->exit}!";
    }
}

$theLafayette = new Hotel();

$theLafayette->exit = "main wet wall";
$theLafayette->escape();