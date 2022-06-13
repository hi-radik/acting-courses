<?php

$name = $_POST['name'];
$phone = $_POST['tel'];
$token = "5362133761:AAFSuX7npt1fU4QpIYvnfDxvhRvXZ2rvnrs
";
$chat_id = "-1001517175953";
$arr = array(
  'Имя пользователя: ' => $name,
  'Контакт: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thx.html');
} else {
  echo "Error";
}

?>