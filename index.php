<?php

include "header.php";

?>

<!-- didalam header sudah ada syntaq pemanggilan boostrap
navbar-->

<!-- tag slider -->

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

<!-- tag table bootstrap -->

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

<!-- tag footer dari bootstrap -->
<?php
  include "footer.php";

?>


