<?php
namespace Ordermaker;

class Orders {
    private $wrapper;
    public function __construct( $mySQLIwrapper ) {
        $this->wrapper = $mySQLIwrapper;
        }
    public function addOrder($item) {
       $this->wrapper->insert($item);

    }
    public function deleteOrder($id) {
        $this->wrapper->delete($id);
 
     }
     public function changeOrder($itemchange, $idchange) {
        $this->wrapper->change($itemchange, $idchange);
 
     }
    }
?>

