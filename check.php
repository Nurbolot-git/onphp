<?php
// print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];
$error = '';
if (trim($email) == ''){
    $error = 'Email почтаңызды жазыңыз';
}elseif (trim($message) == ''){
    $error = 'Кабарыңызды жазыңыз';
}elseif (strlen($message) <10)
    $error = 'Кабарыңыз 10 символдон аз';
// эгерде бул error 10 символ пустой болобосо астыдагы условный оператов текшерт ,
if ($error != '') {
    echo $error;
    exit;
}
$message='=?utf8?8?'.base64_encode('Тест кабар').'?=';
$headers='From: $email\r\nReply-to:email\r\nContent-type: text/html;charset=utf-8\r\n  ';

mail('kgznurik17@gmail.com',$subject, $message, $headers);

header('Location: /about.php');

?>