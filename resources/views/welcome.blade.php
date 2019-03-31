@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<section class="hero">
  		<div class="hero-body">
  					<div class="container hero-wrapper">
    		<div class="container">
    			<div class="columns">
    				<div class="column is-three-fifths">
      					<h1 class="title has-text-black-bis is-size-1-tablet is-size-2-mobile">Hey there! I'm a full-stack<br>web developer, photographer,<br>and violinist.</h1>
      				</div>
      			</div>
      			<div class="columns">
      				<div class="column is-three-fifths">
      					<h2 class="subtitle has-text-black-ter is-size-4">As you can see, this site is currently in progress.<br>Come back later for the full release, or email me with any questions: <a href="mailto:roman@romansorin.com">roman@romansorin.com</a></h2>
      				</div>
      			</div>
      			{{-- <div class="columns">
      				<div class="column">
      					<button class="button is-primary is-rounded">Button</button>
      				</div>
      				<div class="column">
      					<button class="button is-white is-rounded">More</button>
      				</div>
      			</div> --}}
    		</div>
  		</div>
  	</div>
	</section>
@endsection