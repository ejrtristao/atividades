<?php
if (isset($_POST)) {
    require 'lib.php';
 
    $id = $_POST['id'];
    $nomeclie = $_POST['nomeclie'];
    $apelido = $_POST['apelido'];
 
    $object = new CRUD();
 
    $object->Update($nomeclie, $apelido, $id);
}