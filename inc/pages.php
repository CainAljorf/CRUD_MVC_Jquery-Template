<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'homepage';
	}
	switch($page){
		case "homepage";
			include("index.html");
			break;
		case "controller_property";
			include("module/property/controller/".$_GET['page'].".php");
			break;
		case "typography";
			include("typography.html");
			break;
		case "aboutus";
			include("about-us.html");
			break;
		case "contactus";
			include("contacts.html");
			break;
		case "404";
			include("inc/error".$_GET['page'].".php");
			break;
		case "503";
			include("inc/error".$_GET['page'].".php");
			break;
		default;
			include("index.html");
			break;
	}
?>