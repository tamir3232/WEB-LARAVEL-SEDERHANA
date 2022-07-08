<?php




?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/registercss.css">
    
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="/registerr" method="POST">
      @csrf
      <div class="input-box">
        <input name="username" placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="password2" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" name="register" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1.0rem;">
        DAFTAR SEKARANG
      </button>
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login_user">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>