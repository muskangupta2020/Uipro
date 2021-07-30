<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
     @if (session('message') != null)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p class="alert alert-success">
                                {{ session('message') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
                    @if (session('notmessage') != null)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="alert alert-danger">
                                {{ session('notmessage') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
    <br><br><br><br>
    <div class="container">
        <center>
            <h2 class="text-primary">Member Register Now !</h2>
        </center>
        <form method="POST" action="{{ url('member/registration/save') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label>Name*</label>
                    <input type="text" class="form-control" type="text" placeholder="Mr xyz" name="name" value="{{ old('name') }}" required>
                </div><br>

                <div class="col">
                    <label>Member_sponsor_id</label>
                    <input type="text" name="sponser_id" value="<?php echo Auth::user()->sponser_id;?>"
                        class="form-control" readonly>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label>Email(Provide valid email)</label>
                    <input class="form-control" type="email" name="email" placeholder="xyz@domain.com"
                        value="{{ old('email') }}" required>
                </div>
                <div class="col">
                    <label>Phone no.(10-digit Number)</label>
                    <input class="form-control" type="text" name="phone_no" placeholder="91*******"
                        value="{{ old('phone_no') }}" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Placement ID</label>
                    <input class="form-control" type="text" name="placement_id"
                        placeholder="where you want to place the ID" value="{{ old('placement_id') }}" required>
                </div>
                <div class="col">
                    <label>Position*</label>
                    <select class="form-control" type="select" name="position" value="{{ old('position') }}" required>
                        <option>Left</option>
                        <option>Right</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Sign Up Plan*</label>
                    @foreach($plan as $p)
                    <select class="form-control" type="select" name="sign_up_plan" value="{{ old('sign_up_plan') }}" required>
                        <option selected value="sign_up_plan" >{{$p->plan_name}}. Price :<span>&#8377;</span>{{$p->joining_fee}}</option>
                    </select>
                    @endforeach
                </div>
                <div class="col">
                    <label>e-Pin</label>
                    <input class="form-control" name="e_pin" value="{{ old('e_pin') }}" required>
                </div>
            </div>
            <br>
            <div class="checkbox">
                <h6 class="text-primary">Pay later</h6>
                <label><input type="checkbox" value="" name="pay" value="{{ old('pay') }}"> I'll pay later</label>
            </div>
            <br>
            <div class="row">
                <div class="col" style="width: 50%">
                    <label for="sel1">State*</label>
                    <select class="form-control" type="select" name="states" value="{{ old('states') }}" required>
                        <option>Select State</option>
                        <option>Madhya Pradesh</option>
                        <option>Uttar Pradesh</option>
                        <option>Arunachal Pradesh</option>
                    </select>
                </div>
                <div class="col">
                    <label>City*</label>
                    <input class="form-control" type="text" name="city" placeholder="" value="{{ old('city') }}" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Street Address*</label>
                    <input type="text" class="form-control" type="text" placeholder="Flat/House No/Building"
                        name="street_address" value="{{ old('street_address') }}" required>
                </div><br>
                <div class="col">
                    <label>Zip Code*</label>
                    <input class="form-control" type="text" name="zipcode" placeholder=""
                        value="{{ old('zipcode') }}" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Password*</label>
                    <input type="text" class="form-control" type="text" name="password"
                        value="{{ old('password') }}" required>
                </div>
                <div class="col">
                    <label>Retype Password</label>
                    <input class="form-control" type="text" name="password" value="{{ old('password') }}" required>
                </div>
            </div><br>
            <button type="submit" class="btn btn-warning mt-3">Register</button>
        </form>
    </div>
    <br><br><br><br>
</body>

</html>
