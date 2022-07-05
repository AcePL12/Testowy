<?php
$item=$_POST['item'];

$conn=mysqli_connect("localhost", 'root', '','baza');
$kw="INSERT into zamowienia values (NULL,'$item')";
if($item!=""){
$wynik = mysqli_query($conn, $kw);

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