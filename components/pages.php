<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'homepage';
	}
	switch($page){
		case "homepage";
			include("mainpage.html");
			break;
		case "controller_property";
			include("module/property/controller/".$_GET['page'].".php");
			break;
		case "404";
			include("components/error".$_GET['page'].".php");
			break;
		case "503";
			include("components/error".$_GET['page'].".php");
			break;
		default;
			include("mainpage.html");
			break;
	}
?>