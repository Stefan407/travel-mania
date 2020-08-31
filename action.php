<?php
$msg_box = ""; // в этой переменной будем хранить сообщения формы
$errors = array(); // контейнер для ошибок
// проверяем корректность полей

// если форма без ошибок
if (empty($errors)) {
    // собираем данные из формы
    $message  = "Имя пользователя: " . $_POST['user_name'] . "<br/>";
    $message .= "Почта пользовалтеля: " . $_POST['email'] . "<br/>";
    $message .= "Сообщение пользователя: " . $_POST['text'] . "<br/>";
    send_mail($message); // отправим письмо
    // выведем сообщение об успехе
    $msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
} else {
    // если были ошибки, то выводим их
    $msg_box = "";
    foreach ($errors as $one_error) {
        $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
    }
}

// делаем ответ на клиентскую часть в формате JSON
echo json_encode(array(
    'result' => $msg_box
));


// функция отправки письма
function send_mail($message)
{
    // почта, на которую придет письмо
    $mails_to = array("excurs.mania@gmail.com");
    // тема письма
    $subject = "Письмо с сайта Travel-mania";

    // заголовок письма
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From: travel-mania.org"; // от кого письмо

    // отправляем письмо 
    foreach ($mails_to as $mail_to) {
        $success = mail($mail_to, $subject, $message, $headers);
    }
}
