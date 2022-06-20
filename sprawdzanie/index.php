<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style>
table,tr,td,th{
border: solid black 2px;
margin:auto;
}
</style>
</head>
<body>
<form action="#" method="POST">
<fieldset>
   <input type="number" name="id" placeholder="ID">
   <input type="submit" value="Usuń">
</fieldset>
</form>
<form action="#" method="POST">
<fieldset>
   <input type="text" name="itm" placeholder="Przedmiot">
   <input type="submit" value="dodaj">
</fieldset>
</form>
<?php
error_reporting(0);

$id=$_POST['id'];
$item=$_POST['itm'];
$conn=mysqli_connect("localhost", 'root', '','baza');
$kw1="SELECT id, Przedmiot from zamowienia";
$kw2="DELETE from zamowienia where id=$id";
$kw3="INSERT into zamowienia values (NULL,'$item')";

$wynik = mysqli_query($conn, $kw1);

echo("<table> <th colspan='2'>Lista przedmiotów</th> <tr><th>Id</th> <th>Przedmiot</th></tr>");
while ($r = mysqli_fetch_row($wynik)) {
   echo("<tr> <td>".$r[0] . "</td> <td>". $r[1] ."</td> </tr>"); 
    
}
echo("</table>");
if($id!=""){
   mysqli_query($conn, $kw2);
}
else{
   echo("<script>");
   echo("alert('Aby usunąć lub dodać przedmiot w tabeli, wypełnij właściwe pole i naciśnij przycisk poniżej')");
   echo("</script>");
}
if($item!=""){
   mysqli_query($conn, $kw3);
}
mysqli_close($conn);
?>
</body>
</html> 