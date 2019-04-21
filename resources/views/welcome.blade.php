@extends('layouts.app')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
@endsection
@section('title', 'Home')

@section('content')
<section class="hero">
  <div class="hero-body">
    <div class="container hero-wrapper">
      <div class="container">
       <div class="columns">
        <div class="column is-two-thirds">
         <h2 class="title animated slideInUp fast has-text-black-bis has-text-weight-normal is-size-1-tablet is-size-2-mobile">I'm Roman Sorin,</h2><h1 class="title animated slideInUp fast has-text-black-bis has-text-weight-bold is-size-1-tablet is-size-2-mobile">a software developer.</h1>
       </div>
     </div>
     <div class="columns">
      <div class="column is-two-thirds">
       <h2 class="subtitle animated fadeInUp fast has-text-black-ter is-size-4 is-size-5-mobile" id="description">I design and build mobile and web applications for startups, businesses, and entrepreneurs. As a passionate and detail-oriented remote developer, I strive to continuously improve my qualifications and increase outreach through UI & UX research, data analysis, and full-stack development.
       </h2>
     </div>
   </div>
 </div>
</div>
</div>
</section>
<section class="section projects">
  <div class="container">
    <h1 class="title has-text-centered is-size-2 has-text-weight-bold has-text-dark animated fadeIn">My Recent Work</h1>
    <h2 class="subtitle has-text-centered has-text-weight-light is-size-4 has-text-black animated fadeIn">A few design and development projects. (COMING SOON)</h2>
    <div class="project-grid">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child box project-thumbnail-box">
            <figure class="image">
              <img class="project-thumbnail" src="https://images.pexels.com/photos/2120101/pexels-photo-2120101.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
            </figure>
          </div>
        </div>
        <div class="tile is-parent">
          <div class="tile is-child box project-thumbnail-box">
            <figure class="image">
              <img class="project-thumbnail" src="https://images.pexels.com/photos/1404918/pexels-photo-1404918.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
            </figure>
          </div>
        </div>
        <div class="tile is-parent">
          <div class="tile is-child box project-thumbnail-box">
            <figure class="image">
              <img class="project-thumbnail" src="https://images.pexels.com/photos/2096611/pexels-photo-2096611.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
            </figure>
          </div>
        </div>
      </div>
    </div>
    <div class="columns is-mobile is-centered">
      <div class="column is-half has-text-centered">
        <a href="/works" class="button is-link" role="button">View</a>
     </div>
   </div>
 </div>
</section>
@endsection