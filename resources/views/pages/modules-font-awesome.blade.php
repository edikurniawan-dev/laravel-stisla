@extends('layouts.app')

@section('title', 'Font Awesome')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Font Awesome</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Modules</a></div>
                    <div class="breadcrumb-item">Font Awesome</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Font Awesome</h2>
                <p class="section-lead">
                    For icons, we use 'Font Awesome 5' made by @fontawesome. You can check the full documentation <a
                        href="http://fontawesome.com/">here</a>.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Uh! Why?</h4>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-primary alert-has-icon p-4">
                                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">Oh, no!</div>
                                        <p>Font Awesome 5 has many icons and we can not load it on this page, but you can
                                            still go to the official page to see the available icons.</p>
                                        <p>Font Awesome Free by @fontawesome</p>
                                        <p class="mt-3">
                                            <a href="https://fontawesome.com/icons"
                                                target="_blank"
                                                class="btn text-dark bg-white">Let's Go</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
