@extends('layouts.app')

@section('title', 'Vector Map')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/izitoast/dist/css/iziToast.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/flag-icon-css/css/flag-icon.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Vector Map</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Modules</a></div>
                    <div class="breadcrumb-item">Vector Map</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Vector Map</h2>
                <p class="section-lead">
                    We use the 'jQuery Vector Map Library' plugin to create vector maps. This plugin is created by
                    @manifestinteractive
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Vector Map</h4>
                            </div>
                            <div class="card-body">
                                <div id="visitorMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Vector Map With Flag Icon</h4>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    Click on the map below to change the icon
                                </div>
                                <div class="row align-items-center mb-4">
                                    <div class="col-6 text-right">
                                        <div class="font-weight-bold">You Choose: </div>
                                    </div>
                                    <div class="col-6">
                                        <span class="flag-icon flag-icon-id flag-icon-shadow"
                                            id="flag-icon"></span>
                                    </div>
                                </div>
                                <div id="visitorMap2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Indonesian Map</h4>
                            </div>
                            <div class="card-body">
                                <div id="visitorMap3"></div>
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
    <script src="{{ asset('library/izitoast/dist/js/iziToast.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.indonesia.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-vector-map.js') }}"></script>
@endpush
