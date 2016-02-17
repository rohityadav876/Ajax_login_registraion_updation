
$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            user_name: "please enter user name",
            password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            user_email: "please enter a valid email address",
			cpassword:{
						required: "please retype your password",
						equalTo: "password doesn't match !"
					  }
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'register-exc.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Registering you with our Saaslabs System...');
				},
				success :  function(data)
						   {						
								if(data=="Duplicate Email"){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
									window.setTimeout(function(){
										window.location.href = "login.php";
									}, 1000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 /* validation */
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            
            password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            user_email: "please enter a valid email address",
			cpassword:{
						required: "please retype your password",
						equalTo: "password doesn't match !"
					  }
       },
	   submitHandler: submitLogin	
       });  
	   /* validation */
	   
	   
	    /* form submit */
	   function submitLogin()
	   {		
				var data = $("#login-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'login-exc.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Login in with our system...');
				},
				success :  function(data)
						   {						
								if(data=="Login Failed !"){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Login Failed !!</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');
										
									});
																				
								}
								else if(data=="Login Successful !")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; You have login Successfully ! we are setting dashboard for you...');
									window.setTimeout(function(){
										window.location.href = "index.php";
									}, 1000);
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */

	   
	   
	   	 /* validation */
	 $("#update-form").validate({
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 3
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            
            user_name: "please enter user name",
            user_email: "please enter a valid email address"
			
       },
	   submitHandler: update	
       });  
	   /* validation */
	   
	   
	      
	    /* form submit */
	   function update()
	   {		
				var data = $("#update-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'update-exc.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					
					$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Updating');
				},
				success :  function(data)
						   {						
								if(data=="Email Does not Exist!"){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Email does not Exist in system!!</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Update');
										
									});
																				
								}
								else if(data=="updated")
								{
									
									
									$("#btn-submit").html('Detail has been updated.');
									
									setTimeout('$("#edit").modal("hide")',5000);
									$("#error").fadeIn(1500, function(){
											
									$("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-ok"></span> &nbsp; Information updated Successfully. Please Relogin with updated information.  </div>');	
									});
									
									
									setTimeout('$(".form-signin").fadeOut(500, function(){ $(".my").load("index.php"); }); ',3000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Update');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */

	   
	   
});