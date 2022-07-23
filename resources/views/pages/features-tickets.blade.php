@extends('layouts.app')

@section('title', 'Tickets')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/chocolat/dist/css/chocolat.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tickets</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Tickets</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Help Your Customer</h2>
                <p class="section-lead">
                    Some customers need your help.
                </p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tickets</h4>
                            </div>
                            <div class="card-body">
                                <a href="#"
                                    class="btn btn-primary btn-icon icon-left btn-lg btn-block d-md-none mb-4"
                                    data-toggle-slide="#ticket-items">
                                    <i class="fas fa-list"></i> All Tickets
                                </a>
                                <div class="tickets">
                                    <div class="ticket-items"
                                        id="ticket-items">
                                        <div class="ticket-item active">
                                            <div class="ticket-title">
                                                <h4>Technical problem</h4>
                                            </div>
                                            <div class="ticket-desc">
                                                <div>Farhan A. Mujib</div>
                                                <div class="bullet"></div>
                                                <div>2 min ago</div>
                                            </div>
                                        </div>
                                        <div class="ticket-item">
                                            <div class="ticket-title">
                                                <h4>Cancel my order please!</h4>
                                            </div>
                                            <div class="ticket-desc">
                                                <div>Amanda Aprilia Azmi</div>
                                                <div class="bullet"></div>
                                                <div>Yesterday</div>
                                            </div>
                                        </div>
                                        <div class="ticket-item">
                                            <div class="ticket-title">
                                                <h4>Where is my mother?</h4>
                                            </div>
                                            <div class="ticket-desc">
                                                <div>Irwansyah Saputra</div>
                                                <div class="bullet"></div>
                                                <div>July 18, 2018</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ticket-content">
                                        <div class="ticket-header">
                                            <div class="ticket-sender-picture img-shadow">
                                                <img src="{{ asset('img/avatar/avatar-5.png') }}"
                                                    alt="image">
                                            </div>
                                            <div class="ticket-detail">
                                                <div class="ticket-title">
                                                    <h4>Technical Problem</h4>
                                                </div>
                                                <div class="ticket-info">
                                                    <div class="font-weight-600">Farhan A. Mujib</div>
                                                    <div class="bullet"></div>
                                                    <div class="text-primary font-weight-600">2 min ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                            <div class="gallery">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('img/news/img01.jpg') }}"
                                                    data-title="Image 1"></div>
                                                <div class="gallery-item"
                                                    data-image="{{ asset('img/news/img02.jpg') }}"
                                                    data-title="Image 2"></div>
                                                <div class="gallery-item"
                                                    data-image="{{ asset('img/news/img03.jpg') }}"
                                                    data-title="Image 3"></div>
                                                <div class="gallery-item gallery-more"
                                                    data-image="{{ asset('img/news/img04.jpg') }}"
                                                    data-title="Image 4">
                                                    <div>+2</div>
                                                </div>
                                            </div>

                                            <div class="ticket-divider"></div>

                                            <div class="ticket-form">
                                                <form>
                                                    <div class="form-group">
                                                        <textarea class="summernote form-control"
                                                            placeholder="Type a reply ..."></textarea>
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button class="btn btn-primary btn-lg">
                                                            Reply
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
