<?php
class OrderHandler{
    private $pdoWrapper;

    public function __construct($pdoWrapper){
        $this->pdoWrapper = $pdoWrapper;

    }
    
    public function addOrd($item){
        $this->pdoWrapper->insert($item);
    }
}
?>