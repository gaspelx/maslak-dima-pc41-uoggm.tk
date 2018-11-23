<?php
$to = ' svobodnyj.sozdanie.saitov@yandex.by';
$subject = 'Заполнена форма консультации с '.$_SERVER['HTTP_REFERER'];
$subject = "=?utf-8?b?". base64_encode($subject) ."?=";
$message = "";
if(!empty($_POST['Name'])){
    $message = "Имя: ".$_POST['Name'];
}
if(!empty($_POST['Phone'])){
    $message .= "\nТелефон: ".$_POST['Phone'];
}
$headers = 'From: sozdanie-saitov-svobodnyj.tk <no-reply@sozdanie-saitov-svobodnyj.tk>' . "\r\n";
$headers .= 'Content-type: text/plain; charset="utf-8"';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
mail($to, $subject, $message, $headers);
?>