jQuery(document).ready(function(){
/*************************************/	
  $("#registerFormId").validate({
    rules: {
		/***
		 * rules for validation
		 * */
		 uname:{
			 required : true,
			 minlength:5
		 }
	},
    messages: {		
		/***
		 * display message for validation
		 * */
		uname:{
			 required : "Name should not be blank.",
			 minlength : $.validator.format("Name should be {0} character long")
		 }
	}
  });
	/*validate function*/
/*************************************/	
});
