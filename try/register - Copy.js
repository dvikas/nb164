jQuery(document).ready(function(){


// validate signup form on keyup and submit///////
  $("#signupForm").validate({
    rules: {
      uname: {
        required: true,
        minlength: 5,
        maxlength: 100
      },
      email: {
        required: true,
       // remote:'ajax/email.php',
        email: true
      },
      password: {
        required: true,
        strongPass: true,
        minlength: 6
      },
      cpassword: {
        required: true,
        equalTo: '#passwordId'
      },
      dob: {
        required: true
      },
      gender: {
        required: true
      },
      address: {
        required: true,
        minlength: 10
      },
      country_id: {
        required: true
      },
      'lang[]': {
        required: true,
        minlength: 2
      },
      'hobbies[]': {
        required: true,
        minlength: 2
      },
      'captcha': {
        required: true
      },
      'avatar': {
        required: true,
        accept: 'image/jpeg|image/png'
      }
    },
    messages: {
      uname: {
        required: "User name is required",
        minlength: "Name should be {0} character long"
      },
      email: {
        required: "Email is required",
        remote: "Email already exists",
        email: "Please enter valid email id"
      },
      password: {
        required: "Password is required",
        minlength: $.validator.format("Password should be {0} character long")
      },
      cpassword: {
        required: "Confirm Password is required",
        equalTo: 'Please enter same password again'
      },
      dob: {
        required: "Date of birth is required",
      },
      gender: {
        required: "Please select gender",
      },
      address: {
        required: "Address is required",
        minlength: ("Address should be {0} character long")
      },
      country_id: {
        required: "Please select country",
      },
      'lang[]': {
        required: "Please select some languages",
        minlength: ("Please select atleast {0} languages")
      },
      'hobbies[]': {
        required: "Please select some hobbies",
        minlength: ("Please select atleast {0} hobbies")
      },
      'captcha': {
        required: "Please enter security code."
      },
      'avatar': {
        required: "Please upload avatar",
    //    accept: $.validator.format("Please upload avatar with valid( {0} ) extn.")
      }
    }
  })
//////////////////////////////////////////////////////


})
