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

mysql_query("INSERT INTO hhm2 (name,email,comment) VALUES('$name','$email','$comment')");
// добавить запись в БД
$select = mysql_query("SELECT * FROM hhm2");
                while ($result = mysql_fetch_array($select)) {
                echo "<div class='comments_box  col-3'>
                    <p class='comments_box__name'>$result[name]</p>
                    <p class='comments_box__email'>$result[email]</p>
                    <p class='comments_box__message'>$result[comment]</p></div>";
                }
?>