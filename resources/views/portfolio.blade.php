@extends('layout')
@section('title','Portfolio | MJ Pava')
@section('content')
<!-- ======= Portfolio Section ======= -->
<section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
              Pushing the boundaries of what's possible in the digital realm.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="card">
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/template-assets/img/img-proyecto(1).jpg" class="d-block w-100" alt="proyecto1">
      </div>
      <div class="carousel-item">
        <img src="/template-assets/img/img_proyecto1.jpg" class="d-block w-100" alt="proyecto1">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="card-body">
    <h5 class="card-title">Iron Rainbow</h5>
    <p class="card-text">2D game development with Unity.</p>
    <a href="https://mjpava.itch.io/ironrainbow" class="btn btn-primary" target="blank">View details</a>
  </div>
</div>
    </section><!-- End Portfolio Section -->
@stop


