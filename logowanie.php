<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="logowanie.css">
<meta charest="UTF-8">
</head>
<body>
<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
if (!empty($_POST['login']) && !empty($_POST['pass'])){
    echo("<div class='main'> Witaj ". $login. "<br>");
    echo('<input type="button" value="wyloguj" onclick="window.location=(\'1.html\')"> </div>');
}
else{
    echo("<script>");
    echo('window.location.replace("1.html")');
    echo("</script>");
}
?>
</body>
</html>