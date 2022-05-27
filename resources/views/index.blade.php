@extends('layouts.app')
@section('content')

<div class="slider" style="margin-top: -25px">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/slider/slider1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/slider/slider2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/slider/slider3.png" class="d-block w-100" alt="...">
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
</div>

<div class="container mt-5">
    <span>
        <h1>Garments</h1>
        <a href="#" class="float-right">View all</a>
    </span>

<div id="carouselExampleFade" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row">
            <div class="col-3">
            <img src="/product/garment1.jpg" class="img-thumbnail" alt="...">
            <p class="text-center card-footer" style="colour: #ccc;">Name of Product/RS1000</p>
             </div>
             <div class="col-3">
            <img src="/product/garment1.jpg" class="img-thumbnail" alt="...">
            <p class="text-center card-footer" style="colour: #ccc;">Name of Product/RS1000</p>
             </div>
             <div class="col-3">
            <img src="/product/garment1.jpg" class="img-thumbnail" alt="...">
            <p class="text-center card-footer" style="colour: #ccc;">Name of Product/RS1000</p>
             </div>
             <div class="col-3">
            <img src="/product/garment1.jpg" class="img-thumbnail" alt="...">
            <p class="text-center card-footer" style="colour: #ccc;">Name of Product/RS1000</p>
             </div>
         </div>
    </div>
    <div class="carousel-item">
    <div class="row">
            <div class="col-3">
            <img src="/product/garment2.jpg" class="img-thumbnail" alt="...">
            <p class="text-center card-footer" style="colour: #ccc;">Name of Product/RS1000</p>
             </div>
             <div class="col-3">
            <img src="/product/garment2.jpg" class="img-thumbnail" alt="...">
            <p class="text-center card-footer" style="colour: #ccc;">Name of Product/RS1000</p>
             </div>
             <div class="col-3">
            <img src="/product/garment2.jpg" class="img-thumbnail" alt="...">
            <p class="text-center card-footer" style="colour: #ccc;">Name of Product/RS1000</p>
             </div>
             <div class="col-3">
            <img src="/product/garment2.jpg" class="img-thumbnail" alt="...">
            <p class="text-center card-footer" style="colour: #ccc;">Name of Product/RS1000</p>
             </div>
         </div>
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

@endsection