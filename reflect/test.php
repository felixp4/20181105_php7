<?php ## Неявный вызов функции

$funcName = "trim";
echo call_user_func($funcName, "   What? What did I just say?  ");