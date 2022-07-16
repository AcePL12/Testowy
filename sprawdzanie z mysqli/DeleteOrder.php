<?php
require __DIR__ . '/vendor/autoload.php';

use Ordermaker\MySQLIwrapper;
use Ordermaker\Orders;


$id=$_POST['id'];

if($id!=""){
    $mySQLIwrapper = new MySQLIwrapper();
    $orders=new Orders($mySQLIwrapper);
    $orders->deleteOrder($id);

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