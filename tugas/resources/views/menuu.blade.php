<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>MENU</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>MENU</h1>
<div class="card-deck">
  <div class="card">
    <img src="image/nasigoreng1.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nasi Goreng Biasa</h5>
      <p class="card-text">Rp13.000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  <div class="card">
    <img src="image/nasgorkampung.jpg" style="height:385px;" class="card-img-top"alt="...">
    <div class="card-body">
      <h5 class="card-title">Nasi Goreng Kampung</h5>
      <p class="card-text">Rp15.000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  <div class="card">
    <img src="image/ayampen.jpg" style="height:385px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ayam Penyet</h5>
      <p class="card-text">Rp13.000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  
</div>

<div class="card-deck">
  <div class="card">
    <img src="image/mart.jpg" style="height:385px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Martabak Telur</h5>
      <p class="card-text">Rp14.000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  <div class="card">
    <img src="image/nasput.jpg" style="height:385px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nasi Putih</h5>
      <p class="card-text">Rp4.000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  <div class="card">
    <img src="image/airput.jpg" style="height:385px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Air Putih</h5>
      <p class="card-text">Rp2.000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  
</div>

<div class="card-deck">
  <div class="card">
    <img src="image/tehman.jpg" style="height:385px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Teh Manis Dingin</h5>
      <p class="card-text">Rp5.000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  <div class="card">
    <img src="image/tehhan.jpg" style="height:385px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Teh Manis Hangat</h5>
      <p class="card-text">Rp.4000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  <div class="card">
    <img src="image/kopi.jpeg" style="height:385px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kopi Pahit</h5>
      <p class="card-text">Rp5.000</p>
      <a href="#" class="btn btn-primary">PESAN</a>
    </div>
    <div class="card-footer">
    </div>
  </div>
  
</div>

<form action="/pesan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    </div>
      <div class="form-group">
      <label for="exampleFormControlTextarea1">PESAN DISINI</label>
      <input class="form-control form-control-lg" type="text" name="menu" >
    </div>
    <button type="submit" name="pesan" class="btn btn-primary btn-lg btn-block">PESAN SEKARANG</button>
  
  </form>


  
</div>
</body>
</html>