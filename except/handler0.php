<?php ## Перехват ошибок и предупреждений

// Определяем новую функцию-обработчик
function MyErrorHandler ($errno, $msg, $file, $line)
{
    echo '<div style="border-style:inset; border-width:2">';
    echo "Произошла ошибка с кодом <b>$errno</b><br />";
    echo "Файл <tt>$file</tt>, строка $line.<br />";
    echo "Текст ошибки: <i>$msg</i>";
    echo "</div>";
}

// Регистрируем ее для всех типов ошибок
set_error_handler("MyErrorHandler", E_ALL);

@filemtime("spoon");