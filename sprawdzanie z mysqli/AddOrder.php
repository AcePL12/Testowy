<?php
require __DIR__ . '/vendor/autoload.php';

use Ordermaker\MySQLIwrapper;
use Ordermaker\Orders;

$item=$_POST['item'];

if($item!=""){
   $mySQLIwrapper = new MySQLIwrapper();
    $orders=new Orders($mySQLIwrapper);
    $orders->addOrder($item);

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