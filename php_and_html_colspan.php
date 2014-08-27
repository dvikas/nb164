<?php
	# construct dynamic HTML Table 
	
	$col = 6;
	$count = 27;
	$rows = ceil($count / $col);
	$flag = true;
?>

<table cellspacing="0">
<?php
for($i=1,$tmp=0 ; $i<=$rows ; $i++) {
?>
	<tr>
		<?php
			for($j=1 ; $j <= $col ; $j++,$tmp++) {
				if($tmp < $count)
				{
		?>
		<td>Row <?=$tmp+1?></td>
		<?php
				} else {//end if
			if($flag == true){		
				echo '<td colspan="'.($col-$j+1).'">&nbsp;</td>';
			}
			$flag = false;
			
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
