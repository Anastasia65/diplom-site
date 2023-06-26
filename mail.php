<?php 
//получение данных

$name = $_POST['name'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

//обработка данных 
//преобразование символов в сущности
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$comment = htmlspecialchars($comment);

//декодирование URL
$name = urldecode($name);
$phone = urldecode($phone);
$comment = urldecode($comment);

//удаление пробельных символов
$name = trim($name);
$phone = trim($phone);
$comment = trim($comment);

//отправка данных на почту
if (mail("anst03@yandex.ru",
    "Новое письмо с сайта",
    "Имя: ".$name."\n". 
    "Телефон: ".$phone."\n". 
    "Комментарий: ".$comment,
    "From: no-reply@sadovaya-mebel.site \r\n")
    ) {
        echo ('<h3>Заявка отправлена</h3><br><a href="index.html#feedback">Вернуться назад</a>');
    }
    else {
        echo ('Есть ошибки');
    }

?>