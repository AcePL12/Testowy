<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="POST" action="AddOrder.php">
    <fieldset>
        <legend>Dodawanie zamówień</legend>
        <input type="text" name="item" placeholder="Przedmiot"> <br>
        <input type="submit" value="dodaj"> <br>
    </fieldset>
    <form method="POST" action="ChangeOrder.php">
    <fieldset>
        <legend>zmien zamówienie</legend>
        <input type="number" name="idChange" placeholder="ID"> <br>
        <input type="text" name="itemChange" placeholder="Przedmiot"> <br>
        <input type="submit" value="zmien"> <br>
    </fieldset>
</form>
<form method="POST" action="DeleteOrder.php">
    <fieldset>
        <legend>usun zamówienie</legend>
        <input type="number" name="id" placeholder="ID"><br>
   <input type="submit" value="Usuń"><br><br>
    </fieldset>
</form>

 