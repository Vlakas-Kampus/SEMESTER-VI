<?php

include 'koneksi.php';
require 'functions.php';

// Menampilkan file film
$film = query("SELECT * FROM tb_video");
$film1 = query("SELECT * FROM tb_video WHERE genre='Action'");
$film2 = query("SELECT * FROM tb_video WHERE genre='Comedy'");
$film3 = query("SELECT * FROM tb_video WHERE genre='Romance'");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SFLIX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="ckin/dist/css/ckin.css">
</head>

<body>

  <div class="container">
    <h1>SFLIX - Tempat nonton film movie gratis!</h1>
    <hr>
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
      <li><a data-toggle="pill" href="#menu1">Action</a></li>
      <li><a data-toggle="pill" href="#menu2">Comedy</a></li>
      <li><a data-toggle="pill" href="#menu3">Romance</a></li>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h3>All Videos</h3>
        <?php foreach ($film as $data) : ?>
          <video poster="img/bg.jpg" src="files/<?= $data['judul_video'] ?>.mp4" data-overlay="1" data-title="<?= $data['judul_video'] ?>" data-color="#F47321"></video>
        <?php endforeach; ?>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h3>Action</h3>
        <?php foreach ($film1 as $data) : ?>
          <video poster="img/bg.jpg" src="files/<?= $data['judul_video'] ?>.mp4" data-overlay="1" data-title="<?= $data['judul_video'] ?>" data-color="#F47321"></video>
        <?php endforeach; ?>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h3>Comedy</h3>
        <?php foreach ($film2 as $data) : ?>
          <video poster="img/bg.jpg" src="files/<?= $data['judul_video'] ?>.mp4" data-overlay="1" data-title="<?= $data['judul_video'] ?>" data-color="#F47321"></video>
        <?php endforeach; ?>
      </div>
      <div id="menu3" class="tab-pane fade">
        <h3>Romance</h3>
        <?php foreach ($film3 as $data) : ?>
          <video poster="img/bg.jpg" src="files/<?= $data['judul_video'] ?>.mp4" data-overlay="1" data-title="<?= $data['judul_video'] ?>" data-color="#F47321"></video>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</body>
<script src="ckin/dist/js/ckin.js"></script>

</html>