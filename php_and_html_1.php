<?php
	# construct dynamic HTML Table 
	$rows = 10;
?>

<table>
<?php
for($i=1 ; $i<=$rows ; $i++) {
?>
	<tr>
		<td>Row <?=$i?></td>
	</tr>
<?php
}
?>	
</table>

<style type="text/css">
	table{
		width:70%;
	}
	table td{
		padding:10px;
		border:1px solid blue;
	}	
</style>
