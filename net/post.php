<?php ## Отправка POST-данных напрямую
// ini_set("allow_url_fopen", true);

// Содержимое POST-запроса
$body = "first_name=Игорь&last_name=Симдянов";

// Параметры контекста
$opts = [
    'http' => [
        'method' => 'POST',
        'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:42.0)',
        'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                    "Content-Length: " . mb_strlen($body),
        'content' => $body
    ]
];

// echo "<pre>";
// print_r($opts);
// echo "</pre>";

// Формируем контекст
$context = stream_context_create($opts);
// var_dump($context);

// Отправляем запрос
echo file_get_contents(
    'http://localhost:8080/net/handler.php',
    false,
    $context
);

/* echo fopen(
    'http://localhost:8080/net/form.html',
    'r',
    false
); */

var_dump($http_response_header);