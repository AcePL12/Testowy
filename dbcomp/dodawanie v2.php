<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
    class Orders {
    private $connect, $kw1;
    public function __construct( $kw1, $conn ) {
        $this->kw1 = $kw1;
        $this->connect = $conn;
        }
    public function zamowienie() {
        mysqli_query($this->connect, $this->kw1);

    }
    }
?>
    <form method="Post" action="#">
    <fieldset> 
    <legend>Dodawanie zamówień</legend>
    Przedmiot: <input type="text" name="przedmiot">  <br>
    Ilosc: <input type="number" name="ilosc"> <br> 
    Adres: <input type="text" name="adres"> <br>
    Dostawa1: <input type="radio" name="dostawa" value="dostawa1" checked> <br>
    Dostawa2: <input type="radio" name="dostawa" value="dostawa2"> <br>
    <input type="submit" value="zamów" > <br>
    </fieldset>
    </form>
<?php
error_reporting(0);
$conn=mysqli_connect("localhost", 'root', '','baza');
$Quantity= $_POST['ilosc'];
$Itm= $_POST['przedmiot'];
$Adres=$_POST['adres'];
$Dostawa=$_POST['dostawa'];

$kw1="INSERT into zamowienia values (NULL,'$Itm','$Quantity','$Adres','$Dostawa')";

if($Adres!="" && $Quantity !="" && $Itm != ""){
    new Orders($kw1, $conn);
}
else{
    echo("<Script>");
    echo("alert('Wypełnij wszystkie pola')");
    echo("</script>");
}


mysqli_close($conn);
?>
</body>
</html> 