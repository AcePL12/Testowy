<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="strona.css">
<meta charest="UTF-8">
</head>
<body>
<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
if (!empty($_POST['login']) && !empty($_POST['pass'])){
    echo("<div class='main'> Witaj ". $login. "<br>");
    echo('<input type="button" value="wyloguj" onclick="window.location=(\'formularz.html\')"> </div>');
}
else{
    echo("<script>");
    echo('window.location.replace("formularz.html")');
    echo("</script>");
}
?>
</body>
</html>