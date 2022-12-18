<?php
require_once("../models/Crud.php");

class InsertController
{
    public function controllerInsert()
    {
        if (isset($_POST['submit'])) {
            
            $db = new Crud();
            $db->insertDb($_POST['titulo'],$_POST['descricao'],$_POST['ingredientes'],$_POST['tempo']);
            header("location: ../index.php");
        }
    }
}

$c = new InsertController();
$c->controllerInsert();

?>