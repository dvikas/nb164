<?php
	# construct dynamic HTML Table 
	
	$col = 3;
	$count = 25;
	$rows = ceil($count / $col);
	
?>

<table cellspacing="0">
<?php
for($i=1,$tmp=0 ; $i<=$rows ; $i++) {
	$color = $i%2 ==0 ? 'yellow':'pink';
?>
	<tr style="background-color:<?=$color?>">
		<?php
			for($j=1 ; $j <= $col ; $j++,$tmp++) {
				if($tmp < $count)
				{
		?>
		<td>Row <?=$tmp+1?></td>
		<?php
				} else {//end if
			echo '<td>&nbsp;</td>';		
				}
			}//end j for
		?>
	</tr>
<?php
}
?>	
</table>

<style type="text/css">
	table{
		width:70%;
		border-collapse:collapse;
	}
	table td{
		padding:10px;
		border:1px solid blue;
	}	
</style>
