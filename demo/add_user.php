<?php require_once('./includes/header.php'); ?>
      <div id="page-wrapper">
	  
		<div class="col-lg-12">
			<h1>Dashboard <small>Statistics Overview</small></h1>
			<ol class="breadcrumb">
			<li ><i class="fa fa-dashboard"></i> Dashboard</li>
			  <li class="active">Add New User</li>
			</ol>
			<div class="alert alert-success alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-check fa-2x"></i>&nbsp;&nbsp;User Added successfully.	
			</div>
	  </div>
		  
	  <form role="form">
		<div class="form-group ">
		  <label class="control-label" for="inputSuccess1">Name</label>
		  <input type="text" class="form-control" id="inputSuccess1">
		</div>
		<div class="form-group ">
		  <label class="control-label" for="inputWarning1">Email</label>
		  <input type="text" class="form-control" id="inputWarning1">
		</div>
		<div class="form-group ">
		  <label class="control-label" for="inputError1">Password</label>
		  <input type="text" class="form-control" id="inputError1">
		</div>
		<div class="has-error">
		  <div class="radio">
			<label class="checkbox">
			  <input type="checkbox" id="checkboxError" value="option1">
			  Option one is this and that&mdash;be sure to include why it's great
			</label>
		  </div>
		</div>
		<div class="has-success">
		  <div class="radio">
			<label>
			  <input type="radio" name="optionsRadios" id="radiosSuccess1" value="option1" checked>
			  Option one is this and that&mdash;be sure to include why it's great
			</label>
		  </div>
		  <div class="radio">
			<label>
			  <input type="radio" name="optionsRadios" id="radiosSuccess2" value="option2">
			  Option two can be something else and selecting it will deselect option one
			</label>
		  </div>
		</div>
	  </form>
	  </div>
<?php require_once('./includes/footer.php'); ?>