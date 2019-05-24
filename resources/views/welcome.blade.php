@extends('layouts.app')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
@endsection
@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="hero-body">
        <div class="container hero-wrapper">
            <div class="columns">
                <div class="column is-two-thirds">
                    <h2
                        class="title animated slideInUp fast has-text-black-bis has-text-weight-normal is-size-1-tablet is-size-2-mobile">
                        I'm Roman Sorin,</h2>
                    <h1
                        class="title animated slideInUp fast has-text-black-bis has-text-weight-bold is-size-1-tablet is-size-2-mobile">
                        a software developer.</h1>
                </div>
            </div>
            <div class="columns">
                <div class="column is-two-thirds">
                    <h2 class="subtitle animated fadeInUp fast has-text-black-ter is-size-4 is-size-5-mobile"
                        id="description">I
                        design and build mobile and web applications for startups, businesses, and entrepreneurs. As
                        a passionate
                        and detail-oriented remote developer, I strive to continuously improve my qualifications and
                        increase
                        outreach through UI & UX research, data analysis, and full-stack development.
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-two-thirds">
                    <div class="field is-grouped">
                        <p class="control">
                            <a href="/works" class="button button-cta is-rounded is-link animated fadeIn slow"
                                id="see-work-btn">See my work</a>
                        </p>
                        <p class="control">
                            <a class="button button-cta is-rounded is-white animated fadeIn slow" href="/about">Know
                                more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
