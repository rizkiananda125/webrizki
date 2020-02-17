<?php

include "header.php";

?>

<!-- Membuat Navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Fake News</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lapor</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bagian
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Nasional</a>
          <a class="dropdown-item" href="#">Internasional</a>
          <a class="dropdown-item" href="#">Nanggroe</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- membuat slider -->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <center><img src="html/gambar/fakenews.jpg" class="d-block w-50" alt="..."></center>
    </div>
    <div class="carousel-item">
      <center><img src="html/gambar/tabayyun.png" class="d-block w-50" alt="..."></center><
    </div>
  </div>
</div>

<!-- membuat table -->

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


<!-- membuat container -->
    <div class="container-fluid">

        <div class="row">
    
    </div>
        <div class="col-md-3">

        <h1> Haloo </h1>
    </div>

    <div class="col-md-3">

        <h1>Hai</h1>
    </div>

    <div class="col-md-3">

        <h1>Salam</h1>
    </div>

    <div class="col-md-3">

        <h1>Kenal</h1>
    </div>
</div>

<?php
  include "footer.php";

?>


