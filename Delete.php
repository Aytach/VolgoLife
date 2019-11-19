<?php

require_once 'db.php';

$id_delete = trim($_REQUEST['page']); //id_advertisement

$query = $pdo->prepare("DELETE FROM `advertisements` WHERE `id_advertisements` = :parent");

$query->execute(array('parent' => $id_delete));

header("Location: Stends.php");
?>
