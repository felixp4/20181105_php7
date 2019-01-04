<?php ## Использование иерархии исключений

require_once "exceptions.php";

try {
    printDocument();
} catch (IFileException $e) {
    // Перехватываем только фаловые исключения
    echo "Файловая ошибка: {$e->getMessage()}.<br />";
} catch (Exception $e) {
    // Перехват всех остальных исключений
    echo "<pre>", $e, "</pre>";
}

function printDocument()
{
    $printer = "//./printer";
    if(!file_exists($printer))
        throw new NetPrinterWriteException($printer);
        // throw new SocketException($printer);
}