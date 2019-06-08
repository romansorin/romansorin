@extends('layouts.app')
@section('title', 'Works -')
@section('description')
Roman Sorin, a developer with a passion for simplicity, minimalism, and high-quality user experiences.
@endsection

@section('content')
<section class="hero">
    <div class="hero-body">
        <div class="container hero-wrapper" style="margin-bottom: 0">
            <div class="columns is-multiline">
                <div class="column is-full">
                    <h1 class="title has-text-weight-semibold has-text-black-bis is-size-1-tablet is-size-2-mobile">
                        A developer with a passion for simplicity, minimalism, and high-quality user experiences.
                    </h1>
                </div>
                <div class="column is-7">
                    <h2 class="subtitle has-text-weight-normal has-text-black-ter is-size-5 is-size-6-mobile">
                        I design and develop innovative engaging mobile and web products for entrepreneurs, startups,
                        and
                        businesses.
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    @foreach ($works as $work)
    @if ($loop->index % 2 == 0)
    <article-row-long-short></article-row-long-short>
    @else
    <article-row-short-long></article-row-short-long>
    @endif
    @endforeach
</section>

<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <p class="image is-4by3">
            <img src="#" alt="#" id="modal-image">
        </p>
    </div>
    <a class="modal-close is-large" aria-label="close"
        onclick="document.querySelector('.modal').classList.remove('is-active')"></a>
</div>
@endsection
