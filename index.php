<?php

include("inc/top_page.html");

session_start();
?>
<div id="wrapper">
	<div id="header">
		<?php
		include("inc/header.html");
		?>
	</div>
	<div id="" class="back">
		<?php
		include("inc/pages.php");
		?>
		<br style="clear:both;" />
	</div>
	<div id="footer">
		<?php
		include("inc/footer.html");
		?>
	</div>
</div>
<?php
include("inc/bottom_page.html");
?>