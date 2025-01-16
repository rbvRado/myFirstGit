<?php
	header('Content-Type: text/xml;charset=utf-8');
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
	echo '<response>';
	$name = htmlentities($_GET['name'], ENT_QUOTES, "UTF-8");
	$userNames = array('VOISIN', 'RENOU', 'CANO');
	if (in_array(strtoupper($name), $userNames))
		echo 'Bonjour monsieur ' . htmlentities($name) . ' !';
	elseif (trim($name) == '')
		echo 'Veuillez saisir votre nom !';
	else
		echo htmlentities($name,ENT_QUOTES,"UTF-8") . ', je ne vous connais pas !';
	echo '</response>';
?>
