<?php
    // кодировка
    header('Content-Type: text/html; charset=utf-8');
 
    $server = "localhost";
    $username = "admin_projectmars";
    $password = "projectmars";
    $database = "admin_projectmars";
     
    // Подключение к базе данный через MySQLi
    $mysqli = new mysqli($server, $username, $password, $database);
 
    // Проверяем, успешность соединения. 
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }
 
    // Устанавливаем кодировку подключения
    $mysqli->set_charset('utf8');
 
    //Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
    $address_site = "http://mars.local";
?>
