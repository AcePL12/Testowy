<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

class PDOwrap{
private $pdo;

public function __construct(){
    $this->pdo = new PDO('mysqli:host=localhost,dbname=baza', config::USERNAME, config::PASSOWRD);
}

public function insert($item){
    try{
        $sql = "INSERT Into zamowienia (Przedmiot) values (?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt-> execute([$item]);
    } catch(PDOException $PDOException){
        echo("<pre>");
        print_r($PDOEXception);
        die();
    }
}
public function change($itmz, $idz){
    try{
        $sql = "UPDATE zamowienia SET Przedmiot='$itmz' WHERE id=$idz";
        $stmt = $this->pdo->prepare($sql);
        $stmt-> execute([$itmz, $idz]);
    } catch(PDOException $PDOException){
        echo("<pre>");
        print_r($PDOEXception);
        die();
    }
}
public function delete($id){
    try{
        $sql = "DELETE from zamowienia where id=$id";
        $stmt = $this->pdo->prepare($sql);
        $stmt-> execute([$id]);
    } catch(PDOException $PDOException){
        echo("<pre>");
        print_r($PDOEXception);
        die();
    }
}
}
?>