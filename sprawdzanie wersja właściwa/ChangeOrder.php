<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PDOwrap.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Ordhandle.php';

if(empty($_POST['itmz']|| empty($_POST['idz']))){
    throw new Exception('Uzupełnij wszystkie pola');
}
$orderHandler = new OrderHandle(new PDOwrap());
$orderHandler->ChOrd($_POST['item']);

echo("Dodano przedmiot");
?>