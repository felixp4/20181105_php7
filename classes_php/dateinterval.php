<?php ## Создание DateInterval при помощи конструктора

$nowdate = new DateTime();
$date = $nowdate->sub(new DateInterval("P3Y1M14DT12H19M2S"));

echo $date->format("d-m-Y H:i:s");