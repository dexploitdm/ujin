<?php 
require_once '../core/PHPMailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
 
// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
 
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'Логин@yandex.ru';
$mail->Password = 'Пароль';
 
// От кого
$mail->setFrom('mail@snipp.ru', 'Snipp.ru');		
 
// Кому
$mail->addAddress('mail@site.com', 'Иван Петров');
 
// Тема письма
$mail->Subject = $subject;
 
// Тело письма
$body = '<p><strong>«Hello, world!» </strong></p>';
$mail->msgHTML($body);
 
// Приложение
$mail->addAttachment(__DIR__ . '/image.jpg');
 
$mail->send();