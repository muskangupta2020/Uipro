<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ url('user/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ url('user/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ url('user/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ url('user/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ url('user/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url('user/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('user/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('user/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('user/assets/css/icons.css') }}" rel="stylesheet">
    <title>Dashkote</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="{{ url('user/assets/images/logo-img.png') }}" width="180" alt="" /><br>
                        </div>
                        @if (session('message'))
                            <div class="alert alert-danger">{{ session('message') }}</div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class=""> User Sign in</h3>
                                        <p>Don't have an account yet? <a href="{{ route('register') }}">Sign up
                                                here</a>
                                        </p>
                                    </div>
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                                                class="d-flex justify-content-center align-items-center">
                                                <img class="me-2"
                                                    src="{{ url('user/assets/images/icons/search.svg') }}" width="16"
                                                    alt="Image Description">
                                                <span>Sign in with Google</span>
                                            </span>
                                        </a> <a href="javascript:;" class="btn btn-facebook"><i
                                                class="bx bxl-facebook"></i>Sign in with Facebook</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                                        <hr />
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ url('login/save') }}">
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter
                                                    Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password"
                                                        class="form-control border-end-0  @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password"
                                                        name="password">
                                                    <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end"> <a
                                                    href="authentication-forgot-password.html">Forgot Password ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="bx bxs-lock-open"></i>Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{ url('user/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ url('user/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('user/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ url('user/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ url('user/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });

    </script>
    <!--app JS-->
    <script src="{{ url('user/assets/js/app.js') }}"></script>
</body>

</html>
