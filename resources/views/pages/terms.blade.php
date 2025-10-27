@extends('layouts.app')

@section('title', 'Terms - Portfolio')

@section('content')
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Terms of Service</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <p class="lead">Please read these terms of service carefully before using this site.</p>
                        <hr class="my-4">
                        <h2 class="h4 mt-4">Use of Site</h2>
                        <p>By accessing this website, you agree to comply with these terms and all applicable laws.</p>
                        <h2 class="h4 mt-4">Intellectual Property</h2>
                        <p>All content is provided for personal use. Unauthorized use may violate intellectual property laws.</p>
                        <h2 class="h4 mt-4">Contact</h2>
                        <p>Questions about these terms? <a href="{{ route('contact') }}">Contact us</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Need clarification on terms?</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('contact') }}">Contact me</a>
        </div>
    </div>
</section>
@endsection


