@extends('layouts.app')
@section('title', 'Insights -')
@section('description')
Insights from Roman Sorin.
@endsection
@section('content')
<section class="hero" id="insights-hero">
    <div class="hero-body">
        <div class="container hero-wrapper">
            <div class="columns">
                <div class="column is-two-thirds">
                    <h1 class="title has-text-weight-bold is-size-1-tablet is-size-2-mobile">Insights</h1>
                </div>
            </div>
            <div class="columns">
                <div class="column is-two-thirds">
                    <h2 class="subtitle has-text-black-ter has-text-weight-normal is-size-4 is-size-5-mobile">
                        A subtitle for insights and stuff</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <insights-wrapper-component></insights-wrapper-component>
</section>
<section class="section is-medium has-background-black-bis has-text-centered is-hidden-desktop">
    <div class="container">
        <h1 class="has-text-white has-text-weight-semibold is-size-1">Like what you see?</h1>
        <h2 class="has-text-white has-text-weight-light is-size-3">Follow me on:</h2>
        <nav class="level is-mobile" id="insights-social-nav">
            <div class="level-item"></div>
            <div class="level-item has-text-centered">
                <a href="https://instagram.com/romansorinn"><i data-feather="instagram" class="icon is-medium"></i></a>
            </div>
            <div class="level-item has-text-centered">
                <a href="https://linkedin.com/in/romansorin"><i data-feather="linkedin" class="icon is-medium"></i></a>
            </div>
            <div class="level-item has-text-centered">
                <a href="https://twitter.com/romansorinn"><i data-feather="twitter" class="icon is-medium"></i></a>
            </div>
            <div class="level-item"></div>
        </nav>
    </div>
</section>
@endsection