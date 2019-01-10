<?php ## Пример неявного использования итератора в foreach

require_once "../lib/FS.php";

// Для примера открываем каталог, в котором много картинок
$d = new FSDirectory("..");
var_dump($d);

foreach($d as $path => $entry) {
    if($entry instanceof FSFile) {
        // если это файл, а не подкаталог
        echo "<tt>$path</tt>: ".$entry->getSize()."<br />";
    }
}

$it = $d->getIterator();
var_dump($it);

for($it->rewind(); $it->valid(); $it->next()) {
    $path = $it->key();
    $entry = $it->current();

    if($entry instanceof FSFile) {
        echo $path . " -> " . $entry->getSize() . "<br />";
    }
    var_dump($entry);
    var_dump($it);
}

unset($it);