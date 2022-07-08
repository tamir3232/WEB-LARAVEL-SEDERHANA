<?php

$con = mysqli_connect("localhost","root","","kantinpakdin") ;

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  
 $result = mysqli_query($con, "SELECT * FROM user WHERE 
  username = '$username'");
if(mysqli_num_rows($result) == 1){
  $row = mysqli_fetch_assoc($result);

  if(password_verify($password,$row["password"])){
    header("Location : home");
    exit;
  }

}



}

?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/logincss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <button type="submit" name="login" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1.0rem;">
        LOGIN
      </button>
        <div class="signup_link">
          Not a member? <a href="register">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
