<?php
include "inc2.php";
if(isset($_SESSION['userId'])): 
  endif;
$validation = new validation;
$queries    = new queries;
$sendEmail  = new sendEmail;

if(isset($_POST['register'])){

  $validation->validate('fullName', 'full name', 'required');
  $validation->validate('email', 'Email', 'uniqueEmail|users|required');
  $validation->validate('password', 'Password', 'required|min_len|6');

  if($validation->run()){

     $fullName = $validation->input('fullName');
     $email    = $validation->input('email');
     $password = $validation->input('password');
     $password =$password;
     $code     = rand();
     $code     = password_hash($code, PASSWORD_DEFAULT);
     $url      = "http://" . $_SERVER['SERVER_NAME'] . "/project/confirm1.php?confirmation=" . $code;
     $status   = 0;
     if($queries->query("INSERT INTO users (fullName, email, password, code, status) VALUES (?,?,?,?,?) ", [$fullName, $email, $password, $code, $status])){

      if($sendEmail->send($fullName, $email, $url)){
        
        $_SESSION['accountCreated'] = "You have succesfully buyed product coded as " . $password;
        header("location: login.php");

      }

     }
    
     
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buying Procedure</title>
    <?php include "components/styles.php"; ?>
</head>
<body>
  <?php include "components/nav.php"; ?> 
  <div class="container">
  <div class="row mt-5">
  <div class="col-md-5">
  <div class="card">
  <div class="card-body">
  <form action="" method="POST">
  <div class="form-group">
  <h3>Registration Form</h3>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
  <input type="number" name="fullName" class="form-control" placeholder="Enter mobile Number" value="<?php if($validation->input('fullName')): echo $validation->input('fullName'); endif; ?>">
  <div class="error">
    <?php if(!empty($validation->errors['fullName'])): echo $validation->errors['fullName']; endif; ?>
  </div>
  </div>
  <!-- Close form-group -->

  <div class="form-group">
  <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php if($validation->input('email')): echo $validation->input('email'); endif; ?>" >
  <div class="error">
  <?php if(!empty($validation->errors['email'])): echo $validation->errors['email']; endif; ?>
  </div>
  </div>
  <!-- Close form-group -->

  <div class="form-group">
  <input type="password" name="password" class="form-control" placeholder="Enter The Product Code" value="<?php if($validation->input('passwors')): echo $validation->input('password'); endif; ?>">
  <div class="error">
  <?php if(!empty($validation->errors['password'])): echo $validation->errors['password']; endif; ?>
  </div>
  </div>
  <!-- Close form-group -->

  <div class="form-group">
  <input type="submit" name="register" class="btn btn-info" value="Buy &rarr;" style="background: #7B68EE!important;">
  </div>
  <!-- Close form-group -->
  </form>
  <!-- Close form -->
  </div>
  <!-- Close card-body -->
  </div>
  <!-- Close card -->
  </div>
  <!-- Close col-md-5 -->
  <div class="col-md-5 text-white ml-auto">
   <h1>Please Enter The details In The Form To Buy</h1><hr>
    <h4>
   <p>DigitalBuyNepal is a Shopping Website created by the students of Kalika Manavgyan Secondary School. It purpose is to provide an effective way to do online shopping. For any inquiries Contact the hepline i.e. 9846761072 or try contacting us in gmail help.nepcart@gmail.com<br><br>
   Please Make Sure to support us by buying and apprecating our work</p></h4>
  </div>
  <!-- Close col-md-5 -->
  </div>
  <!-- Close row -->
  </div>
   <!-- Close container -->
</body>
</html>