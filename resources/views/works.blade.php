@extends('layouts.app')
@section('title', 'Works')

@section('content')
<section class="hero">
    <div class="hero-body" id="example">
        {{ React::component('ArticleTileLarge') }}
    </div>
</section>
<section class="section">
    <div class="container article-container">
        <div class="tile is-ancestor">
            <div class="tile is-8 is-parent">
                <div class="tile article-tile is-child">
                    <a href="https://google.com">
                        <div class="article-tile-image article-tile-image--large">
                            <figure class="image">
                                <img src="https://images.pexels.com/photos/227675/pexels-photo-227675.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                alt="#">
                            </figure>
                        </div>
                        <div class="article-title-info">
                            <p class="title">Yoyoyoyoyo</p>
                            <p class="subtitle">Wassup hjomies!</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tile is-parent pl-0">
                <div class="tile article-tile is-child">
                    <div class=" article-tile-image article-tile-image--small">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/1829191/pexels-photo-1829191.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                alt="#">
                        </figure>
                    </div>
                    <div class="article-title-info">
                        <p class="title has-text-grey-darker">Yoyoyoyoyo</p>
                        <p class="subtitle has-text-grey-dark">Wassup hjomies!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container article-container">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="tile article-tile is-child">
                    <div class=" article-tile-image article-tile-image--small">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/1829191/pexels-photo-1829191.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                alt="#">
                        </figure>
                    </div>
                    <div class="article-title-info">
                        <p class="title has-text-grey-darker">Yoyoyoyoyo</p>
                        <p class="subtitle has-text-grey-dark">Wassup hjomies!</p>
                    </div>
                </div>
            </div>
            <div class="tile is-parent">
                <div class="tile article-tile is-child">
                    <div class="article-tile-image article-tile-image--large">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/227675/pexels-photo-227675.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                alt="#">
                        </figure>
                    </div>
                    <div class="article-title-info">
                        <p class="title">Yoyoyoyoyo</p>
                        <p class="subtitle">Wassup hjomies!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection