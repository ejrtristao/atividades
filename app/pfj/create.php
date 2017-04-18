<?php
if (isset($_POST['nomeclie']) && isset($_POST['apelido'])) {
    require("lib.php");
 
    $nomeclie = $_POST['nomeclie'];
    $apelido = $_POST['apelido'];
 
    $object = new CRUD();
 
    $object->Create($nomeclie, $apelido);
}
?>