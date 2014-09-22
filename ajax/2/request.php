<?php
	require_once('db.php');
	$select  = "SELECT `id`,`uname` FROM users";
	$result = mysql_query($select) or die(mysql_error());

?>
<hr>
	<select id="userSelectId">
		
		<option value="">-SELECT-</option>
<?php
	while($user = mysql_fetch_assoc($result)) {
?>		
	<option value="<?=$user['id']?>">(<?=$user['id']?>) <?=$user['uname']?></option>
<?php
	}
?>
		
	</select>
<hr>
	<h4>User Details
		<span id="loader" style="display:none;"><img src="img/ajax-loader.gif" /></span>
	</h4>
	
	<table id="userDetailId" border="1">
		<tr><td>----None----</td></tr>
	</table>
<hr>

<script src="jquery-1.9.1.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('select#userSelectId').on('change',function(){
			var id = $(this).val();
			
console.log('select Id :'+id);
			
			$.ajax({
				url : 'response.php',
				data : {'myid':id,'mode':'select'},
				type : 'post',
				dataType : 'json',
				beforeSend : function(){
					$('span#loader').show();
				},
				statusCode : {
					200 : function(data){
						var tr = '';
						
						$.each(data,function(key,value){
console.log('key => '+key+', value =>'+value);
							tr += '<tr><td>'+key+'</td><td>'+value+'</td></tr>';
						});
						
						$('table#userDetailId').html(tr);						
console.log('Status : '+200);
					},
					404 : function(data){
						alert("Page Not Found");
					},
				},
				complete : function(){
					$('span#loader').hide();
				},
				
			});

		});
		
		
	});
</script>


