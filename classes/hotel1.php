<?php ## page 442
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 06.11.18
 * Time: 9:33
 */

class Hotel
{
    private $exit;

    public function escape()
    {
        $this->findWayOut();
        echo "Let's go through the {$this->exit}!";
    }

    public function lock()
    {
        $this->exit = null;
        $this->prop = 314;
    }

    private function findWayOut()
    {
        $this->exit = "main wet wall";
    }
}

$theLafayette = new Hotel();

// $theLafayette->findWayOut();

$theLafayette->escape();
$theLafayette->lock();

$theLafayette->property = 101;

$key = "test";
$theLafayette->$key = 314;

var_dump($theLafayette);


// $theLafayette->exit = "hotel doors";