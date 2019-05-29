@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-multiline is-mobile is-centered">
            <div class="column is-full has-text-centered">
                <h1 class="title has-text-weight-bold is-size-1">Contact Me</h1>
            </div>
            <div class="column is-full has-text-centered">
                <h2 class="subtitle has-text-weight-normal is-size-3">Fill out the form and we'll be in touch.</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box" id="contact-form">
            <form action="/contact" method="POST">
                @csrf
                <div class="field">
                    <label class="label" for="name">Name</label>
                    <div class="control">
                        <input name="name" class="input" type="text" placeholder="Your name">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="email">Email</label>
                    <div class="control">
                        <input name="email" class="input" type="email" placeholder="you@example.com">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="subject">Subject</label>
                    <div class="control">
                        <input class="input" type="text" name="subject" placeholder="Hey!">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="user_message">Message</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Your message here..." name="user_message"></textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
