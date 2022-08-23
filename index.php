<?
/*Гостеая книга*/
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);
require_once 'funcs.php';
require_once 'connect.php';

define("GB", "guestbook.txt");/*название файла для гостевой книги*/

if(!empty($_POST)) {
  save_mess();
  /*делаем редирект на туже страничку*/
  header("Location: {$_SERVER['PHP_SELF']}");
  exit;
}

/*Считываем данные*/
$messages = get_mess();

//printArr($messages);
?>

<html lang="ru">
<head>
<meta charset="utf-8"/> 
  <title>Гостевая книга</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<form method="post" class="gb_form">
  <p class="gb_form-block text">
    <label for="name_guest">Ваше имя:</label>
    <input type="text" name="name_guest" id="name_guest">
  </p>
  <p class="gb_form-block">
    <label for="text_guest">Текст: </label>
    <textarea name="text_guest" id="text_guest"></textarea>
  </p>
  <button type="submit" class="btn">Написать</button>
</form>

<div class="messages__block">
<?if(!empty($messages)): ?>
  <?foreach($messages as $value): ?>
      <!--разбиваем наш массив на имя, текст и дату-->
      <div class="messages__inner">
          <p><span class="messages__inner-title">Автор:</span> <?=$value['name']?></p>
          <p><span class="messages__inner-title">Сообщение:</span> <?=htmlspecialchars($value['text'])?></p>
          <p><?=$value['date']?></p>
      </div>
      
  <?endforeach?>
<?endif?>
</body>
