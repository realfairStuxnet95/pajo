 <?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/pajo/main/App/Views/Utils/auth.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/pajo/main/class_loader.php';
 error_reporting(0);
 $system_error="System Error Please contact System Administrators.";
 if($_FILES['file']['name'] != '')  
 { 
 	  $tmp=explode(".", $_FILES['file']['name']);
      $extension = end($tmp);  
      $allowed_type = array("jpg", "jpeg", "png", "gif","PNG");  
      if(in_array($extension, $allowed_type))  
      {
      	   //EXTRACT OTHER DATA FROM FORM
      	   $category_name=$function->sanitize($_POST['category_name']);
           $unit_price=$function->sanitize($_POST['unit_price']);
           $new_name = rand() . "." . $extension;
           $path = $_SERVER['DOCUMENT_ROOT']."/pajo/main/assets/images/categories/" . $new_name;
             if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
             {  
             	//save into database
             	$status=$item->save_category($category_name,$unit_price,$new_name);
             	if($status){
             		echo "200";
             	}else{
             		echo "403";
             	}
             }else{
              echo "error while Uploading image Please contact system Administrators";
             }
      }  
      else  
      {  
           echo '<script>alert("Invalid File Formate")</script>';  
      }  
 }else{
  if(isset($_POST['names']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])){
    //grab submitted data
    $names=$function->sanitize($_POST['names']);
    $email=$function->sanitize($_POST['email']);
    $phone=$function->sanitize($_POST['phone']);
    $category=$function->sanitize($_POST['category']);
    $gender=$function->sanitize($_POST['gender']);
    $password=$function->sanitize($_POST['password']);
    $cpassword=$function->sanitize($_POST['cpassword']);
    //validate inputs
    if(strlen($names)>=3 && $function->isValidEmail($email)){
      if($function->validate_phone($phone)){
        if(!empty($category) && !empty($gender)){
          if(strlen($password)>=6){
            if($password == $cpassword){
              //check if email is not registered
              $check_mail=$user->check_user_email($email);
              if(!$check_mail){
                //check if phone is not registered
                $check_phone=$user->check_user_phone($phone);
                if(!$check_phone){
                  //save user to database
                  $save_status=$user->save_user($names,$email,$phone,$password,$category,$gender);
                  if($save_status){
                    echo "200";
                  }else{
                    echo "System Error Please contact System Administrators.";
                  }
                }else{
                  echo "That Phone Number is already registered.";
                }
              }else{
                echo "That Email is Already Registered.";
              }
            }else{
              echo "Password Entered do not match.";
            }
          }else{
            echo "Password must be atleast 6 Characters";
          }
        }else{
          echo "Please Select Both User Category And Gender.";
        }
      }else{
        echo "Please Enter valid Phone Format";
      }
    }else{
      echo "Please check Names and Email Submitted.";
    }
  }elseif(isset($_POST['input'])){
    $input=$_POST['input'];
    if(is_array($input)){
      //grad action
      $action=$function->sanitize($input[0]);
      if($action=="remove_user"){
        //grab user id.
        $user_id=$function->sanitize($input[1]);
        $check_id=$user->check_user_id($user_id);
        if($check_id){
          //remove use
          $status=$user->remove_user($user_id);
          if($status){
            echo "200";
          }else{
            echo "Something Went wrong Please contact your system Administrators.";
          }
        }else{
          echo "That User do not exists";
        }
      }elseif($action=='add_stock'){
        //grab inputs
        $product_id=$function->sanitize($input[1]);
        $quantity=$function->sanitize($input[2]);
        $save_status=$stock->save_stock($product_id,$quantity);
        if($save_status){
          //prepare log
          $product_name=$util->field_query(Tables::items_categories(),'category_id',$product_id,'name');
          $activity=$_SESSION['user_names'].' has added a new '.$product_name.' to stock with quantity '.$quantity;
          $current_date=date("Y/m/d");
          $user_id=$_SESSION['user_id'];
          $log_status=$stock->save_inventory_log($current_date,$activity,$user_id);
          if($log_status){
            echo "200";
          }else{
            echo $system_error;
          }
        }else{
          echo $system_error;
        }
      }elseif($action=="save_supplier"){
        //grab inputs
        $names=$function->sanitize($input[1]);
        $email=$function->sanitize($input[2]);
        $phone=$function->sanitize($input[3]);
        $tin=$function->sanitize($input[4]);
        $address=$function->sanitize($input[5]);

        if(strlen($names)>=3 && $function->isValidEmail($email)){
          if(strlen($phone)>=9){
            if(!empty($tin)){
              //save supplier
              $save_status=$user->save_supplier($names,$email,$phone,$tin,$address);
              if($save_status){
                echo "200";
              }else{
                echo $system_error;
              }
            }else{
              echo "TIN Number required.";
            }
          }else{
            echo "Invalid Phone Format";
          }
        }else{
          echo "Please check Supplier Email or Names";
        }
      }
      else{
        echo "Please specify Action";
      }
    }else{
      echo "Invalid Data Format Submitted";
    }
  }
  else{
    echo "Please Check Submitted data.";
  }
 }
 ?>