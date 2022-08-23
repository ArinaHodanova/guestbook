<?
//автоматизируем экранирование данных
function clear() {
  global $db;
    foreach ($_POST as $key => $value) {
      $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
}

/*Получаем данные и передаем в БД*/
function save_mess() {
  global $db;
  clear();
  extract($_POST); 
  $insert_query = "INSERT INTO `guestbook_table` (`id`, `name`, `text`, `date`) VALUES (NULL, '$name_guest', '$text_guest', CURRENT_DATE())";
  mysqli_query($db, $insert_query);
}

/*Получаем из БД массив*/
function get_mess() {
  global $db;
  $insert_select = "SELECT * FROM `guestbook_table` ORDER BY id DESC";
  $rez = mysqli_query($db, $insert_select);
  return mysqli_fetch_all($rez, MYSQLI_ASSOC);
}

//Функция для удобного просмотра массивов 
function printArr($arr) {
  echo '<pre>' . print_r($arr, true) . '</pre>';
}
?>
