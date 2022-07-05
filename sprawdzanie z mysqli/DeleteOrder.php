<?php
$id=$_POST['id'];

$conn=mysqli_connect("localhost", 'root', '','baza');
$kw="DELETE from zamowienia where id=$id";
if($id!=""){
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