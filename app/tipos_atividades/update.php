<?php
if (isset($_POST)) {
    require 'lib.php';
 
    $id = $_POST['chv'];
    $descri = $_POST['descri'];

    $object = new CRUD();
    $object->Update($id, $descri);
}