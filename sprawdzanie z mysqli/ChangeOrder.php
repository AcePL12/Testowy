<?php
require __DIR__ . '/vendor/autoload.php';

use Ordermaker\MySQLIwrapper;
use Ordermaker\Orders;

$idchange=$_POST['idChange'];
$itemchange=$_POST['itemChange'];


if($idchange!="" && $itemchange!=""){
   $mySQLIwrapper = new MySQLIwrapper();
   $orders=new Orders($mySQLIwrapper);
    $orders->changeOrder($itemchange, $idchange);

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