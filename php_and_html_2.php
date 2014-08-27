<?php
	# construct dynamic HTML Table 
	$rows = 10;
	$col = 3;
?>

<table>
<?php
for($i=1 ; $i<=$rows ; $i++) {
?>
	<tr>
		<?php
			for($j=1 ; $j <= $col ; $j++) {
		?>
		<td>Row <?=$i?></td>
		<?php
			}
		?>
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
