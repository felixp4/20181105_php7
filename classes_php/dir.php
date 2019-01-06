<?php ## Чтение содержимого каталога

$cat = dir("..");

// Читаем содержимое каталога
while(($file = $cat->read()) !== false) {
    echo $file."<br />";
}

$cat->close();