<?php
if (isset($_POST['descri'])) {
    require("lib.php");
 
    $descri = $_POST['descri'];
 
    $object = new CRUD();
 
    $object->Create($descri);
}
?>