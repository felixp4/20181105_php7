<?php ## Класс user
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 17:49
 */

class User
{
    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
        $this->referrer = $_SERVER['PHP_SELF'];
        $this->time = time();
    }

    public function __sleep()
    {
        return ['name', 'referrer', 'time'];
    }

    public function __wakeup()
    {
        $this->time = time();
    }

    public $name;
    public $password;
    public $referrer;
    public $time;
}