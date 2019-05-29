@extends('layouts.app')
@section('title', 'About')

@section('content')
<section class="hero">
    <div class="hero-body">
        <div class="container hero-wrapper">
            <div class="columns is-multiline">
                {{-- Address these columns widths --}}
                <div class="column is-full">
                    <h1 class="title has-text-weight-semibold has-text-black-bis is-size-1">
                        About Me
                        {{-- Need to make this much bigger --}}
                    </h1>
                </div>
                <div class="column is-7">
                    <h2 class="subtitle has-text-weight-normal has-text-black-ter is-size-4 is-size-5-mobile">A
                        15 year old self-taught software developer, violinist, avid photographer, and lover
                        of everything minimalist.
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <p class="has-text-black-ter is-size-4 is-size-5-mobile">
            As a full-stack developer, I strongly believe in producing the highest quality work from all fronts: UI/UX,
            designs, atmosphere, and code. In my eyes, the most ideal design is one with carefully selected typography,
            subtle gradients and shadows, and well thought-out colors with vibrancy to bring minimalist designs to life.
            <br /><br />
            {{-- Put this in italics and as a "display" maybe? For emphasis --}}
            Attractive design doesn't have to be complex – it simply requires a purpose for every element.
            <br /><br />
            As a self-starter and enthusiast of constant improvement, I take part in the entrepreneurial side of
            technology too. I value the production of high-quality work that fits exactly my client's needs, and have no
            issue investing mass amounts of time to make it just right. I'm a believer in clear communication and
            smoother workflows, which only works out better for everyone involved.
            <br /><br />
            Beyond freelance work, I constantly have new ideas to pursue. Instead of solely having the goal of "starting
            a startup", I aim to provide value and impact on the users which interact with my product and business
            ideas. Through this, a clear connection between these values and effective development exists; the necessity
            to truly understand your users, which includes accepting feedback and investing in studying the effect
            which these products may have on an individual.
            <br /><br />
            When I'm not working on projects, I spend my time reading about a variety of subjects, listening to podcasts
            or lectures, and practicing violin – I'm
            a strong believer in "investing in yourself" through education and experiences.
            <br /><br />
            If you're looking for someone to bring your ideas to life, or have interests in collaborating with me, I'd
            love to make it a reality. <a href="/contact">Let's talk!</a>
            {{-- Make the above href black and underlined, then blue on hover --}}
            {{-- I also have a bird, two cats, and a fluffy Covachon named Bentley :) --}}
            {{-- Insert image of said animals here --}}
        </p>
    </div>
</section>
<section>
    <div class="container">
        <div class="columns">
            <div class="column is-half">
                <h1 class="has-text-weight-bold has-text-black-bis is-size-1 is-size-2-mobile">Services</h1>
            </div>
            <div class="column">
                <div class="tile is-ancestor has-text-black-bis">
                    <div class="tile is-parent is-vertical is-half">
                        <div class="tile is-child">
                            <ul>
                                <li class="has-text-weight-semibold">One</li>
                                <li>One</li>
                                <li>One</li>
                                <li>One</li>
                            </ul>
                        </div>
                        <div class="tile is-child">
                            <ul>
                                <li class="has-text-weight-semibold">One</li>
                                <li>One</li>
                                <li>One</li>
                                <li>One</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tile is-parent is-vertical is-half">
                        <div class="tile is-child">
                            <ul>
                                <li class="has-text-weight-semibold">One</li>
                                <li>One</li>
                                <li>One</li>
                                <li>One</li>
                            </ul>
                        </div>
                        <div class="tile is-child">
                            <ul>
                                <li class="has-text-weight-semibold">One</li>
                                <li>One</li>
                                <li>One</li>
                                <li>One</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
