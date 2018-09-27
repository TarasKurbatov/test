<?php

$to = "taras.k.g@mail.ru";
$sitename  = "wwwandkr.beget.tech";
$title = clean($_POST["formname"]);
$subject   = " $title:  \"$sitename\"";
$headers = 'From: taras.k.g@mail.ru' . "\r\n" .
    'Reply-To: taras.k.g@mail.ru' . "\r\n" .
    'Content-Type: text/html;charset=UTF-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}
    
$name = clean($_POST["name"]);
$phone = clean($_POST["phone"]);
$email = clean($_POST["email"]);
$mess = clean($_POST["mess"]);

$message = "
Имя: $name <br><br>
Телефон: $phone <br><br>
E-mail: $email <br><br>
Сообщение: $mess <br><br>
";

//return mail($to, $subject, $message, $headers);
if( mail($to, $subject, $message, $headers) ) {
    echo true;
} else{
    echo false;
}
