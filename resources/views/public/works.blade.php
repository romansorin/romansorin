@extends('layouts.public.app')
@section('title', 'Works -')
@section('description')
Roman Sorin, a developer with a passion for simplicity, minimalism, and high-quality user experiences.
@endsection
@php
$posts = [
[
'title' => 'Coming Soon',
'subtitle' => 'Providing professional impressions and quality work',
'image' =>
'https://images.pexels.com/photos/1670187/pexels-photo-1670187.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
'repo' => 'https://www.github.com/romansorin',
'insight' => 'https://www.romansorin.com/insights',
'alt' => 'image alt text'
],
];
@endphp

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
    <div class="container article-container">
        <div class="tile is-ancestor">
            <div class="columns is-desktop">
                <div class="column">
                    <div class="tile is-parent">
                        <article-tile-long title="{{ $posts[0]['title'] }}" subtitle="{{ $posts[0]['subtitle'] }}"
                            image="{{ $posts[0]['image'] }}" />
                    </div>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="tile is-parent">
                        <article-tile-short title="{{ $posts[0]['title'] }}" subtitle="{{ $posts[0]['subtitle'] }}"
                            repo="{{ $posts[0]['repo'] }}" image="{{ $posts[0]['image'] }}" />
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container article-container">
        <div class="tile is-ancestor">
            <div class="columns is-desktop">
                <div class="column">
                    <div class="tile is-parent">
                        <article-tile-short title="{{ $posts[0]['title'] }}" subtitle="{{ $posts[0]['subtitle'] }}"
                            image="{{ $posts[0]['image'] }}" />
                    </div>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="tile is-parent">
                        <article-tile-long title="{{ $posts[0]['title'] }}" subtitle="{{ $posts[0]['subtitle'] }}"
                            image="{{ $posts[0]['image'] }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
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
