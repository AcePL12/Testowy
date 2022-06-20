<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">


</head>
<body>
<form method="Post" action="#">
    <fieldset> 
    <legend>Dodawanie zamówień</legend>
    Przedmiot: <input type="text" name="item"> <br>
    <input type="submit" value="dodaj" > <br>
    </fieldset>
</form>
<?php
error_reporting(0);
$conn=mysqli_connect("localhost", 'root', '','baza');
$item=$_POST['item'];


$kw1="INSERT into zamowienia values (NULL,'$item')";



if($item!=""){
    mysqli_query($conn, $kw1);
}
else{
    echo("<script>");
    echo('alert("Musisz wypełnić wszystkie pola")');
    echo("</script>");
}
mysqli_close($conn);
?>
</body>
</html> 