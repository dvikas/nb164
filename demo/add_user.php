<?php require_once('./includes/header.php'); ?>
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
	  </div>
		  
	  <form action="saveuser.php" method="post" enctype="multipart/form-data">
		<div class="form-group ">
		  <label class="control-label" >Name</label>
		  <input value="Zeev Suraski" type="text" class="form-control" name="uname">
		</div>
		<div class="form-group ">
		  <label class="control-label" >Email</label>
		  <input value="zeev@zend.com" type="text" class="form-control" name="email">
		</div>
		<div class="form-group ">
		  <label class="control-label" >Password</label>
		  <input value="1q1aq@1q1q" type="text" class="form-control" name="password">
		</div>		
		<div class="form-group ">
		  <label class="control-label" >Confirm Password</label>
		  <input value="1q1aq@1q1q" type="text" class="form-control" name="cpassword">
		</div>
		
		<div class="form-group ">
		  <label class="control-label" >Hobbies</label>
			  <div class="radio">
				<label class="checkbox">
				  <input checked type="checkbox" name="hobbies[]" value="1"> Cricket
				</label>
			  </div>
			  <div class="radio">
				<label class="checkbox">
				  <input checked type="checkbox" name="hobbies[]" value="2"> Hockey
				</label>
			  </div>
			  <div class="radio">
				<label class="checkbox">
				  <input type="checkbox" name="hobbies[]" value="3"> Badminton
				</label>
			  </div>
			  <div class="radio">
				<label class="checkbox">
				  <input checked type="checkbox" name="hobbies[]" value="4"> Chess
				</label>			  
			  </div>  
		</div>
		<div class="form-group ">
		  <label class="control-label" >Gender</label>
		  <div class="radio">
			<label>
			  <input type="radio" name="gender" value="m" >Male
			</label>
		  </div>
		  <div class="radio">
			<label>
			  <input type="radio" name="gender" value="f">Female
			</label>
		  </div>
		</div>

		<div class="form-group ">
		  <label class="control-label" >Avatar</label>
		  <input type="file" class="form-control" name="avatar">
		</div>

		<div class="form-group ">
		  <button type="submit" class="btn btn-success btn-lg">Submit</button>
		</div>
		
	  </form>
	  </div>
<?php require_once('./includes/footer.php'); ?>