<?php
$con = mysqli_connect("localhost","root","","kantinpakdin");
$menu= mysqli_query($con,"SELECT * FROM pesanan");


 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
        h1{
            text-align: center;
        }
    </style>
<body>
<h1 >DAFTAR PESANAN</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Pesanan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php $i=1; ?>
    <?php foreach($menu as $row): ?>
      <th scope="row"><?= $i++ ?></th>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["PESANAN"]; ?></td>
      <td>
	  <button>
	  <img src="image/cekliss.png"style="height: 32px">
	  </button>
	  </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>



    

</html>