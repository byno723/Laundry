<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title><?=$title;?></title>
  </head>
<style>
    
    #particles-js{
        background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.5)),url(<?= base_url(); ?>assets/img/video-bg.jpg);
        width: 100%;
  height: auto;
  background-repeat: no-repeat;
 
  -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
    }
</style>


  <body>
      <div id="particles-js">
      <nav class="navbar navbar-expand-lg  navbar-primary container mb-3 ">
      <a class="navbar-brand" href="<?=base_url("home");?>" style="font-size:30px;color:white">
    <img src="<?= base_url(); ?>assets/img/s1.png" width="50" height="50" class="d-inline-block align-top" alt="">
   Laundrymous
  </a>
  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url("home");?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fitur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Harga</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="<?=base_url("auth");?>">Dashboard</a>
</li>
    </ul>
  </div>
</nav>


