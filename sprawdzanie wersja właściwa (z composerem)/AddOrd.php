<?php

require __DIR__ . '/vendor/autoload.php';

if(empty($_POST['item'])){
    throw new Exception('Uzupełnij wszystkie pola');

}
$orderHandler = new Classes\OrdHandle(new Classes\PDOwrap());
$orderHandler->addOrd($_POST['item']);

echo("Dodano przedmiot");

?>