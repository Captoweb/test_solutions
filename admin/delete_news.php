<?php require_once('../init.php'); 

$id = $_GET['id'];

Database::getInstance()->delete('article', ['id', '=', $id]);

// Redirect::to('index.php');
header("Location: /admin/index.php");

?>