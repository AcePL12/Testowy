<?php
session_start();


if( isset( $_SESSION['licznik'] ) ) {
    $_SESSION['licznik'] += 1;
 }else {
    $_SESSION['licznik'] = 1;
 }

 
?>
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
if (empty($login) || empty($pass)){
    
    echo("<script>");
    echo('window.location.replace("formularz.html")');
    echo("</script>");
}
else{
    echo("<div class='main'> Witaj ".$login."<br>");
    echo('<input type="button" value="Wyloguj" onclick="window.location=(\'formularz.html\')"> ');
echo('<form method=post>');
echo("<input type='hidden' name='login' value='$login'>");
echo("<input type='hidden' name='pass' value='$pass' >");
echo('<input type="submit" name="submit1" value="Wystartuj Naliczanie Sesji"> ');
echo('<input type="submit" name="submit2" value="Zatrzymaj Naliczanie Sesji"> ');
echo('<input type="submit" name="submit3" value="Resetuj Naliczanie Sesji"> ');
echo('</form>');
echo("</div>");
}


echo("<p class='licznik'> Odtworzono tą sesję już ".  $_SESSION['licznik'] ." razy </p>");


if(isset($_POST['submit2'])){
    session_reset();
} 
if(isset($_POST['submit3'])){
    $_SESSION['licznik'] = 0;
    
} 



?>

</body>
</html>