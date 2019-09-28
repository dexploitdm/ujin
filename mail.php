<?php
require_once('core/PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

if ($_POST) { // если передан массив POST
    $name = $_POST['name'];
    $phone = $_POST['email'];
    $json = array(); // подготовим массив ответа

    function mime_header_encode($str, $data_charset, $send_charset) { // функция преобразования заголовков в верную кодировку
        if($data_charset != $send_charset)
            $str=iconv($data_charset,$send_charset.'//IGNORE',$str);
        return ('=?'.$send_charset.'?B?'.base64_encode($str).'?=');
    }

    $mail->isSMTP();
    $mail->Host = 'smtp.yandex.ru';  																							// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    $mail->Username = 'mihalzvezdov@yandex.ru';
    $mail->Password = '4815162342007katesdev';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('dexploitdm@yandex.ru');
    $mail->addAddress('dexploitdm@yandex.ru');
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'ЦПК';
    $mail->Body    = '
    Клиент оставил заявку для уточнения стоимости заказа:<br>
    <b>Имя:</b> ' .$name . '<br> 
    <b>Телефон:</b>' .$phone. '';
    $mail->AltBody = '';
    $mail->send();
    $json['error'] = 0; // ошибок не было
    echo json_encode($json); // выводим массив ответа
} else { // если массив POST не был передан
    echo 'GET LOST!'; // высылаем
}
