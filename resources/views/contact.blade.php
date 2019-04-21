@extends('layouts.app_alternative')
@section('title', 'Contact')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns is-multiline is-mobile is-centered">
  			<div class="column is-full has-text-centered">
			    <h1 class="title is-size-1">Contact Me</h1>
		  	</div>
		  	<div class="column is-full has-text-centered">
			    <h2 class="subtitle">Fill out the form and we'll be in touch.</h2>
		  	</div>
		</div>
	</div>
	<div class="box" id="contact-form">
		<form action="/contact" method="POST">
			@csrf
			<div class="field">
				<label class="label">Name</label>
				<div class="control">
					<input class="input" type="text" placeholder="Text input">
				</div>
			</div>

			<div class="field">
				<label class="label">Email</label>
				<div class="control">
					<input class="input" type="email" placeholder="Email input" value="mail@example.com">
				</div>
			</div>

			<div class="field">
				<label class="label">Subject</label>
				<div class="control">
					<input class="input" type="text" placeholder="Text input" value="bulma">
				</div>
			</div>

			<div class="field">
				<label class="label">Message</label>
				<div class="control">
					<textarea class="textarea" placeholder="Textarea"></textarea>
				</div>
			</div>

			<div class="field">
				<div class="control">
					<button class="button is-link">Submit</button>
				</div>
			</div>
	</form>
	</div>
</section>
@endsection