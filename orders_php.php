<?php
	require_once 'db.php';
	$id_o = trim($_REQUEST['id']);
	echo '<input type="hidden" name="id" id="id" value="' . $id_o . '">';
?>
