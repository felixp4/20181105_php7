<?php ## Использование функции trigger_error()

error_reporting(E_ALL);
ini_set("error_log", "logo.txt");
ini_set("log_errors", true);

function print_age($age)
{
    $age = intval($age);

    if($age < 0)
    {
        trigger_error( "Функция print_age(): ".
                                "возраст не может быть".
                                " отрицательным", E_USER_ERROR);
    }
    echo "Возраст составляет: $age";
}

print_age(-10);
// print_age(10.15);