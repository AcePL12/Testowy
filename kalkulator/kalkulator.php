<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="kalk.css">
</head>
<body>
<?php
error_reporting(0);
class kalkulator {
    private $FirstNumber, $SecondNumber;
    public function __construct( $Value1, $Value2 ) {
    $this->FirstNumber = $Value1;
    $this->SecondNumber = $Value2;
    }
    public function dodawanie() {
    return $this->FirstNumber + $this->SecondNumber;
    }
    public function odejmowanie() {
    return $this->FirstNumber - $this->SecondNumber;
    }
    public function mnozenie() {
    return $this->FirstNumber * $this->SecondNumber;
    }
    public function dzielenie() {
    return $this->FirstNumber / $this->SecondNumber;
    }
    }
?>
<form action=# method=POST > 
<fieldset>
<legend><h2>kalkulator</h2></legend>
<input type="number" placeholder="Pierwsza Liczba" name="l1"> <br>
<input type="number" placeholder="Druga Liczba" name="l2"> <br>
<input type="radio" name="dzialanie" value="dodawanie" checked> Dodawanie <br>
<input type="radio" name="dzialanie" value="odejmowanie"> Odejmowanie <br>
<input type="radio" name="dzialanie" value="mnozenie"> Mnożenie <br>
<input type="radio" name="dzialanie" value="dzielenie"> Dzielenie <br>
<input type="submit" value="Licz">
</fieldset>
</form>
<?php
    $wynik = new kalkulator($_POST["l1"], $_POST["l2"]); 
    echo("<p class='wyswietl'>");
if($_POST["dzialanie"]=="dodawanie"){
    echo $wynik-> dodawanie()."\n"; 
}
if($_POST["dzialanie"]=="mnozenie"){
    echo $wynik-> mnozenie()."\n"; 
}
if($_POST["dzialanie"]=="odejmowanie"){
    echo $wynik-> odejmowanie()."\n"; 
}
if($_POST["dzialanie"]=="dzielenie"){
    echo $wynik-> dzielenie()."\n"; 
}
    echo("</p>");
?>
</body>
</html>