<?php
require __DIR__ . '/vendor/autoload.php';

use Ordermaker\MySQLIwrapper;
use Ordermaker\Orders;




$idchange=$_POST['idchange'];
$itemchange=$_POST['itemchange'];


if($idchange!="" && $itemchange!=""){
    $mySQLIwrapper = new MySQLIwrapper();
    $orders=new Orders($mySQLIwrapper);
    $orders->changeOrder($idchange, $itemchange);

    echo("<script>");
    echo('window.location.replace("index.php")');
    echo("</script>");
 }
 else{
    echo("<script>");
    echo("alert('Wypełnij wymagane pola')");
    echo("</script>");
 }
?>