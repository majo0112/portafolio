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
                Explore my work and featured projects.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
                  <div id="proyecto-1" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#proyecto-1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#proyecto-1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                  <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="overlay"></div>
                  <img src="/template-assets/img/img_proyecto1.jpg" class="d-block w-100" alt="proyecto1">
                </div>
              <div class="carousel-item">
                <div class="overlay"></div>
                <img src="/template-assets/img/img-proyecto(1).jpg" class="d-block w-100" alt="proyecto1">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#proyecto-1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#proyecto-1" data-bs-slide="next">
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
        </div>
        <div class="col-sm-6 mb-5">
          
        <div class="card">
                  <div id="proyecto-2" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#proyecto-2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#proyecto-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="overlay"></div>
                        <img src="/template-assets/img/dashboard-1.jpg" class="d-block w-80" alt="proyecto2">
                    </div>
                    <div class="carousel-item">
                      <div class="overlay"></div>
                      <img src="/template-assets/img/dashboard-2.jpg" class="d-block w-80" alt="proyecto2">
                    </div>
                  </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#proyecto-2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#proyecto-2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Dashboard</h5>
            <p class="card-text">Attendance app for students.</p>
            <a href="https://github.com/majo0112/Admin-sb-2" class="btn btn-primary" target="blank">View details</a>
          </div>

        </div>
      </div>

        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
                    <div id="proyecto-3" class="carousel slide">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#proyecto-3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#proyecto-3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      </div>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="overlay"></div>
                      <img src="/template-assets/img/cronometro.jpeg" class="d-block w-100" alt="proyecto3">
                  </div>
                  <div class="carousel-item">
                    <div class="overlay"></div>
                    <img src="/template-assets/img/citas.jpeg" class="d-block w-100" alt="proyecto3">
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#proyecto-3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#proyecto-3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title">JavaScript Projects</h5>
              <p class="card-text">DOM manipulation projects based on a FreeCodeCamp course.</p>
              <a href="https://github.com/majo0112/Proyectos-JavaScript" class="btn btn-primary" target="blank">View details</a>
            </div>
          </div>
          </div>
          <div class="col-sm-6">
            
          <div class="card">
                    <div id="proyecto-4" class="carousel slide">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#proyecto-4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#proyecto-4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      </div>
                    <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="overlay"></div>
                    <img src="/template-assets/img/blog.jpeg" class="d-block w-100" alt="proyecto1">
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
              <h5 class="card-title">Blog</h5>
              <p class="card-text">Post creation and management platform.</p>
              <a href="https://github.com/majo0112/blog-de-cine" class="btn btn-primary" target="blank">View details</a>
            </div>

          </div>
        </div>
        </div>

</section><!-- End Portfolio Section -->
@stop


