<?php ## Отражение функции

function throughTheDoor($which) {
    echo "(get throuth the $which door)<br />";
}

throughTheDoor("right");

$func = new ReflectionFunction('throughTheDoor');
$func->invoke("left");