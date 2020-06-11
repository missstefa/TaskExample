<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Отправлено</title>
</head>
</html>

<body>
<?php
if (isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    if (mail("miss.stefa@yandex.ru", "Обращение", "Имя ".$name.". Message: ".$message ,"From: .$email \r\n")) {
        echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
}
?>
</body>
