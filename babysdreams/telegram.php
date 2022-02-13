<?php

/* https://api.telegram.org/bot5174875845:AAHBLkACLPtFoxVgqJtfSPlJy4K4QOIDwiU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$userName = $_POST['userName'];
$userPhone = $_POST['userPhone'];
$userEmail = $_POST['userEmail'];
$userGood = $_POST['userGood'];


$token = "5174875845:AAHBLkACLPtFoxVgqJtfSPlJy4K4QOIDwiU";
$chat_id = "-704808571";
$arr = array(
  'Имя пользователя: ' => $userName,
  'Телефон: ' => $userPhone,
  'Email: ' => $userEmail,
  'Товар: ' => $userGood
);

$txt = "<b>ЗАЯВКА</b>%0A------------------%0A";

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo 'ok';
} else {
  echo "Error";
}
?>
