<?php 
	//phpinfo();
	define("HTTP_HOST", "http://".$_SERVER["HTTP_HOST"]."/");
	define("INCLUDE_PATH", $_SERVER["DOCUMENT_ROOT"]);

	$pageTitle = basename($_SERVER['SCRIPT_NAME'], '.php');
	$pageTitle = str_replace('-', ' ', $pageTitle);
	$pageTitle = ucwords($pageTitle);

	
?>