<?php require_once('./includes/header.php'); 
	
	$id = isset($_GET['id'])?$_GET['id']:0;

	$query = "SELECT * FROM `users` WHERE `id`='$id'";
	$result = mysql_query($query) or die(mysql_error());
	$user = mysql_fetch_assoc($result);
	//pr($user);
	$hobbiesArray = explode(',',$user['hobbies']);
	//pr($hobbiesArray);
	
	$isCricket = in_array('1',$hobbiesArray)?'checked':''; 
	$isHockey = in_array('2',$hobbiesArray)?'checked':''; 
	$isBadminton = in_array('3',$hobbiesArray)?'checked':''; 
	$isChess = in_array('4',$hobbiesArray)?'checked':''; 
	
	$isMale = $user['gender']=='m'?'checked':''; 
	$isFemale = $user['gender']=='f'?'checked':''; 

?>
      <div id="page-wrapper">
	  
		<div class="col-lg-12">
			<h1>User <small>(edit)</small></h1>
			<ol class="breadcrumb">
			<li ><i class="fa fa-dashboard"></i> Dashboard</li>
			  <li class="active">Edit User</li>
			</ol>
			<div class="alert alert-success alert-dismissable" style="display:none;">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-check fa-2x"></i>&nbsp;&nbsp;User Added successfully.	
			</div>
	  </div>
		  
	  <form action="edit_saveuser.php" method="post" enctype="multipart/form-data">
		  
<input type="hidden123" name="id" value="<?=$user['id']?>" />
<input type="hidden123" name="old_avatar" value="<?=$user['avatar']?>" />
		  
		<div class="form-group ">
		  <label class="control-label" >Name</label>
		  <input value="<?=$user['uname']?>" type="text" class="form-control" name="uname">
		</div>
		<div class="form-group ">
		  <label class="control-label" >Email</label>
		  <input value="<?=$user['email']?>" type="text" class="form-control" name="email">
		</div>
	
			
		<div class="form-group ">
		  <label class="control-label" >Hobbies</label>
			  <div class="radio">
				<label class="checkbox">
				  <input <?=$isCricket?> type="checkbox" name="hobbies[]" value="1"> Cricket
				</label>
			  </div>
			  <div class="radio">
				<label class="checkbox">
				  <input <?=$isHockey?> type="checkbox" name="hobbies[]" value="2"> Hockey
				</label>
			  </div>
			  <div class="radio">
				<label class="checkbox">
				  <input <?=$isBadminton?> type="checkbox" name="hobbies[]" value="3"> Badminton
				</label>
			  </div>
			  <div class="radio">
				<label class="checkbox">
				  <input <?=$isChess?> type="checkbox" name="hobbies[]" value="4"> Chess
				</label>			  
			  </div>  
		</div>
		<div class="form-group ">
		  <label class="control-label" >Gender</label>
		  <div class="radio">
			<label>
			  <input <?=$isMale?> type="radio" name="gender" value="m" >Male
			</label>
		  </div>
		  <div class="radio">
			<label>
			  <input <?=$isFemale?> type="radio" name="gender" value="f">Female
			</label>
		  </div>
		</div>

		<div class="form-group ">
		  <label class="control-label" >Avatar</label>
		  <input type="file" class="form-control" name="avatar">
		  <img height="90" width="120" src="<?="./uploads/".$user['avatar']?>">
		</div>

		<div class="form-group ">
		  <button type="Update" class="btn btn-warning btn-lg">Update</button>
		</div>
		
	  </form>
	  </div>
<?php require_once('./includes/footer.php'); ?>
