<?
/*Гостеая книга*/
error_reporting(-1);

require_once 'funcs.php';

define("GB", "guestbook.txt");/*название файла для гостевой книги*/


if(!empty($_POST)) {
  save_mess();
  /*делаем редирект на туже страничку*/
  header("Location: {$_SERVER['PHP_SELF']}");
  exit;
}

/*Считываем данные*/
$messages = get_mess();
$messages = arry_mess($messages);

echo '<pre>';
print_r($messages);
echo '</pre>';
?>

<form method="post" action="">
  <p>
    <label for="name_guest">Ваше имя:</label>
    <input type="text" name="name_guest" id="name_guest">
  </p>
  <p>
    <label for="text_guest">Текст: </label>
    <textarea name="text_guest" id="text_guest"></textarea>
  </p>
  <button type="submit">Написать</button>
</form>


<?if(!empty($messages)): ?>
  <?foreach($messages as $value): ?>
      <!--разбиваем наш массив на имя, текст и дату-->
      <?$messages = getFotmatMessages($value)?>
  
      <div class="messages">
          <p>Автор: <?=htmlspecialchars($messages[0])?> | Дата: <?=$messages[2]?></p>
          <p>Сообщение: <?=htmlspecialchars($messages[1])?></p>
      </div>
      
  <?endforeach?>
<?endif?>
