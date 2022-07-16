<?php
namespace Ordermaker;

class MySQLIwrapper{
    private $connect;
    public function __construct(){
        $this->connect = mysqli_connect("localhost", 'root', '','baza');
       
    }
    public function insert($item){
        $query = "INSERT into zamowienia values (NULL,'$item')";

        mysqli_query($this->connect, $query);
    }
    public function delete($id){
        $query="DELETE from zamowienia where id=$id";

        mysqli_query($this->connect, $query);
    }
    public function change($itemchange, $idchangey){
        $query="UPDATE zamowienia SET Przedmiot=$itemchange WHERE id=$idchange";

        mysqli_query($this->connect, $query);
    }
}

?>