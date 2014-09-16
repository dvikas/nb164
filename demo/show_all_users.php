<?php 
require_once('./includes/header.php'); 

	$id = isset($_GET['id'])?$_GET['id']:0;
	
	if(isset($_GET['mode']) && $_GET['mode']=='del'){
		$del_query = "DELETE FROM `users` WHERE `id`='$id'";
		mysql_query($del_query);
	}
	
	if(isset($_GET['mode']) && $_GET['mode']=='status'){
		$status = $_GET['status'];
		$update_query = "UPDATE `users` SET `status`='$status' WHERE `id`='$id'";
		mysql_query($update_query);
	}

	$query_sel = "SELECT * FROM `users`";
	$result_sel = mysql_query($query_sel) or die(mysql_error());
//	pr($result_sel);
	

?>
      <div id="page-wrapper">
	  
		<div class="col-lg-12">
			<h1>Dashboard <small>Statistics Overview</small></h1>
			<ol class="breadcrumb">
			<li ><i class="fa fa-dashboard"></i> Dashboard</li>
			  <li class="active">Add New User</li>
			</ol>
			<div class="alert alert-success alert-dismissable" style="display:none;">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-check fa-2x"></i>&nbsp;&nbsp;User Added successfully.	
			</div>
			
<!---------------------->			
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th># </th>					  
                    <th>Avatar </th>					  
                    <th>Name <i class="fa fa-sort"></i></th>
                    <th>Email <i class="fa fa-sort"></i></th>
                    <th>Gender <i class="fa fa-sort"></i></th>
                    <th>Added Date <i class="fa fa-sort"></i></th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
<?php
	while($user = mysql_fetch_assoc($result_sel)){
		$src = './uploads/'.$user['avatar'];
		$email = $user['email'];
		$id = $user['id'];
		$statusClass = $user['status']=='0'?'fa-star-o':' fa-star';
		$newStatus = $user['status']=='0'?1:0;
		$status = $user['status']=='0'?'Inactive':'Active';
?>
                  <tr>
					<td><?=$id?></td>

                    <td>
						<a href="<?=$src?>" target="blank">
						<img src="<?=$src?>" height="90" width="120" >
						</a>
                    </td>
                    <td><?=$user['uname']?></td>
                    <td><a href="mailto:<?=$email?></a>"><?=$email?></a></td>
                    <td><?=getGender($user['gender'])?></td>
                    <td><?=date('d-M-Y h:i a',strtotime($user['added_date']))?></td>
                    <td>
   <a title="<?=$status?>" href="<?=
   "show_all_users.php?mode=status&id=$id&status=$newStatus"?>"><i class="fa <?=$statusClass?> fa-2x"></i></a>
                    </td>
                    <td>
   
   <a title="delete" onClick="return confirm('Are you sure?');" href="<?="show_all_users.php?mode=del&id=$id"?>">
   <i class="fa fa-trash fa-2x"></i></a>
   <a href="#" title="Edit User">
		
	<a href="edit_user.php?id=<?=$id?>">
		<i class="fa fa-edit fa-2x"></i>		
	</a>			
	
	</td>
	
                  </tr>
<?php
	}
?>
                </tbody>
              </table>
            </div>
<!---------------------->			
			
			
	  </div>
		  

	  </div>
<?php require_once('./includes/footer.php'); ?>
