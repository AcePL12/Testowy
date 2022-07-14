<?php
require __DIR__ . '/vendor/autoload.php';


if(empty($_POST['id'])){
    throw new Exception('Uzupełnij wszystkie pola');
}
$orderHandler = new Classes\OrderHandler(new Classes\PDOwrap());
$orderHandler->DelOrd($_POST['id']);

echo("Dodano przedmiot");
?>