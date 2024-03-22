<?php

$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'crud';

$connect = mysqli_connect($host, $user_name, $password, $db_name);
if (!$connect) {
    die("Ошибка подключения к БД");
} else {
    echo "Соединение с БД успешно установлено";
}
