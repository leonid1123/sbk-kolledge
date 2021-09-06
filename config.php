<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'onyegov4_sbk1204');
define('DB_PASSWORD', 'Qweasdzxc@123');
define('DB_NAME', 'onyegov4_sbk1204');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
            
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
?>