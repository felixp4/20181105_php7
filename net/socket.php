<?php ## "Эмуляция" браузера

// $fp = fsockopen("localhost", 8080);
// $fp = fsockopen("zn.ua", 80);
$fp = fsockopen("php.net", 80);

fputs($fp, "GET / HTTP/1.1\r\n");
// fputs($fp, "Host: localhost\r\n");
// fputs($fp, "Host: zn.ua\r\n");
fputs($fp, "Host: php.net\r\n");

fputs($fp, "Connection: close\r\n");
fputs($fp, "\r\n");
var_dump($fp);

echo "<pre>";
while(!feof($fp))
     echo htmlspecialchars(fgets($fp, 1000));
echo "</pre>";

fclose($fp);