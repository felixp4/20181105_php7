<?php ## Отправка заголовков
include "../lib/nocache.php";

// Максимальный уровень вывода ошибок
error_reporting(E_ALL);

echo "testing!";

// Заголовки уже отправлены ?
if(headers_sent()) {
    echo "Headers sent";
} else {
    echo "No headers sent";
}

// Запрет кэширования
nocache();

// Вывод полученных заголовков
var_dump(headers_list());
var_dump(getallheaders());

// Теперь принудительно завершаем сценарий ввиду того, что после
// перенаправления больше делать нечего
exit();