<?php
$db_host = "localhost";
$db_user = "hhm";
$db_password = "12345";
$db_name = "hhm";
//переменные для подклчения к БД

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$comment = $_POST['user_comment'];
//переменные из формы 

$dblink = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
mysql_select_db("hhm") or die(mysql_error());
mysql_query("set names utf8"); 
//подключение к БД + выбор БД + кодировка

//if($dblink)
//    echo 'Соединение установлено.</br>';
//else
//    die('Ошибка подключения к серверу баз данных.');
//проверка подключения
?>