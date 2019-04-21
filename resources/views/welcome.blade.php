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
      					<h1 class="title animated slideInUp fast has-text-black-bis has-text-weight-bold is-size-1-tablet is-size-2-mobile">Hey there! I'm a full-stack<br>web developer, photographer,<br>and violinist.</h1>
      				</div>
      			</div>
      			<div class="columns">
      				<div class="column is-two-thirds">
      					<h2 class="subtitle animated fadeInUp fast has-text-black-ter is-size-4">As you can see, this site is currently in progress.<br>Come back later for the full release, or email me with any questions: <a href="mailto:roman@romansorin.com">roman@romansorin.com</a></h2>
      				</div>
      			</div>
    		</div>
  		</div>
  	</div>
	</section>
@endsection