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

$item=$_POST['item'];

$connect=mysqli_connect("localhost", 'root', '','baza');
$query="INSERT into zamowienia values (NULL,'$item')";
if($item!=""){
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