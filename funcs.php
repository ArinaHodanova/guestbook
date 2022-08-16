<?
/*Получаем необходимые данные и передаем в файл*/
function save_mess() {
  $str = $_POST['name_guest'] . " | " . $_POST['text_guest'] . " | " . date('Y-m-d H:i:s') . "\n***\n";
  file_put_contents(GB,  $str, FILE_APPEND);
}

/*Вызывем полученный результат*/
function get_mess() {
  return file_get_contents(GB);
}

/*Разбиваем строку в массив*/
function arry_mess($str_mess) {
  $str_mess = explode("\n***\n", $str_mess);
  array_pop($str_mess);//убираем последний элемент 
  return array_reverse($str_mess);//сотрируем массив по убыванию
}

function getFotmatMessages($str) {
  return explode(" | " , $str);
}

?>