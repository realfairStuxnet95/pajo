$(document).ready(function(){
	var input=[];
	$("#frm_add_user").submit(function(e){
		e.preventDefault();
		var names=$("#names").val();
		var email=$("#email").val();
		var phone=$("#phone").val();
		var gender=$("#gender").val();
		var category=$("#category").val();
		var password=$("#password").val();
		var cpassword=$("#cpassword").val();

		if(password.match(cpassword)){
			if(password.length>=6){
				if(ValidateEmail(email)){
					//save information
					input[0]="save_user";
					input[1]=names;
					input[2]=email;
					input[3]=phone;
					input[4]=gender;
					input[5]=category;
					input[6]=password;
					saveData(input,"users");
				}else{
					display_error("Invalid E-mail Format.Please change");
				}
			}else{
				display_error("Password must be atleast 6 characters");
			}
		}else{
			display_error("Password Do not match");
		}
	});
	function saveData(input,redirectUrl){
		var url="save_data";
		$.post(url,{
			input:input
		},function(response){
			if(response.match("200")){
				//alert(response);
				window.location=redirectUrl;
			}else{
				alert(response);
			}
		});
	}
	function display_error(msg){
		alert(msg);
	}
	function ValidateEmail(mail) 
	{
	 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
	  {
	    return (true)
	  }else{
	  	 return (false)
	  }
	   
	}
});