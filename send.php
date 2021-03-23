<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Формирование самого письма
$title = "Новое обращение Best Tour Plan";
if($_GET['action'] === 'sendEmail') {
    $body = "
        <h2>Новое обращение</h2>
        <b>Почта:</b> {$_POST['email']}<br>
    ";
} else {
    // Переменные, которые отправляет пользователь
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $body = "
        <h2>Новое обращение</h2>
        <b>Имя:</b> $name<br>
        <b>Телефон:</b> $phone<br><br>
        <b>Сообщение:</b><br>$message
    ";
}


$encoding = "utf-8";

// Preferences for Subject field
$subject_preferences = array(
    "input-charset" => $encoding,
    "output-charset" => $encoding,
    "line-length" => 76,
    "line-break-chars" => "\r\n"
);

$mail_to = 'axenoffdenis@yandex.ru, kapustinlj@yandex.ru';
$from_name = 'Денис';
$from_mail = 'admin@webdesignmind.ru';
$mail_subject = $title;
$mail_message = $body;
// Mail header
$header = "Content-type: text/html; charset=".$encoding." \r\n";
$header .= "From: ".$from_name." <".$from_mail."> \r\n";
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-Transfer-Encoding: 8bit \r\n";
$header .= "Date: ".date("r (T)")." \r\n";
$header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);

// Send mail
if(mail($mail_to, $mail_subject, $mail_message, $header)) {
    if($_GET['action'] === 'sendEmail') {
        header('Location: newsletter.php');
    } else {
        header('Location: thankyou.php');
    }
} else {
    echo('Ошибка при отправке');
}

/*
// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'mail.webdesignmind.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'admin@webdesignmind.ru'; // Логин на почте
    $mail->Password   = 'J5p6T1a4'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('admin@webdesignmind.ru', 'Денис Аксенов'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('kapustinlj@yandex.ru');

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
*/
// Отображение результата
