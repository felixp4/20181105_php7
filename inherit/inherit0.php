<?php ## Проверка класса FileLoggerDebug0

require_once "FileLoggerDebug0.php";

$logger = new FileLoggerDebug0("test", "test.log");
$logger->log("Обычное сообщение");
$logger->debug("Отладочное сообщение");