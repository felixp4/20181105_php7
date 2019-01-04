<?php ## Ошибка использования оператора []

try {
    $str = "Hello, world!";
    $str[] = 4;
} catch (Error $e) {
// } catch (TypeError $e) {
    echo "Обнаружена ошибка приведения типа";
}