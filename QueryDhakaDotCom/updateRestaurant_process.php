<?php 

// define variables and set to empty values
$name_error = $email_error = $id_error = $url_error = "";
$name = $email = $id = $message = $url = $success = "";

//form is submitted with POST method


if ($_SERVER["REQUEST_METHOD"] == "POST") {

     if (empty($_POST["id"])) {
    $id_error = "Serial No is required";
  } else {
    $id = test_input($_POST["id"]);
    
  }
 
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Address is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       
    }
  }

  

  if (empty($_POST["message"])) {
    $message="";
  } else {
    $message = test_input($_POST["message"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       
    }
  }
  
  



  
  
  if ($name_error == '' and $email_error == '' and $id_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }

      $con=mysqli_connect("127.0.0.1","root","","testapp");

      

      $query="UPDATE restaurantlist SET Name='$name',Address='$email', Cuisine='$message' where Serial='$id'";

      $result= mysqli_query($con,$query);

          $success = "Updated!";
          $name = $email = $id = $message = $url = '';
      
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}