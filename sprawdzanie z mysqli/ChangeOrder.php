<?php
require __DIR__ . '/vendor/autoload.php';

class Orders {
   private $connect, $query;
   public function __construct( $query, $connect ) {
       $this->query = $query;
       $this->connect = $connect;
       }
   public function zamowienie() {
       mysqli_query($this->connect, $this->kw);

   }
   }

$idzmiany=$_POST['idzmiany'];
$itemzmiany=$_POST['itmzmiany'];

$connect=mysqli_connect("localhost", 'root', '','baza');
$query"UPDATE zamowienia SET Przedmiot='$itemzmiany' WHERE id=$idzmianyg";

if($idzmiany!="" && $itemzmiany!=""){
    new Orders($query, $connect);
    
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