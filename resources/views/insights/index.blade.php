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
@endsection
