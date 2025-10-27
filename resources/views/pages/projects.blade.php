@extends('layouts.app')

@section('title', 'Projects - Portfolio')

@section('content')
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                @foreach(($projects ?? []) as $project)
                <x-project-card
                    class="{{ $loop->last ? '' : 'mb-5' }}"
                    :title="$project['title']"
                    :description="$project['description']"
                    :imageSrc="$project['imageSrc']"
                    :imageAlt="$project['imageAlt']" />
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('contact') }}">Contact me</a>
        </div>
    </div>
</section>
@endsection
