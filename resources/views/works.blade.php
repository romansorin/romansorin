@extends('layouts.app')
@section('title', 'Works -')

@php
$posts = [
[
'title' => 'Coming soon.',
'subtitle' => 'A full display of projects and insights need time to make perfect'
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
                        A digital product studio with a love and passion for beautiful simplicity – This is simply
                        filler text.
                    </h1>
                </div>
                <div class="column is-7">
                    <h2 class="subtitle has-text-weight-normal has-text-black-ter is-size-5 is-size-6-mobile">
                        We design and build engaging mobile and web products for innovative entrepreneurs, startups and
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
                        <article-tile-long title="{{ $posts[0]['title'] }}" subtitle="{{ $posts[0]['subtitle'] }}" />
                    </div>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="tile is-parent">
                        <article-tile-short title="{{ $posts[0]['title'] }}" subtitle="{{ $posts[0]['subtitle'] }}" />
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
                        <article-tile-short title="{{ $posts[0]['title'] }}" subtitle="{{ $posts[0]['subtitle'] }}" />
                    </div>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="tile is-parent">
                        <article-tile-long title="{{ $posts[0]['title'] }}" subtitle="{{ $posts[0]['subtitle'] }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
