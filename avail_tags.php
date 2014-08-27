<?php
	$str = "Standard Tag :)";
	echo $str;	
?>
<hr>
<?
	echo "Short Tag, may be u will not get this text on browser.";	
	echo "<br>This tag is highly discourage :(";
?>
<hr>
<?=$str?>
<hr>
<script language="php">
	echo date_default_timezone_get();
	date_default_timezone_set("Asia/Tokyo");
	echo date("Y-m-d H:m:s");
</script>	
<hr>
