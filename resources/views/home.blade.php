@extends('layouts.main')

@section('container')
<section id="corousel">
    <img src="assets\robot_prev_ui.png" class="img-fluid robot-img" alt="...">
    <div id="carouselExampleCaptions" class="carousel slide corosel-suggested" data-bs-ride="carousel" data-bs-interval="2000" data-bs-pause="hover">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://preview.colorlib.com/theme/bootstrap/carousel-09/images/xslider-2.jpg.pagespeed.ic.af85SY7OdF.webp" class="img-fluid suggested-img mx-auto d-block" alt="...">
          <div class="carousel-caption d-none d-md-block mx-auto">
            <h5 class="suggested-captions">Software Name</h5>
            <p class="suggested-captions">Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://preview.colorlib.com/theme/bootstrap/carousel-09/images/xslider-1.jpg.pagespeed.ic.YYQPZhG5AY.webp" class="img-fluid suggested-img mx-auto d-block" alt="...">
          <div class="carousel-caption d-none d-md-block mx-auto">
            <h5 class="suggested-captions">Software Name</h5>
            <p class="suggested-captions">Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://preview.colorlib.com/theme/bootstrap/carousel-09/images/xslider-3.jpg.pagespeed.ic.1VOMVz-e84.webp" class="img-fluid suggested-img mx-auto d-block" alt="...">
          <div class="carousel-caption d-none d-md-block mx-auto">
            <h5 class="suggested-captions">Software Name</h5>
            <p class="suggested-captions">Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section id="features ">
    <div class="features-text">
      <span class="">Features</span>
    </div>
    <div class="d-flex justify-content-center menu-space">
      <div class="item text-center mx-5 my-3">
        <div class="btn-icon">
          <a class="btn btn-colored" href="#" role="button"><i class="fa-solid fa-boxes-stacked fa-4x mx-auto position-absolute top-50 start-50 translate-middle"></i></a>
        </div>
        <div class="btn-icon-caption">
          <span class="icon-caption">Inventory List Page</span>
        </div>
      </div>
      <div class="item text-center mx-5 my-3">
        <div class="btn-icon">
          <a class="btn btn-colored" href="#" role="button"><i class="fa-solid fa-window-restore fa-4x mx-auto position-absolute top-50 start-50 translate-middle"></i></a>
        </div>
        <div class="btn-icon-caption">
          <span class="icon-caption">Input Project</span>
        </div>
      </div>
      <div class="item text-center mx-5 my-3">
        <div class="btn-icon">
          <a class="btn btn-colored" href="#" role="button"><i class="fa-solid fa-chair fa-4x mx-auto position-absolute top-50 start-50 translate-middle"></i></a>
        </div>
        <div class="btn-icon-caption">
          <span class="icon-caption">Input Borrow</span>
        </div>
      </div>
      <div class="item text-center mx-5 my-3">
        <div class="btn-icon">
          <a class="btn btn-colored" href="#" role="button"><i class="fa-solid fa-list-check fa-4x mx-auto position-absolute top-50 start-50 translate-middle"></i></a>
        </div>
        <div class="btn-icon-caption">
          <span class="icon-caption">Borrowing Menu</span>
        </div>
      </div>
    </div>
  </section>
  <section id="footer">
    <div class="foot text-center p-4">
      © 2022 Copyright:
      <span>IMS-2022</span>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="js\home-page.js" charset="utf-8"></script>
  
@endsection