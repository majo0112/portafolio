@extends('layout')
@section('content') 
 <!-- ======= Home Section ======= -->
 <div id="hero" class="hero route bg-image" style="background-image: url(/DevFolio/assets/img/img-home.png)">
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="hero-title mb-4">Hey, I am</h1>
          <h1 class="hero-title mb-4">María</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Engineer, Freelancer"></span></p>
          <a class="btn btn-secondary" href="{{ route('about') }}" role="button">Get to know me</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Home Section --> 
@stop

