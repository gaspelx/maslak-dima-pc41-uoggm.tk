<?php
$to = ' svobodnyj.sozdanie.saitov@yandex.by';
$subject = 'Заполнена форма заказа рекламы с '.$_SERVER['HTTP_REFERER'];
$subject = "=?utf-8?b?". base64_encode($subject) ."?=";
$message = "";
if(!empty($_POST['name'])){
    $message = "Имя: ".$_POST['name'];
}
if(!empty($_POST['phone'])){
    $message .= "\nТелефон: ".$_POST['phone'];
}
$headers = 'From: sozdanie-saitov-svobodnyj.tk <no-reply@sozdanie-saitov-svobodnyj.tk>' . "\r\n";
$headers .= 'Content-type: text/plain; charset="utf-8"';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
mail($to, $subject, $message, $headers);
?>