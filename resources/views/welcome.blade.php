@extends('layouts.app')
@section('description')
I'm Roman Sorin, a software developer who builds applications for businesses and clients of all fields.
@endsection
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
@endsection

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
<section class="section is-medium">
    <div class="container">
        <div class="columns">
            <div class="column is-one-quarter">
                <h1 class="has-text-weight-semibold has-text-black-bis is-size-1">Services</h1>
            </div>
            <div class="column">
                <ul class="is-size-4 has-text-black-ter">
                    <li class="has-text-weight-semibold has-text-black-bis is-size-3"
                        style="color: #5546f2 !important; padding-bottom: 15px;">
                        {{-- Later, put these inline styles into stylesheet --}}
                        Design</li>
                    <li>Mockups</li>
                    <li>User Experience</li>
                    <li>Interface Design</li>
                </ul>
            </div>
            <div class="column">
                <ul class="is-size-4 has-text-black-ter">
                    <li class="has-text-weight-semibold has-text-black-bis is-size-3"
                        style="color: #5546f2 !important; padding-bottom: 15px;">
                        Development</li>
                    <li>Prototypes</li>
                    <li>Websites</li>
                    <li>Mobile/Web Applications</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section is-medium has-background-black-bis">
    <div class="container">
        <div class="columns">
            <div class="column is-one-quarter has-text-white">
                <h1 class="has-text-weight-semibold is-size-1">Values</h1>
            </div>
            <div class="column has-text-white">
                <div class="columns is-multiline" id="values-section-content">
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">Filler text, don't worry.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">Give me some time to think of
                            good things to say, so I'm just going to put some basic filler text in here. Cool, right?
                        </p>
                    </div>
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">Portfolio in progress.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">There's a good amount of features
                            and content I want to add to my portfolio but need some time to develop. Want it to be good,
                            ya know?</p>
                    </div>
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">Simple.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">I like simplicity and minimalism.
                            That's all I have to say about that.
                        </p>
                    </div>
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">Okay. More filler text.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">Still need a bit of time to write
                            up some expressive values, so don't mind this section.
                        </p>
                    </div>
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">No, seriously. Hold on.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">I don't want to release my
                            portfolio without content and looking great, but I also don't want to show a 503 error to
                            every single person who is remotely interested in my work.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--
<section class="section has-text-centered">
    <div class="container">
        <h1 class="has-text-black-ter has-text-weight-semibold is-size-1">Testimonials</h1>
    </div>
</section>--}}
<section class="section has-text-centered has-background-accent-main" id="cta-section">
    <div class="container">
        <h1 class="has-text-white has-text-weight-semibold is-size-1">Ready to get started?</h1>
        <h2 class="has-text-white has-text-weight-light is-size-3">Let's turn your ideas into reality.</h2>
        <div class="columns has-text-centered" id="cta-a-column">
            <div class="column">
                <a href="/contact" class="has-text-weight-semibold is-size-5 cta-a has-text-black-bis">Message me</a>
            </div>
        </div>
    </div>
</section>
@endsection
