$(document).ready(function(){
  var input=[];
  var url="save_category";
	$("#file").on("change",function(){
		var file=document.getElementById("file").files[0];
		var name = document.getElementById("file").files[0].name;
		var ext = name.split('.').pop().toLowerCase();
	  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
	  {
      $("#file").val("");
	   alert("Invalid Image File");
	  }else{
	  var reader = new FileReader();
    reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('image_category');
      output.src = dataURL;
    };
    reader.readAsDataURL(file);
	  }

	});
	$("#frm_add_category").submit(function(e){
		e.preventDefault();
           $.ajax({  
                url:"save_category",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                //cache:false,  
                processData:false,  
                success:function(data)  
                { 
                	if(data.match("200")){
                		location.reload();
                	}else{
                		alert(data);
                	}     
                }  
           });
	});

  $("#frm_add_user").submit(function(e){
    e.preventDefault();
     $.ajax({  
          url:"save_category",  
          method:"POST",  
          data:new FormData(this),  
          contentType:false,  
          //cache:false,  
          processData:false,  
          success:function(data)  
          { 
            if(data.match("200")){
              window.location="users?status=success";
            }else{
              alert(data);
            }     
          }  
     });
  });
  $("#frm_add_supplier").submit(function(e){
    e.preventDefault();
    var supplier_names=$("#supplier_names").val();
    var supplier_email=$("#supplier_email").val();
    var supplier_phone=$("#supplier_phone").val();
    var tin=$("#tin").val();
    var address=$("#address").val();

    input[0]="save_supplier";
    input[1]=supplier_names;
    input[2]=supplier_email;
    input[3]=supplier_phone;
    input[4]=tin;
    input[5]=address;
    sendRequest(url,input,"suppliers?status=success");
  });
  $("#frm_create_invoice").submit(function(e){
    e.preventDefault();
    var names=$("#names").val();
    var inv_date=$("#inv_date").val();
    var product_id=$("#product_key").val();
    var unit_price=$("#unit_price").val();
    var amount_pay=$("#amount_pay").val();
    var quantity=$("#quantity").val();
    var rates=$("#rates").val();
    alert(quantity);
  });
  $("#product_key").change(function(){

  });
  $("#frm_add_stock").submit(function(e){
    e.preventDefault();
    var product_id=$("#product_id").val();
    var quantity=$("#quantity").val();
    input[0]="add_stock";
    input[1]=product_id;
    input[2]=quantity;
    sendRequest(url,input,"stock");
  });
  $("button.btn_delete_user").click(function(){
    var action=$(this).attr("action");
    input[0]="remove_user";
    input[1]=action;
    if(confirm("Do you really want to remove this User.No undone action available")){
      sendRequest(url,input,"users");
    }
    
  });
});
function sendRequest(url,input,redirectUrl){
  $.post(url,{
    input:input
  },function(response){
    if(response.match("200")){
      window.location=redirectUrl;
    }else{
      alert(response);
    }
  });
}