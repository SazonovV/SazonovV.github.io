<?php

/* https://api.telegram.org/bot694245730:AAGoCdkcDdwX-WuVOqoU7H9SQ4u5i9G9fmo/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "694245730:AAGoCdkcDdwX-WuVOqoU7H9SQ4u5i9G9fmo";
$chat_id = "-311524296";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	
} else {
  echo "Error";
}
?>