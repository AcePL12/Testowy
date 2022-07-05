<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PDOwrap.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Ordhandle.php';

if(empty($_POST['id']))){
    throw new Exception('Uzupełnij wszystkie pola');
}
$orderHandler = new OrderHandler(new PDOwrap());
$orderHandler->DelOrd($_POST['id']);

echo("Dodano przedmiot");
?>