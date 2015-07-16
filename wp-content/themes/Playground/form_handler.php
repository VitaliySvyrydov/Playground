<?php 
echo '<pre>';
print_r($_POST);
echo '</pre>';
$name ='';
$email ='';
$subject ='';
$message ='';
$errors = array();
if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['subject'])){
    $subject = $_POST['subject'];
}
if(isset($_POST['text'])){
    $message = $_POST['text'];
}
if(empty($name) || empty($email)){
    echo "Fill fields!!!";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email";
}
if(strlen($name) < 3){
    echo " To Short name!!!";
}
if(strlen($name) > 13){
    echo " To Long name!!!";
}
if(isset($errors[0])){
    //redirect to form
}else{
    // redirect to thanks page
}


        
?> 