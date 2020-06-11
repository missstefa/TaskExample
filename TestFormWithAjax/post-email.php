<?php
if (isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'miss.stefa@yandex.ru'; // адрес получателя
    $subject = 'Обращение'; // тема письма

// формируем тело сообщения
    $message = 'Имя: ' . $name . "\r\n" . 'Message: ' . $message;

// формируем headers для письма
    $headers = 'From: ' . $email . "\r\n"; // от кого

// кодируем заголовок в UTF-8
    $subject = preg_replace("/(\r\n)|(\r)|(\n)/", "", $subject);
    $subject = preg_replace("/(\t)/", " ", $subject);
    $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

// отправка
    @mail($to, $subject, $message, $headers);

    if (mail($to, $subject, $message, $headers)) {
       echo 'сообщение успешно отправлено';
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
}