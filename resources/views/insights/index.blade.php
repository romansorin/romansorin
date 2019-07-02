@extends('layouts.app')
@section('title', 'Insights -')
@section('description')
Insights from Roman Sorin.
@endsection
@section('content')
<section class="hero is-paddingless">
    <div class="hero-body is-paddingless">
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
    <div class="container">
        <div class="columns">
            <div class="column is-3">
        <aside class="section-sidebar">
            <h3 class="is-size-4 has-text-black-bis has-text-weight-bold">Categories</h3>
            <ul class="list is-shadowless">
                <li class="list-item">icon<a href="https://">Category 1</a></li>
                <li class="list-item">icon<a href="https://">Category 2</a></li>
                <li class="list-item">icon<a href="https://">Category 3</a></li>
                <li class="list-item">icon<a href="https://">Category 4</a></li>
            </ul>
            <h3 class="is-size-4 has-text-black-bis has-text-weight-bold">Follow</h3>
            <ul class="list is-shadowless">
                <li class="list-item">icon<a href="https://">Instagram</a></li>
                <li class="list-item">icon<a href="https://">LinkedIn</a></li>
                <li class="list-item">icon<a href="https://">Twitter</a></li>
            </ul>
        </aside>
    </div>
    <div class="column">
        <main>
            oyoyyooy
                <ul>
                        {{-- @foreach($insights as $insight)
                        <li>{{ $insight->title }}</li>
                        @endforeach --}}

                        {{-- Coming soon: an insight and
                                    overview of developing a dashboard on my portfolio, utilizing the Stripe API for managing
                                    invoices, creating ease for clients, and serving as a centralized CRUD for even a simple
                                    portfolio. Stay tuned. --}}
                    </ul>
                </div>
        </main>
    </div></div>
</section>
@endsection
