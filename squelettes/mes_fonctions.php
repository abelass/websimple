<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

function rediriger($url){
	header("HTTP/1.1 301 Moved Permanently"); 
	echo $url;
	//header("Location: $url");
	retour;
	}

?>
