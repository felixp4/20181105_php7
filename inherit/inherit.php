<?php ## Проверка класса FileLoggerDebug

require_once "FileLoggerDebug.php";

$logger = new FileLoggerDebug("file_test");
$logger->log("Обычное сообщение");
$logger->debug("Отладочное сообщение");
