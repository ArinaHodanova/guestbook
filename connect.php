<?
$db = @mysqli_connect('127.0.0.1', '*', '*', 'guestbook_db') or die('Ошибка соединения с БД');//соединение с БД;
mysqli_set_charset($db, 'utf8') or die('Ошибка кодировки');//задаем кодировку
?>
