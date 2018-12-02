<?php ## Доступ к глобальному пространству имен
namespace PHP7;

function strlen($str)
{
    var_dump(str_split($str));
    return count(str_split($str));
    // return \strlen($str);
}

// Это PHP7\strlen
echo strlen("Hello world!")."<br />";

echo namespace\strlen("Hello world!")."<br />";

// Это стандартная функция strlen()
echo \strlen("Hello world!")."<br />";