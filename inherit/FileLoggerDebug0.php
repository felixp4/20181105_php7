<?php ## "Ручная" реализация наследования

require_once "FileLogger.php";

class FileLoggerDebug0
{
    private $logger;

    public function __construct($name, $fname)
    {
        $this->logger = new FileLogger($name, $fname);
    }

    public function debug($s, $level = 0)
    {
        $stack = debug_backtrace();
        // var_dump($stack);
        $file = $stack[$level]['file'];
        $line = $stack[$level]['line'];
        $this->logger->log("[at $file line $line] $s");
    }

    public function log($s)
    {
        return $this->logger->log($s);
    }
}
