$(document).ready(function(){
	$("#frm_login").submit(function(e){
		e.preventDefault();
		var email=$("#email").val();
		var password=$("#password").val();
		loginRequest(email,password);
	});
});

function showLoader(){
	$("#errors").hide();
	$("#loader").show();
}
function hideLoader(){
	$("#loader").hide();
}

function showError(msg){
	hideLoader();
	$("#errors").show();
	$("#errors").html(msg);
}
function loginRequest(email,password){
	var url="login";
	showLoader();
	$.post(url,{
		email:email,
		password:password
	},function(response){
		hideLoader();
		if(response.match("200")){
			window.location="dashboard";
		}else{
			showError(response);
		}
	});
}