<?php
if ((isset($_GET['page'])) && ($_GET['page'] === "controller_property")) {
	include("components/top_page_property.html");
} else {
	include("components/top_page.html");
}
session_start();

include("components/header.html");

include("components/pages.php");

include("components/footer.html");

include("components/bottom_page.html");
?>