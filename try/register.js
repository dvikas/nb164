
jQuery(document).ready(function(){
/*************************************/	
  $("#registerFormId").validate({
    rules: {
		 uname:{
			 required : true,
			 minlength:5,
			 lettersonly:true
		 },
		 email:{
			 required : true,
			 email:true
		 },
		 password:{
			 required : true,
			 minlength:5
		 },
		 cpassword:{
			 required : true,
			 equalTo : '#passwordId'
		 },
		 gender:{
			 required : true
		 },
		 dob:{
			 required : true,
			 dateISO : true
		 },	
		 address:{
			 required : true,
			 minWords:5
		 },
		 country_id:{
			 required : true
		 },		
		 'lang[]':{
			 required : true,
			 minlength:2
		 },
		 'hobbies[]':{
			 required : true,
			 minlength:2
		 },
		 'avatar':{
			 required : true,
			 accept : 'jpg,png,jpeg,gif,bmp'
		 },
	},
    messages: {
		uname:{
			 required : "Name should not be blank.",
			 minlength : $.validator.format("Name should be {0} character long")
		 },
		 email:{
			 required : "Email should not be blank",
			 email:"Please enter valid email id"
		 },
		 	password:{
			 required : "Password should not be blank.",
			 minlength : $.validator.format("Password should be {0} character long")
		 },
		 	cpassword:{
			 required : "Confirm Password should not be blank.",
			 equalTo : 'Please enter same password'
		 },
		 gender:{
			 required : "Please select gender"
		 },
		dob:{
			 required : "Please enter DOB",
			 dateISO : "Format YYYY-MM-DD"
		 },
		address:{
			 required : "Address should not be blank.",
			 minWords : $.validator.format("Address should be {0} character long")
		 },	
		 country_id:{
			 required : "Please select any country",
		 },		 
		 'lang[]':{
			 required : "Please select any lang",
			 minlength:$.validator.format("Please select any {0} lang")
		 },
		 'hobbies[]':{
			 required : "Please select any Hobbies",
			 minlength:$.validator.format("Please select any {0} Hobbies")
		 },		 
		'avatar':{
			 required : "Please upload avatar",
			 accept:$.validator.format("Please upload avatar with {0} extn. only")
		 },
	}
  });
	/*validate function*/
/*************************************/	
});
