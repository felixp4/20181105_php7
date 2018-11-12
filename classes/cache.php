<?php ## Локальное кеширование ресурса по идентификатору
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 12.11.18
 * Time: 13:25
 */

class FileLogger
{
    static public $loggers = [];
    private $time;

    private function __construct($fname)
    {
        $this->time = microtime(true);
    }

    public static function create($fname)
    {
        if(isset(self::$loggers[$fname]))
            return self::$loggers[$fname];

        return self::$loggers[$fname] = new self($fname);
    }

    public function getTime()
    {
        return $this->time;
    }
}

// $logger = new FileLogger("a");
$logger1 = FileLogger::create("file.log");
// var_dump($logger1);
sleep(1);

$logger2 = FileLogger::create("file.log");
// var_dump($logger2);

$logger3 = FileLogger::create("file1.log");
// var_dump(FileLogger::$loggers);

echo "{$logger1->getTime()}, {$logger2->getTime()}, {$logger3->getTime()} <br />";
var_dump(FileLogger::$loggers);