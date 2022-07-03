<?php
require __DIR__ . '/vendor/autoload.php';


if(empty($_POST['itmz']|| empty($_POST['idz']))){
    throw new Exception('Uzupełnij wszystkie pola');
}
$orderHandler = new Classes\OrderHandle(new Classes\PDOwrap());
$orderHandler->ChOrd($_POST['item']);

echo("Dodano przedmiot");
?>