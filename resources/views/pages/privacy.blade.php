@extends('layouts.app')

@section('title', 'Privacy - Portfolio')

@section('content')
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Privacy Policy</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <p class="lead">Your privacy is important to us. This policy explains what data we collect and how we use it.</p>
                        <hr class="my-4">
                        <h2 class="h4 mt-4">Information We Collect</h2>
                        <p>We may collect personal information such as your name, email address, and any details you submit via contact forms.</p>
                        <h2 class="h4 mt-4">How We Use Information</h2>
                        <p>We use your information to respond to inquiries and improve our services. We do not sell your data.</p>
                        <h2 class="h4 mt-4">Contact</h2>
                        <p>If you have questions about this policy, please <a href="{{ route('contact') }}">contact us</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


