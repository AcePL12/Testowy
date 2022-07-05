<?php
$idz=$_POST['idzmiany'];
$itemz=$_POST['itmzmiany'];

$conn=mysqli_connect("localhost", 'root', '','baza');
$kw="UPDATE zamowienia SET Przedmiot='$itemz' WHERE id=$idz";

if($idz!="" && $itemz!=""){
    mysqli_query($conn, $kw);
    
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