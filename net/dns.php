<?php
$host = "zn.ua";
$ip = gethostbyname($host);
var_dump($ip);

echo gethostbyaddr($ip);

$host = gethostbyaddr("91.218.213.174");
var_dump($host);

echo gethostbyname($host);