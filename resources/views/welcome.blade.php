@extends('layouts.app')
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
                <div class="columns is-multiline">
                    {{-- Need to increase the padding between the columns, maybe a non-CSS solution? --}}
                    {{-- Also need to increase padding between titles and content --}}
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">UX is the sum of all things.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">There’s no style over
                            substance
                            here. I
                            bring together form and the function to create something that looks good and performs
                            brilliantly. Simple.</p>
                    </div>
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">Perfection doesn’t do a 9-­5.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">And neither do I. I’m not bound
                            to any time zones or tied to a desk. The project dictates where I need to be and who I need
                            to collaborate with. Essentially, I always go the extra mile.</p>
                    </div>
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">Clients. Curated.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">I take on a limited number of
                            projects at one time. This quality control means I can give each one exactly what it needs –
                            focus and time.</p>
                    </div>
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">Creator. Partner. Collaborator.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">Ideas are far from linear. As
                            designer and developer, I can spearhead, support or polish your project or product at any
                            stage it needs it.
                        </p>
                    </div>
                    <div class="column is-half">
                        <h6 class="has-text-weight-semibold is-size-3">Clean ­– In thinking, in style.</h6>
                        <p class="has-text-weight-light has-text-grey-light is-size-5">Simple, minimal and effective.
                            This is my mantra and method. Clean code, fuss-free interfaces and expert execution, design
                            as it should be.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section has-text-centered">
    <div class="container">
        <h1 class="has-text-black-ter has-text-weight-semibold is-size-1">Testimonials</h1>
    </div>
</section>
{{-- Has background color: #5546f2 --}}
<section class="section has-text-centered" style="background-color: #5546f2">
    <div class="container">
        {{-- Make this h1 a bit bigger --}}
        <h1 class="has-text-white has-text-weight-semibold is-size-1">Ready to get started?</h1>
        {{-- Increase padding by a bit --}}
        <h2 class="has-text-white has-text-weight-light is-size-3">Let's turn your ideas into reality.</h2>
        {{-- Increase the space between this h2 and the anchor --}}
        <div class="columns has-text-centered">
            <div class="column">
                <a href="/contact">
                    <p class="has-text-black-bis has-text-weight-semibold is-size-5">Message me</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
