<?php ## Пример разбора URL
include "../lib/http_build_url.php";

$url = "http://username:password@host.com:80/path?arg=value#anchor";
echo "<pre>"; print_r(parse_url($url)); echo "</pre>";

$parsed = parse_url($url);
echo http_build_url($parsed) . "</br>";