<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | Kadso - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    @yield('css')

</head>

<body class="bg-color">

    <!-- Begin page -->
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12">
                <div class="p-0">
                    <div class="card-body row d-flex align-items-center">
                        <div class="col-md-6 col-xl-6 col-lg-6 p-0 vh-100 d-flex
                            justify-content-center account-page-bg">
                        </div>

                        <div class="col-md-6 col-xl-6 col-lg-6">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="mb-0 border-0">
                                        <div class="p-0">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <a href="{{ route('register') }}" class="auth-logo">
                                                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark"
                                                            class="mx-auto" height="28" />
                                                    </a>
                                                </div>

                                                <div class="auth-title-section mb-3">
                                                    <h3 class="text-dark fs-20 fw-medium mb-2">Get's started</h3>
                                                    <p class="text-dark text-capitalize fs-14 mb-0">Please enter your
                                                        details.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-0">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-group mb-3">
                                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                                    <input class="form-control @error('name') is-invalid @enderror" name="name"
                                                        value="{{ old('name') }}" required
                                                        autocomplete="name" autofocus type="name" id="name" placeholder="Enter your name">

                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                                    <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus type="email" id="email" placeholder="Enter your email">


                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                                    <input id="password" type="password" class="form-control
                                                        @error('password') is-invalid @enderror" name="password"
                                                        required autocomplete="current-password" placeholder="Enter your password">

                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                                    <input id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation" required autocomplete="new-password"
                                                        placeholder="Confirm your password">

                                                </div>


                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit">
                                                                {{ __('Register') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="text-center text-muted">
                                                <p class="mb-4 mt-2" style="font-size: 13px">Already have an account ?<a
                                                    class='text-primary ms-2 fw-medium' href='{{ route('login') }}'>Login
                                                    here</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('backendassets/js/app.js') }}"></script>

    @yield('js')
    @stack('script')

</body>

</html>
