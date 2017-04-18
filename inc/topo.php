<?php
require_once('config.php');

try{
  
  $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
	} catch(PDOException $e) {
  		echo 'Error: ' . $e->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Cadastro de Atividades">
    <meta name="author" content="Elvis T Junior">
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-3.3.7-dist/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/atividades/inc/css/estilo.css"/>
</head>
<body>
<?php 
include 'menu.php';
 ?>