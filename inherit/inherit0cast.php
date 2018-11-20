<?php ## Несовместимость типов при "ручном" наследовании

require_once "FileLoggerDebug0.php";

$logger = new FileLoggerDebug0("test", "test.log");

croak($logger, "Hasta la vista.");

function croak(FileLogger $l, $msg)
{
    $l->log($msg);
    exit();
}