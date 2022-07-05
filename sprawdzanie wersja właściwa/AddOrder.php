<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'PDOwrap.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Ordhandle.php';

if(empty($_POST['item'])){
    throw new Exception('Uzupełnij wszystkie pola');

}
$orderHandler = new OrdHandle(new PDOwrap());
$orderHandler->addOrd($_POST['item']);

echo("Dodano przedmiot");

?>