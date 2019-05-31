@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<section class="hero">
    <div class="hero-body">
        <div class="container hero-wrapper" id="contact-hero">
            <div class="columns is-multiline is-mobile">
                <div class="column is-full">
                    <h1 class="title has-text-weight-bold has-text-black-ter is-size-1">Let's Chat</h1>
                </div>
                <div class="column is-7">
                    <h2 class="subtitle has-text-weight-normal has-text-grey-darker is-size-4">If you're looking to hire
                        me,
                        work on a project,
                        or anything else, I'm all ears!</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <ul class="is-size-2 has-text-black-ter has-text-weight-semibold">
                    {{-- blue to black transition on hover of links --}}
                    <li><i data-feather="mail"></i> <a href="mailto:roman@romansorin.com">roman@romansorin.com</a>
                    </li>
                    <li><i data-feather="phone-call"></i> <a href="tel:4408971215">(440) 897 - 1215</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
