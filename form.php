





<?php

$fio = $_POST['fio'];
$e = $_POST['e'];
$tel = $_POST['tel'];
$text = $_POST['text'];
$fio = htmlspecialchars($fio);
$e = htmlspecialchars($e);
$tel = htmlspecialchars($tel);
$text = htmlspecialchars($text);
$fio = urldecode($fio);
$e = urldecode($e);
$tel = urldecode($tel);
$text = urldecode($text);
$fio = trim($fio);
$e = trim($e);
$tel = trim($tel);
$text = trim($text);
mail("fil3120025@gmail.com", "Заявка с сайта", "ФИО: " .$fio. ". E-mail: " .$e. ". Телефон: " .$tel. ". Примечание: " .$text);

?>