@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="frist_name">First Name</label>
                        <input id="frist_name"
                            type="text"
                            class="form-control"
                            name="frist_name"
                            autofocus>
                    </div>
                    <div class="form-group col-6">
                        <label for="last_name">Last Name</label>
                        <input id="last_name"
                            type="text"
                            class="form-control"
                            name="last_name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email"
                        type="email"
                        class="form-control"
                        name="email">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="password"
                            class="d-block">Password</label>
                        <input id="password"
                            type="password"
                            class="form-control pwstrength"
                            data-indicator="pwindicator"
                            name="password">
                        <div id="pwindicator"
                            class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="password2"
                            class="d-block">Password Confirmation</label>
                        <input id="password2"
                            type="password"
                            class="form-control"
                            name="password-confirm">
                    </div>
                </div>

                <div class="form-divider">
                    Your Home
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Country</label>
                        <select class="form-control selectric">
                            <option>Indonesia</option>
                            <option>Palestine</option>
                            <option>Syria</option>
                            <option>Malaysia</option>
                            <option>Thailand</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Province</label>
                        <select class="form-control selectric">
                            <option>West Java</option>
                            <option>East Java</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>City</label>
                        <input type="text"
                            class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label>Postal Code</label>
                        <input type="text"
                            class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                            name="agree"
                            class="custom-control-input"
                            id="agree">
                        <label class="custom-control-label"
                            for="agree">I agree with the terms and conditions</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
