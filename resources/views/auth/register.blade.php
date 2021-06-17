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
    <title>Dashkote - Bootstrap5 Admin Template</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="my-4 text-center">
                            <img src="{{ url('user/assets/images/logo-img.png') }}" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">User Sign Up</h3>
                                        <p>Already have an account? <a href="{{ route('login') }}">Sign in here</a>
                                        </p>
                                    </div>
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                                                class="d-flex justify-content-center align-items-center">
                                                <img class="me-2"
                                                    src="{{ url('user/assets/images/icons/search.svg') }}" width="16"
                                                    alt="Image Description">
                                                <span>Sign Up with Google</span>
                                            </span>
                                        </a> <a href="javascript:;" class="btn btn-facebook"><i
                                                class="bx bxl-facebook"></i>Sign Up with Facebook</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
                                        <hr />
                                    </div><br>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="col-sm-12">
                                                <label for="inputFirstName" class="form-label">Name*</label
                                                    value="{{ old('name') }}">
                                                <input type="text" class="form-control" id="inputFirstName"
                                                    placeholder="Jhon" name="name">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control @error('email')
                                                is-invalid @enderror" id="inputEmailAddress"
                                                    placeholder="example@user.com" name="email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div><br>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label">Phone No* 10 digit
                                                    number</label>
                                                <input type="text" class="form-control" id="inputPhoneNo" placeholder=""
                                                    name="phone_no" value="{{ old('phone_no') }}">
                                            </div><br>

                                            <br>
                                            <div class="col-6">
                                                <label for="inputEmailAddress" class="form-label">Placement ID</label>
                                                <input type="text" class="form-control" id="placement_id"
                                                    placeholder="where you want to place the ID " name="placement_id"
                                                    value="{{ old('placement_id') }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label">Position</label>
                                                <input type="text" class="form-control" id="inputLastName"
                                                    placeholder="left" name="position" value="{{ old('position') }}">
                                            </div>

                                            <div class="col-12">
                                                <label for="inputSelectCountry" class="form-label">Sign UP Plan</label>
                                                <select class="form-select" id="inputSelectCountry"
                                                    aria-label="Default select example" name="sign_up_plan"
                                                    value="{{ old('sign_up_plan') }}">
                                                    <option value="A">Plan A. Price :<span>&#8377;</span>500.00
                                                    </option>
                                                    <option value="B">Plan B. Price :<span>&#8377;</span>10,000.00
                                                    </option>
                                                    <option value="C">Plan C. Price :<span>&#8377;</span>30,000.00
                                                    </option>
                                                    <option value="D">Plan D. Price :<span>&#8377;</span>100,000.00
                                                    </option>
                                                </select>
                                            </div><br>
                                            <div class="col-6">
                                                <label for="inputSelectCountry" class="form-label">State</label>
                                                <select class="form-select" id="inputSelectCountry"
                                                    aria-label="Default select example" name="states"
                                                    value="{{ old('states') }}">
                                                    <option selected>Select</option>
                                                    <option value="1">Madhya pradesh</option>
                                                    <option value="2">Uttar Pradesh</option>
                                                    <option value="3"></option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label">City</label>
                                                <input type="text" class="form-control" id="inputLastName"
                                                    placeholder="left" name="city" value="{{ old('city') }}">
                                            </div>
                                            <br>

                                            <div class="col-6">
                                                <label for="inputEmailAddress" class="form-label">Street Address</label>
                                                <input type="text" class="form-control" id="placement_id"
                                                    placeholder="Flat/House No./Floor/Building" name="street_address"
                                                    value="{{ old('street_address') }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" id="inputLastName"
                                                    placeholder="" name="zipcode" value="{{ old('zipcode') }}">
                                            </div>
                                            <br>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password"
                                                        class="form-control border-end-0" id="inputChoosePassword"
                                                        value="12345678" placeholder="Enter Password"> <a
                                                        href="javascript:;" class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                </div>
                                            </div><br>
                                            {{-- <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label"> Retype
                                                    Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"
                                                        id="inputChoosePassword" value="12345678"
                                                        placeholder="Enter Password"> <a href="javascript:;"
                                                        class="input-group-text bg-transparent"><i class='bx bx-hide'
                                                            ></i></a>
                                                </div>
                                            </div><br> --}}
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">I read
                                                        and agree to Terms & Conditions</label>
                                                </div>
                                            </div><br>
                                           
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class='bx bx-user'></i>Sign up</button>
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
